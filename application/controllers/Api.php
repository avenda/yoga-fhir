<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

require_once(APPPATH.'/libraries/REST_Controller.php');

class Api extends REST_Controller {

    function __construct() {
        parent::__construct();
        //Session validation here
    }

}