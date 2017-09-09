<?php
/**
 * Created by PhpStorm.
 * User: Ришат
 * Date: 09.09.2017
 * Time: 18:15
 */
class Migrate extends CI_Controller {
    public function index()
    {
        // load migration library
        $this->load->library('migration');

        if ( ! $this->migration->current())
        {
            echo 'Error' . $this->migration->error_string();
        } else {
            echo 'Migrations ran successfully!';
        }
    }
}