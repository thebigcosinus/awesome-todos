<?php

/**
 * Created by PhpStorm.
 * User: fabien
 * Date: 20/11/16
 * Time: 06:04
 */

namespace AppBundle\DataFixtures\ORM;

use AppBundle\Entity\Label;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

class LoadLabelData extends AbstractFixture implements OrderedFixtureInterface
{

    /**
     * @param ObjectManager $manager
     * @return mixed
     */
    public function load(ObjectManager $manager)
    {
        $label1 = array(
            array('name' => 'famille', 'color' => '#F3F781', 'ref'=>'label-famille-god'),
            array('name' => 'travail','color' => '#BCF5A9', 'ref'=>'label-travail-god'),
            array('name' => 'course','color' => '#9F81F7', 'ref'=>'label-course-god'),
            array('name' => 'aline','color' => '#B4045F', 'ref'=>'label-aline-god'),
            array('name' => 'argent','color' => '#DF0174', 'ref'=>'label-argent-god'),
        );

        $label2 = array(
            array('name' => 'famille', 'color' => '#F3F781', 'ref'=>'label-famille-fabien'),
            array('name' => 'travail','color' => '#BCF5A9', 'ref'=>'label-travail-fabien'),
            array('name' => 'course','color' => '#9F81F7', 'ref'=>'label-course-fabien'),
            array('name' => 'maison','color' => '#B4045F', 'ref'=>'label-maison-fabien'),
            array('name' => 'argent','color' => '#DF0174', 'ref'=>'label-argent-fabien'),
        );

        $godUser = $this->getReference('god-user');
        $fabienUser = $this->getReference('fabien-user');

        foreach ($label1 as $l) {
            $label = new Label();
            $label->setOwner($godUser);
            $label->setName($l['name']);
            $label->setColor($l['color']);
            $this->addReference($l['ref'], $label);
            $manager->persist($label);
        }
        foreach ($label2 as $key => $l) {
            $label = new Label();
            $label->setOwner($fabienUser);
            $label->setName($l['name']);
            $label->setColor($l['color']);
            $this->addReference($l['ref'], $label);
            $manager->persist($label);
        }

        $manager->flush();
    }


    /**
     * Get the order of this fixture
     *
     * @return integer
     */
    public function getOrder()
    {
        return 107;
    }
}
