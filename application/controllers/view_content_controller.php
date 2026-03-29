<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class View_content_controller extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function get_active_news()
{
    $data['news'] = $this->db->order_by('created_at', 'DESC')
                              ->where('status', 1) 
                              ->get('news')
                              ->result_array();
    
    return $data['news']; 
}
}


?>