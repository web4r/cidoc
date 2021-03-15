<?php

class Main extends CI_Controller{

    public function index(){

        $data['content'] = "dashboard/dashboard";
        $this->load->view('main',$data);
    }
}


?>