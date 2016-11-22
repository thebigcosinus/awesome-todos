<?php

/**
 * Created by PhpStorm.
 * User: fabien
 * Date: 20/11/16
 * Time: 06:04
 */

namespace AppBundle\DataFixtures\ORM;

use AppBundle\Entity\User;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

class LoadUserData extends AbstractFixture implements ContainerAwareInterface, OrderedFixtureInterface
{
    /** @var  ContainerInterface $container */
    private $container;

    /**
     * @param ObjectManager $manager
     * @return mixed
     */
    public function load(ObjectManager $manager)
    {
        $listNames = array(
            'Fabien' => array('roles' => array('ROLE_ADMIN', 'ROLE_USER'), 'ref' => 'fabien-user'),
            'Aline' => array('roles' => array('ROLE_USER'), 'ref' => 'aline-user'),
            'Sophie' => array('roles' => array('ROLE_USER'), 'ref' => 'sophie-user'),
            'admin' => array('roles' => array('ROLE_ADMIN'), 'ref' => 'admin-user'),
            'god' => array('roles' => array('ROLE_SUPER_ADMIN'), 'ref' => 'god-user')
        );

        $encoder = $this->container->get('security.password_encoder');

        foreach ($listNames as $name => $params) {
            $user = new User();

            $user->setUsername($name);

            $user->setPassword($encoder->encodePassword($user, $name));

            $user->setEmail($name.'@localhost');

            $user->setIsActive(true);

            $user->setRoles($params['roles']);

            $manager->persist($user);

            $this->addReference($params['ref'], $user);

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

    /**
     * Get the order of this fixture
     *
     * @return integer
     */
    public function getOrder()
    {
        return 1;
    }
}
