<?php

namespace AppBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Created by PhpStorm.
 * User: fabien
 * Date: 15/11/16
 * Time: 20:21
 */
class Task
{

    const TYPE_PRIVATE = 'private';

    const TYPE_PUBLIC = 'public';


    /**
     * @var
     * @ORM\Column(type="type", length=255)
     */
    protected $description;

    /**
     * @var ArrayCollection
     * @ORM\ManyToMany(targetEntity="Label", cascade={"persist"})
     *
     */
    protected $label;
   /**
     * @var
     * @Assert\Type(type="AppBundle\Entity\Category")
     * @Assert\Valid()
     */

    protected $category;

    //protected $tags;

    /**
     * @var
     */
    protected $type;

    /**
     * @var
     * @ORM\Column(type="boolean")
     */
    protected $isActive;

    /**
     * @var
     * @Assert\NotBlank()
     */
    protected $task;

    /**
     * @var
     * @Assert\NotBlank()
     * @Assert\Type("\DateTime")
     */
    protected $dueDate;

    /**
     * Task constructor.
     * @param $tagnames
     */
    public function __construct()
    {
        $this->label = new ArrayCollection();
    }


    /**
     * @return mixed
     */
    public function getTask()
    {
        return $this->task;
    }

    /**
     * @param mixed $task
     */
    public function setTask($task)
    {
        $this->task = $task;
    }

    /**
     * @return mixed
     */
    public function getDueDate()
    {
        return $this->dueDate;
    }

    /**
     * @param mixed $dueDate
     */
    public function setDueDate(\DateTime $dueDate = null)
    {
        $this->dueDate = $dueDate;
    }

    /**
     * @return mixed
     */

    public function getActive()
    {
        return $this->isActive;
    }

    /**
     * @param mixed $isActive
     */
    public function setActive($isActive)
    {
        $this->isActive = $isActive;
    }

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param mixed $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * @return mixed
     */
    public function getTags()
    {
        return $this->tags;
    }

    /**
     * @param mixed $tags
     */
    public function setTags($tags)
    {
        $this->tags = $tags;
    }

    /**
     * @return mixed
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * @param mixed $category
     */
    public function setCategory(Category $category = null)
    {
        $this->category = $category;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return ArrayCollection
     */
    public function getLabel()
    {
        return $this->label;
    }

    public function addLabel(Label $label) {
        $label->addTask($this);

        $this->label->add($label);
    }
    
    public function removeLabel(Label $label) {
        $this->tasks->removeElement($label);
    }


}
