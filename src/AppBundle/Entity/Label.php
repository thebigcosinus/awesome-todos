<?php
/**
 * Created by PhpStorm.
 * User: fabien
 * Date: 16/11/16
 * Time: 09:28
 */

namespace AppBundle\Entity;

use AppBundle\Entity\Traits\TimestampableTrait;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints\DateTime;

/**
 * Class Label
 * @package AppBundle\Entity
 * @ORM\Table(name="labels")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\LabelRepository")
 */
class Label
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
     * @ORM\Column(type="string", length=50,nullable=false, unique=false)
     */
    private $name;

    /**
     * @var
     * @ORM\Column(type="string", length=50, nullable=true, unique=false)
     */
    private $color;

    /**
     * @var
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\User")
     * @ORM\JoinColumn(nullable=false)
     */
    private $owner;
    
    public function __construct()
    {
        $this->createdAt = $this->updatedAt = new \DateTime();
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

    public function addTask(Task $task) {
        if (!$this->tasks->contains($task)) {
            $this->tasks->add($task);
        }
    }

    /**
     * @return mixed
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * @param mixed $color
     */
    public function setColor($color)
    {
        $this->color = $color;
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

}
