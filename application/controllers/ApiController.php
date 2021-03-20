<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ApiController extends CI_Controller 
{
    public function getUsers($id=null){
        if($id)
            $users = $this->db->where("id",$id)->get("users")->row();
        else
            $users = $this->db->get("users")->result();
        echo json_encode($users);
    }

    public function deleteUser($id){
        $result = $this->db->delete('users',['id'=>$id]);
        if($result){
            echo Json_encode($result." Delete Success");
        }
    }

    public function createUser()
    {
        $input = [
            "name"=>$this->input->post("name"),
            "email"=>$this->input->post("email"),
            "password"=>$this->input->post("password"),
            "mobile"=>$this->input->post("mobile")
            ];
        $result = $this->db->insert('users',$input);
        if($result){
            echo Json_encode($result."Register success");
        }
    }

    public function updateUser()
    {
        $data=["name"=>$this->input->post("name"),"email"=>$this->input->post("email"),"mobile"=>$this->input->post("mobile")];
        $this->db->where("id",$this->input->post("id"))->update("users",$data);
        echo json_encode(["result"=>"update success"]);
    }
        
}

