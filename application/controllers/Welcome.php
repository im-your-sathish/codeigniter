<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {


	public function index()
	{
	
	}

	//##################################### Codeigniter Crud and Image Upload ##############################################
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
   
        /*##########################################################  API   ###################################################
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
	
	
	//####################################### // Google signin -  composer require google/apiclient:"^2.0"########################################
	
	// include_once APPPATH . "libraries/vendor/autoload.php";
        // $google_client = new Google_Client();
        // $google_client->setClientId('828683277676-oumsgkahpkgid99t35mjdp2ibiq5u7vq.apps.googleusercontent.com');
        // $google_client->setClientSecret('hkst9ZG8aaYQ6nofvTqYdXkd');
        // $google_client->setRedirectUri('http://localhost/google/');
        // $google_client->addScope('email');
        // $google_client->addScope('profile');
        // $data['url'] =  $google_client->createAuthUrl();
        // if (isset($_GET["code"])) {
        //     $token = $google_client->fetchAccessTokenWithAuthCode($_GET["code"]);
        //     if (!isset($token["error"])) {
        //         $google_client->setAccessToken($token['access_token']);
        //         $this->session->set_userdata('access_token', $token['access_token']);
        //         $google_service = new Google_Service_Oauth2($google_client);
        //         $data = $google_service->userinfo->get();
        //         $query = $this->db->where("login_oauth_uid", $data['id'])->get("users")->row();
        //         if ($query == "") {
        //             $reg = $this->db->insert("users", ['login_oauth_uid' => $data['id'], 'first_name' => $data['name'], 'email_address' => $data['email'], 'profile_picture' => $data['picture']]);
        //         }
        //         $this->session->set_userdata('user_data', $user_data);
        //         redirect("UserController/fetchUsers");
        //     }
        // } else {
        //     $this->load->view("Register", $data);
        // }
    
}
