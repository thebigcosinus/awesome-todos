<?php
/**
 * Created by PhpStorm.
 * User: fabien
 * Date: 20/11/16
 * Time: 06:30
 */

namespace AppBundle\DataFixtures\ORM;


use AppBundle\Entity\Todo;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

class LoadTodoData implements FixtureInterface
{

    /**
     * @param ObjectManager $manager
     * @return mixed
     */
    public function load(ObjectManager $manager)
    { return;
        $todo =  new Todo();

        $todo->setName("Todo1");
        $todo->setDueDate(new \DateTime());
        $todo->setDescription('DF-Todo1');
        $todo->setCategory('Course');
        $manager->persist($todo);
        $manager->flush();
    }
}
