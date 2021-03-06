<?php
/**
 * Created by PhpStorm.
 * User: fabien
 * Date: 16/11/16
 * Time: 08:57
 */

namespace AppBundle\Entity;


use AppBundle\Entity\Traits\TimestampableTrait;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Category
 *
 * @ORM\Table(name="category")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\CategoryRepository")
 */
class Category
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
     * @var
     * @Assert\NotBlank(message = "category.name.not_blank")
     * @ORM\Column(name="name", type="string", length=255, nullable=false, unique=false)
     * @Assert\Length(min="3",
     *                max="20",
     *                minMessage="The category name must be at least {{ limit }} characters long",
     *                maxMessage="The category name cannot be longer than {{ limit }} characters")
     */
    protected $name;

    /**
     * @var
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\Todo", mappedBy="category")
     * Relation inverse: entité propriétaire Todo $categories->getTodos()
     *
     */
    protected $todos;

    /**
     * @var
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\User")
     * @ORM\JoinColumn(nullable=false)
     * Entité propriétaire
     * @Assert\Valid()
     */
    protected $owner;

    public function __construct()
    {
        $this->createdAt = $this->updatedAt = new \DateTime();
        $this->todos = new ArrayCollection();
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getOwner()
    {
        return $this->owner;
    }

    /**
     * @param mixed $owner
     */
    public function setOwner($owner)
    {
        $this->owner = $owner;
    }
    
    /**
     * Add todo
     *
     * @param \AppBundle\Entity\Todo $todo
     *
     * @return Category
     */
    public function addTodo(\AppBundle\Entity\Todo $todo)
    {
        $this->todos[] = $todo;

        return $this;
    }

    /**
     * Remove todo
     *
     * @param \AppBundle\Entity\Todo $todo
     */
    public function removeTodo(\AppBundle\Entity\Todo $todo)
    {
        $this->todos->removeElement($todo);
    }

    /**
     * Get todos
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getTodos()
    {
        return $this->todos;
    }

    public function getDisplay() {
        return $this->id .' - '. $this->name;
    }
}
