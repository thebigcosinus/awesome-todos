<?php
/**
 * Created by PhpStorm.
 * User: fabien
 * Date: 16/11/16
 * Time: 09:28
 */

namespace AppBundle\Entity;


class Label
{
    private $name;

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

    public function addTask(Task $task) {
        if (!$this->tasks->contains($task)) {
            $this->tasks->add($task);
        }
    }

}
