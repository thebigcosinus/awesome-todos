<?php

/**
 * Created by PhpStorm.
 * User: fabien
 * Date: 20/11/16
 * Time: 06:04
 */

namespace AppBundle\DataFixtures\ORM;

use AppBundle\Entity\User;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

class LoadUserData implements FixtureInterface, ContainerAwareInterface
{

    private $container;

    /**
     * @param ObjectManager $manager
     * @return mixed
     */
    public function load(ObjectManager $manager)
    {
        $listNames = array('Fabien'=>array('ROLE_ADMIN', 'ROLE_USER'), 'Aline'=> array('ROLE_USER'), 'Sophie'=>array('ROLE_USER'));

        foreach ($listNames as $name => $roles) {
            $user = new User();

            $user->setUsername($name);
            $user->setPassword($name);
            $user->setEmail($name.'@localhost');

            $user->setSalt('');
            
            $user->setIsActive(true);

            $user->setRoles($roles);

            $manager->persist($user);

        }
        $manager->flush();
    }

    /**
     * @param null|ContainerInterface|null $container
     * @return mixed
     */
    public function setContainer(ContainerInterface $container = null)
    {
        $this->container = $container;
    }
}