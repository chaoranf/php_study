<?php
/**
 * Created by PhpStorm.
 * User: vistor
 * Date: 2017/9/8
 * Time: 17:07
 */

class Admin extends CI_Controller
{
    public function index()
    {
        $this->load->view('back_manager/fullcalendar.html');
    }

}