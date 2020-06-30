<?php

/*
 * DIP violates
 */
class GoogleAuthenticationService
{
    public function authenticate($email)
    {
        return 'true';
    }
}


class userLogin
{
    public function login($email)
    {
        // DIP violates here
        $google_authentication = new GoogleAuthenticationService();
        $auth_result = $google_authentication->authenticate($email);

        if ($auth_result) {
            return true;
        }
    }
}



$login = new userLogin();
$login->login('samadocpl@gmail.com');