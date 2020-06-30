<?php

class userInfo
{
    public function getUserName()
    {
        return 'name';
    }

    // Here SRP violates
    public function sendMailToUser()
    {
        return 'success';
    }
}