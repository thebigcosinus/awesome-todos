<?php
/**
 * Created by PhpStorm.
 * User: fabien
 * Date: 16/11/16
 * Time: 08:57
 */

namespace AppBundle\Entity;


use Symfony\Component\Validator\Constraints as Assert;

class Category
{
    /**
     * @var
     * @Assert\NotBlank()
     */
    protected $name;

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
}
