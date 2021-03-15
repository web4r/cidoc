<?php
 use GuzzleHttp\Client;


class Ongkir extends CI_Controller{
    
    public function index(){
        $data["content"] = "ongkir/ongkir";
        $this->load->view("main",$data);
    }

    public function provinsi()
    {
        $client = new Client();
        $key = "a09b9b90ef28f6644fcb950e62c6253f";
        // $res = $client->request('GET',"https://jsonplaceholder.typicode.com/todos/");
        $res = $client->request('GET',"https://api.rajaongkir.com/starter/province",[
            "headers" => array(
                'key' => $key
            )
        ]);
        $data["json"] = $res->getBody();
        $data["content"] = "ongkir/provinsi";
        $this->load->view('main',$data);
    }

    public function dumy()
    {
       
        $client = new Client();
        $key = "a09b9b90ef28f6644fcb950e62c6253f";
        // $res = $client->request('GET',"https://jsonplaceholder.typicode.com/todos/");
        $res = $client->request('GET',"https://api.rajaongkir.com/starter/province",[
            "headers" => array(
                'key' => $key
            )
        ]);
        echo $res->getBody();
    }
}