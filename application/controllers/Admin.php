<?php

/**
 * Created by PhpStorm.
 * User: Rishat
 * Date: 09.09.2017
 * Time: 17:18
 */
class Admin extends CI_Controller
{
    public function checkAdmin()
    {
        // Check sessions admin or no.
        // there ..... need
        // END Check
        $auth = false;
        if($auth) {
            return true;
        }
        else{
            return false;
        }
    }
    public function panel()
    {
        if($this->checkAdmin()){
            echo 'You auth like admin';
        }
        else{
            redirect('404');
        }
    }

}