<?php
/**
 * Created by PhpStorm.
 * User: fabien
 * Date: 20/11/16
 * Time: 06:30
 */

namespace AppBundle\DataFixtures\ORM;


use AppBundle\Entity\Category;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

class LoadCategorylData extends AbstractFixture implements FixtureInterface, OrderedFixtureInterface
{

    /**
     * @param ObjectManager $manager
     * @return mixed
     */
    public function load(ObjectManager $manager)
    {
        $category1 = new Category();
        $category1->setName('categorie1');
        $owner1 = $this->getReference('god-user');
        $category1->setOwner($owner1);


        $category2 = new Category();
        $category2->setName('categorie2');
        $owner2 = $this->getReference('fabien-user');
        $category2->setOwner($owner2);

       
        $manager->persist($category1);
        $manager->persist($category2);

        $manager->flush();

        $this->addReference('categorie1', $category1);
        $this->addReference('categorie2', $category2);
    }

    /**
     * @return mixed
     */
    public function getOrder()
    {
        return 103;
    }
}
