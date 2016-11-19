<?php
/**
 * Created by PhpStorm.
 * User: fabien
 * Date: 18/11/16
 * Time: 09:17
 */

namespace AppBundle\Security;


use Symfony\Component\Security\Core\Exception\UnsupportedUserException;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\User\UserProviderInterface;

class ApiKeyUserProvider implements UserProviderInterface
{

    /**
     * @param $username
     * @return mixed
     */
    public function loadUserByUsername($username)
    {
        return new User($username,null, array('ROLE_API'));
    }

    /**
     * @param UserInterface $user
     * @return mixed
     */
    public function refreshUser(UserInterface $user)
    {
        throw new UnsupportedUserException();
    }

    /**
     * @param $class
     * @return mixed
     */
    public function supportsClass($class)
    {
        return 'Symfony\Compoenent\Security\Core\User\User' === $class;
    }

    public function getUsernameForApiKey($apiKey)
    {
        // Look up the username based on the token in the database, via
        // an API call, or do something entirely different
        $username = '...';

        return $username;
    }

}
