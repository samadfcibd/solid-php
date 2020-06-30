<?php

/*
 * Refactor
 */

interface AuthenticationService
{
    public function authenticate($email);
}

class GoogleAuthenticationService implements AuthenticationService
{
    public function authenticate($email)
    {
        return 'true';
    }
}

class GithubAuthenticationService implements AuthenticationService
{
    public function authenticate($email)
    {
        return 'true';
    }
}


class userLogin
{
    public function login($email, AuthenticationService $authenticationService)
    {
        // DIP
        // Dependency inverted on abstraction
        $auth_result = $authenticationService->authenticate($email);

        if ($auth_result) {
            return true;
        }
    }
}


$login = new userLogin();
$login->login('samadocpl@gmail.com', new GithubAuthenticationService());