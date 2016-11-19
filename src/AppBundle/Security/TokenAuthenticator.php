<?php

namespace AppBundle\Security;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Core\Exception\AuthenticationException;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\User\UserProviderInterface;
use Symfony\Component\Security\Guard\AbstractGuardAuthenticator;

/**
 * Created by PhpStserviceorm.
 * User: fabien
 * Date: 17/11/16
 * Time: 13:43
 */
class TokenAuthenticator extends AbstractGuardAuthenticator
{

    public function start(
        Request $request,
        AuthenticationException $authException = null
    ) {
        $data = array('message' => 'Authentication required');

        return new JsonResponse($data, 401);
    }

    public function getCredentials(Request $request)
    {
        if (!$token = $request->headers->get('X-AUTH-TOKEN')) {
            return;
        }
        return array('token' => $token);
    }

    public function getUser($credentials, UserProviderInterface $userProvider)
    {
        $apiKey = $credentials['token'];

        return $userProvider->loadUserByUsername($apiKey);
    }

    public function checkCredentials($credentials, UserInterface $user)
    {
        return true;
    }

    public function onAuthenticationFailure(
        Request $request,
        AuthenticationException $exception
    ) {
        $data = array(
            'message' => strtr(
                $exception->getMessageKey(),
                $exception->getMessageData()
            ));

        return new JsonResponse($data, 403);
    }

    public function onAuthenticationSuccess(
        Request $request,
        TokenInterface $token,
        $providerKey
    ) {
        return null;
    }

    public function supportsRememberMe()
    {
        return false;
    }
}
