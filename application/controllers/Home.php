<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	function __construct() {
        parent::__construct();
		
    }
	public function intro(){
		$this->load->view('intro');
	}
	public function index()
	{
		$this->load->view('header');
		$this->load->view('home');
		$this->load->view('footer');
	}
	public function login($slug=null){
		$data['type'] = $slug;
		$this->load->view('login',$data);
	}
	public function register($slug=null){
		$data['type'] = $slug;
		$this->load->view('register',$data);
	}
	public function dashboard(){
		$type = $this->session->userdata('user_details')[0]['type'];
		if($type=='vendor'){
			$this->load->view('admin/header');
			$this->load->view('admin/dashboard');
			$this->load->view('admin/footer');
		}
		else{
			$this->load->view('header');
			$this->load->view('home');
			$this->load->view('footer');
		}
	}
	public function add_movie(){
		$this->load->view('admin/header');
		$this->load->view('admin/add-movie');
		$this->load->view('admin/footer');
	}
	public function user_add_response(){
		$user_email = $this->input->post('user_email');
		$array = array('user_email'=>$user_email);
		$data['validateUser'] = $this->Home_models->selectrecords('cm_user_table',$array);
		//created_at
		$return_arr = array();
		if(!empty($data['validateUser'])){
			$return_arr[] = array("Type" => "Error","Error_type" => "department","msg"=>"User Already Exist");
		}
		else{
			if(isset($_FILES["profile_img"]["name"])){
				$config['upload_path'] = './uploads/';
				$config['allowed_types'] = 'jpg|jpeg|png|gif|jfif';  
				$this->load->library('upload', $config);  
				if(!$this->upload->do_upload('profile_img')){
					echo $this->upload->display_errors();
				}
				else{
					$data = array('upload_data' => $this->upload->data());
					$array = array(
							'company_name'=>$this->input->post('company_name'),
							'user_email'=>$this->input->post('user_email'),
							'address'=>$this->input->post('address'),
							'account_name'=>$this->input->post('account_name'),
							'password'=>$this->input->post('password'),
							'profile_img'=>'uploads/'.$_FILES["profile_img"]["name"],
							'bank_info'=>$this->input->post('bank_info'),
							'created_at'=>date('Y-m-d H:i:s'),
							'type'=>$this->input->post('type')
					);
					$adduser = $this->Home_models->saverecords('cm_user_table',$array);
					if($adduser>0){
						$return_arr[] = array("Type" => "Success","Error_type" => "Website","msg"=>"Data Success Fully Inserted");
					}
					else{
						$return_arr[] = array("Type" => "Error","Error_type" => "Website","msg"=>"Server Error");
					}
				}
			}
		}
		echo json_encode($return_arr);
	}
	public function login_process(){
		$user_email = $this->input->post('user_email');
		$password = $this->input->post('password');
		$array = array('user_email'=>$user_email,'password'=>$password);
		$data['validateUser'] = $this->Home_models->selectrecords('cm_user_table',$array);
		$return_arr = array();
		if(!empty($data['validateUser'])){
			$return_arr[] = array("type" => "success","Error_type" => "department","msg"=>"Login Success");
			$this->session->set_userdata('is_login',"1");
			$this->session->set_userdata('user_details',$data['validateUser']);
		}
		else{
			$return_arr[] = array("Type" => "Error","Error_type" => "department","msg"=>"Invalid User");
		}
		echo json_encode($return_arr);
	}

	public function logout(){
		$this->session->unset_userdata('is_login');
		$this->session->sess_destroy();
		redirect('home', 'refresh');
	}
}
