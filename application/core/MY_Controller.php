<?php

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class MY_Controller extends CI_Controller {

    protected $data;

    public function __construct() {
        parent::__construct();

        if (!$this->ion_auth->logged_in()) {
            redirect('auth', 'refresh');
        }

        $user = $this->ion_auth->user()->row();

        $this->data['firstName'] = $user->first_name;
        $this->data['fullname'] = $user->first_name . ' ' . $user->last_name;
    }

}