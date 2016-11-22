<?php
/**
 * Created by PhpStorm.
 * User: fabien
 * Date: 20/11/16
 * Time: 06:30
 */

namespace AppBundle\DataFixtures\ORM;


use AppBundle\Entity\Todo;
use AppBundle\Entity\Category;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

class LoadTodoData extends AbstractFixture implements OrderedFixtureInterface
{

    /**
     * @param ObjectManager $manager
     * @return mixed
     */
    public function load(ObjectManager $manager)
    {

        $categorie1 = $this->getReference('categorie1');
        $categorie2 = $this->getReference('categorie2');

        $godUser = $this->getReference('god-user');
        $fabienUser = $this->getReference('fabien-user');

        $todo1 =  new Todo();
        $todo1->setCategory($categorie1);
        $todo1->setCreator($godUser);
        $todo1->setName("Todo1");
        $todo1->setDueDate(new \DateTime());
        $todo1->setDescription('DF-Todo1');

        $todo2 =  new Todo();
        $todo2->setCategory($categorie1);
        $todo2->setName("Todo2");
        $todo2->setDueDate(new \DateTime());
        $todo2->setDescription('DF-Todo2');
        $todo2->setCreator($godUser);

        $todo3 =  new Todo();
        $todo3->setCategory($categorie2);
        $todo3->setName("Todo3");
        $todo3->setDueDate(new \DateTime());
        $todo3->setDescription('DF-Todo3');
        $todo3->setCreator($fabienUser);

        //$manager->persist($categorie1);
        //$manager->persist($categorie2);
        $manager->persist($todo1);
        $manager->persist($todo2);
        $manager->persist($todo3);
        $manager->flush();

        $this->addReference('todo1', $todo1);
        $this->addReference('todo2', $todo2);
        $this->addReference('todo3', $todo3);
    }

    /**
     * @return mixed
     */
    public function getOrder()
    {
        return 110;
    }
}
