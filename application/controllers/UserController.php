<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserController extends CI_Controller
{

    public function index()
	{
		$this->load->view('Register');
	}

    public function loginpage()
    {
        $this->load->view("login");
    }

    public function add_user(){

       $result = $this->db->insert("users",[
                                    "name"=>$this->input->post("name"),
                                    "email"=>$this->input->post("email"),
                                    "password"=>$this->input->post("password"),
                                    "mobile"=>$this->input->post("mobile")
                                    ]);
        if($result){
            echo "Register Success";
        }else{
            echo "unable to register";
        }
    }
    public function logincheck()
    {
        $this->db->where('email', $this->input->post("email"));
        $this->db->where('password',  $this->input->post("password"));
        $query = $this->db->get('users');
        if($row['data'] = $query->row()){
            redirect("UserController/fetchUsers");
        }else{
            echo "something went wrong";
        }
    }
    public function fetchUsers()
    {
        $this->load->library("pagination_bootstrap");

        $this->pagination_bootstrap->offset(10);

        $users = $this->db->get("users");

        $result["data"] = $this->pagination_bootstrap->config("UserController/fetchUsers",$users);

        // $result["data"] = $users->result();
        $this->load->view("home",$result);
        
    }
    public function delete()
    {
        $id=$this->input->get("id");
        $this->db->where("id",$id)->delete("users");
        redirect("UserController/fetchUsers");
       
    }
    public function edit()
    {
        $id=$this->input->get("id");
        $this->db->where("id",$id);
        $query = $this->db->get("users");
        $result['data']=$query->result();
        $this->load->view("edit",$result);
    }
    public function updateUser()
    {
        $id = $this->input->post("id");
        $this->db->where("id",$id);
        $result = $this->db->update("users",[
                                     "name"=>$this->input->post("name"),
                                     "email"=>$this->input->post("email"),
                                     "mobile"=>$this->input->post("mobile")
                                     ]);
         if($result){
            redirect("UserController/fetchUsers");
         }else{
             echo "unable to update";
         }
     }

 
    
}
