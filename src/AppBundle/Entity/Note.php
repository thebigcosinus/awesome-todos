<?php

namespace AppBundle\Entity;

use AppBundle\Entity\Traits\TimestampableTrait;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Note
 *
 * @ORM\Table(name="note")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\NoteRepository")
 */
class Note
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
     *
     * @ORM\Column(name="content", type="text", nullable=false)
     * @Assert\NotBlank()
     */
    private $content;

    /**
     * @var Todo
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Todo", inversedBy="notes")
     * @ORM\JoinColumn(name="todo_id", referencedColumnName="id", nullable=false)
     */
    private $todo;

    public function __construct() {
        $this->createdAt = new \DateTime();
        $this->updatedAt = new \DateTime();
    }
    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set content
     *
     * @param string $content
     *
     * @return Note
     */
    public function setContent($content)
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Get content
     *
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }


    /**
     * @return Todo
     */
    public function getTodo() {
        return $this->todo;
    }

    /**
     * @param Todo $todo
     */
    public function  setTodo(Todo $todo) {
        $this->todo = $todo;
    }

}
