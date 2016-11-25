<?php

namespace AppBundle\Entity;

use AppBundle\Entity\Traits\TimestampableTrait;
use AppBundle\Validator\Antiflood;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Validator\Constraints\DateTime;
use Symfony\Component\Validator\Context\ExecutionContextInterface;

/**
 * Todo
 *
 * @ORM\Table(name="todos")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\TodoRepository")
 */
class Todo
{
    use TimestampableTrait;

    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     * @ORM\Column(name="name", type="string", length=255, nullable=false)
     * @Assert\Length(min="3",
     *                max="100",
     *                minMessage="The todo name must be at least {{ limit }} characters long",
     *                maxMessage = "The todo name cannot be longer than {{ limit }} characters"
     * )
     * @Assert\NotBlank()
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Category", inversedBy="todos")
     * @ORM\JoinColumn(name="category_id", referencedColumnName="id", nullable=false)
     * Entité propriétaire Todo $todo->getCtaegory()
     * @Assert\Valid()
     */
    private $category;

    /**
     * @var string
     * @ORM\Column(name="description", type="string", length=255, nullable=true)
     * @Antiflood()
     */
    private $description;

    /**
     * @var string
     * @ORM\Column(name="due_date", type="datetime", nullable=true)
     * @Assert\DateTime()
     */
    private $dueDate;

    /**
     * @var bool
     * @ORM\Column(type="boolean")
     * @Assert\Type(type="boolean")
     */
    private $isCompleted = false;

    /**
     * @var
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\User")
     * @ORM\JoinColumn(nullable=false)
     * Entité propriétaire
     *
     */
    private $creator;

    /**
     * @var
     * @ORM\ManyToMany(targetEntity="AppBundle\Entity\Label", cascade={"persist"})
     * @Assert\Valid()
     */
    private $labels;

    /**
     * @var
     * @ORM\ManyToMany(targetEntity="AppBundle\Entity\Attachment", cascade={"persist"})
     * @Assert\Valid()
     */
    private $attachments;

    /**
     * @var
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\Note", mappedBy="todo", cascade={"persist"})
     * @Assert\Valid()
     */
    private $notes;

    /**
     * @return mixed
     */
    public function getCreator()
    {
        return $this->creator;
    }

    /**
     * @ORM\Column(type="boolean", name="is_public")
     * @Assert\Type(type="boolean")
     */
    private $isPublic;

    /**
     * @param mixed $creator
     */
    public function setCreator(User $creator)
    {
        $this->creator = $creator;

        return $this;
    }

    public function __construct()
    {

        $this->createdAt = new \DateTime();
        $this->updatedAt = new \DateTime();
        $this->labels = new ArrayCollection();
        $this->attachments = new ArrayCollection();
        $this->notes = new ArrayCollection();
        $this->isPublic = false;
    }

    /**
     * Get id
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return Todo
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set category
     * @param Category $category
     * @return Todo
     */
    public function setCategory(Category $category)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Get category
     * @return string
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Todo
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set dueDate
     *
     * @param DateTime $dueDate
     * @return Todo
     */
    public function setDueDate(\DateTime $dueDate = null)
    {
        $this->dueDate = $dueDate;

        return $this;
    }

    /**
     * Get dueDate
     * @return string
     */
    public function getDueDate()
    {
        return $this->dueDate;
    }

    /**
     * @param Note $note
     */
    public function addNote(Note $note)
    {
        $this->notes->add($note);

        $note->setTodo($this);
    }

    /**
     * @param Note $note
     */
    public function removeNote(Note $note)
    {
        $this->notes->removeElement($note);
    }

    /**
     * @return ArrayCollection
     */
    public function getNotes()
    {
        return $this->notes;
    }

    /**
     * @param Label $label
     */
    public function addLabel(Label $label)
    {
        $this->labels[] = $label;
    }

    /**
     * @param Label $label
     */
    public function removeLabel(Label $label)
    {
        $this->labels->removeElement($label);
    }

    /**
     * @return ArrayCollection
     */
    public function getLabels()
    {
        return $this->labels;
    }

    /**
     * @param Attachment $attachment
     */
    public function addAttachment(Attachment $attachment)
    {
        $this->attachments[] = $attachment;
    }

    /**
     * @param Attachment $attachment
     */
    public function removeAttachment(Attachment $attachment)
    {
        $this->attachments->removeElement($attachment);
    }

    /**
     * @return ArrayCollection
     */
    public function getAttachments()
    {
        return $this->attachments;
    }


    /**
     * Set isPublic
     *
     * @param boolean $isPublic
     *
     * @return Todo
     */
    public function setPublic($isPublic)
    {
        $this->isPublic = $isPublic;

        return $this;
    }

    /**
     * Get isPublic
     *
     * @return boolean
     */
    public function getPublic()
    {
        return $this->isPublic;
    }

    /**
     * @param ExecutionContextInterface $context
     * @Assert\Callback
     */
    public function isDescriptionValid(ExecutionContextInterface $context)
    {
        $forbiddenWords = array('démotivation', 'abandon');

        if (preg_match(
            '#'.implode('|', $forbiddenWords).'#',
            $this->getDescription()
        )) {
            $context->buildViolation(
                'Contenu invalide car il contient un mot interdit.'
            )
                ->atPath('description')
                ->addViolation();
        }
    }

    /**
     * Set isCompleted
     *
     * @param boolean $isCompleted
     *
     * @return Todo
     */
    public function setIsCompleted($isCompleted)
    {
        $this->isCompleted = $isCompleted;

        return $this;
    }

    /**
     * Get isCompleted
     *
     * @return boolean
     */
    public function getIsCompleted()
    {
        return $this->isCompleted;
    }

    /**
     * Set isPublic
     *
     * @param boolean $isPublic
     *
     * @return Todo
     */
    public function setIsPublic($isPublic)
    {
        $this->isPublic = $isPublic;

        return $this;
    }

    /**
     * Get isPublic
     *
     * @return boolean
     */
    public function getIsPublic()
    {
        return $this->isPublic;
    }
}
