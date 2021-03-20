<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {


	public function index()
	{
		// Codeigniter Crud and Image Upload
        // insert
        // $this->db->insert("users",["name"=>"sathish","email"=>"sathish@gmail.com","password"=>"123"]);

        // delete
        // $this->db->where("id",50)->delete("users"); 

        // update
        // $this->db->where("id",49)->set(["name"=>"sathish","email"=>"sathish@gmail.com"])->update("users");
        // $this->db->where("id",48)->update("users",["name"=>" sathish","email"=>"sathish@gmail.com","password"=>"123"]);

        // get by id
        // $r = $this->db->where("id",1)->get("users")->row(); 
        // $r = $this->db->where("id",1)->get("users")->row_array(); 

        // fetching types
        // $query = $this->db->query('SELECT * FROM users');
        // $users = $this->db->get("users");
        // $result = $users->result();
        // $result2 = $users->result_array();
        // $result3 = $users->row_array();
        // $result4 = $users->row();

        // image upload
        // $config['upload_path']          = './uploads/';
        // $config['allowed_types']        = 'gif|jpg|png';
        // $config['max_size']             = 100;
        // $config['max_width']            = 1024;
        // $config['max_height']           = 768;

        // if($this->upload->do_upload('userfile')){
        //     $this->upload->data();
        // }else{
        //     echo "error";
        // }

		//$this->load->view('welcome_message');
	}

   
        /*-----------------------------API---------------
        public function getUsers($id=null){
            if($id)
                $users = $this->db->where("id",$id)->get("users")->row();
            else
                $users = $this->db->get("users")->result();
            echo json_encode($users);
        }
        public function createUser(){
            $input = $this->input->post();
            $this->db->insert('users',$input);
            $this->response(['Registered successfully.'], REST_Controller::HTTP_OK);
        }
        public function deleteUser($id){
            $this->db->delete('users',['id'=>$id]);
            $this->response(['deleted successfully.'], REST_Controller::HTTP_OK);
        }
        public function updateUser(){
            // $data=["name"=>$this->input->post("name"),"email"=>$this->input->post("email"),"password"=>$this->input->post("password")];
            // $this->db->where("id",$this->input->post("id"))->update("users",$data);
            // echo json_encode(["result"=>"update success"]);
            echo json_encode($this->input->request());
        }
        */
    
}