<?php

namespace AppBundle\Security\Authenticator;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Core\User\UserProviderInterface;
use Symfony\Component\Security\Http\Authentication\SimplePreAuthenticatorInterface;

class Facebook implements SimplePreAuthenticatorInterface
{

    public function createToken(Request $request, $providerKey)
    {
        // TODO: Implement createToken() method.
    }

    public function supportsToken(TokenInterface $token, $providerKey)
    {
        // TODO: Implement supportsToken() method.
    }

    public function authenticateToken(TokenInterface $token, UserProviderInterface $userProvider, $providerKey)
    {
        // TODO: Implement authenticateToken() method.
    }

}