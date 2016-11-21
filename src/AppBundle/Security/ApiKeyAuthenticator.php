<?php
/**
 * Created by PhpStorm.
 * User: fabien
 * Date: 18/11/16
 * Time: 09:00
 */

namespace AppBundle\Security;


use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Core\Authentication\Token\PreAuthenticatedToken;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Core\Exception\AuthenticationException;
use Symfony\Component\Security\Core\Exception\CustomUserMessageAuthenticationException;
use Symfony\Component\Security\Core\User\UserProviderInterface;
use Symfony\Component\Security\Http\Authentication\AuthenticationFailureHandlerInterface;
use Symfony\Component\Security\Http\Authentication\SimplePreAuthenticatorInterface;

class ApiKeyAuthenticator implements SimplePreAuthenticatorInterface, AuthenticationFailureHandlerInterface
{

    /**
     * @param TokenInterface $token
     * @param UserProviderInterface $userProvider
     * @param $providerKey
     * @return mixed
     */
    public function authenticateToken(
        TokenInterface $token,
        UserProviderInterface $userProvider,
        $providerKey
    ) {
        if (!$userProvider instanceof ApiKeyUserProvider) {
            throw new \InvalidArgumentException(
                sprintf(
                    'The user provider must be an instance of ApiKeyUserProvider (%s was given).',
                    get_class($userProvider)
                )
            );
        }

        $apiKey = $token->getCredentials();
        $username = $userProvider->getUsernameForApiKey($apiKey);

        if (!$username) {
            throw new CustomUserMessageAuthenticationException(sprintf('API Key "%s" does not exist.', $apiKey));

        }
        $user = $userProvider->loadUserByUsername($username);
        return new PreAuthenticatedToken($user, $apiKey,$providerKey, $user->getRoles());
    }

    /**
     * @param TokenInterface $token
     * @param $providerKey
     * @return mixed
     */
    public function supportsToken(TokenInterface $token, $providerKey)
    {
        return $token instanceof PreAuthenticatedToken && $token->getProviderKey() === $providerKey;
    }

    /**
     * @param Request $request
     * @param $providerKey
     * @return mixed
     */
    public function createToken(Request $request, $providerKey)
    {
        $apiKey = $request->query->get('apikey');

        if (!$apiKey) {
            // or to just skip api key authentication
            return null;
        }

        return new PreAuthenticatedToken(
            'anon.',
            $apiKey,
            $providerKey
        );
    }

    /**
     * @param Request $request
     * @param AuthenticationException $exception
     * @return mixed
     */
    public function onAuthenticationFailure(
        Request $request,
        AuthenticationException $exception
    ) {
        return new Response(
            strtr($exception->getMessageKey(), $exception->getMessageData()), 401
        );
    }
}
