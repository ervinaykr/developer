<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	class CompanyController extends CI_Controller
	{
		public function __construct()
		{
			parent::__construct();
	        $this->load->database();
	        $this->load->library('session');
	        $this->load->helper('form');
	        $this->load->library('encrypt');
	   //      if(isset($_SESSION['email'])){
		  //   	session_destroy();
				// $this->session->set_flashdata('msg', 'User Session Expire!');
	   //          return redirect(base_url(),'refresh');
	   //      }
		}

		public function index()
	    {
	        $this->load->view('DashboardAdmin/index');
	    }

	    public function register_admin()
	    {
	    	$this->load->view('userRegister');
	    }

	    public function add_company_admin()
	    {
	    	if($this->input->server('REQUEST_METHOD') == 'POST') 
	        {
	        	$this->form_validation->set_rules('email', "Email", "required|valid_email|is_unique[company_login.email]");
	        	$this->form_validation->set_rules('mobile', "Mobile", "required|min_length[10]|max_length[10]|is_unique[company_login.mobile]");

	        	if($this->form_validation->run() == FALSE)
	        	{
	        		$this->session->set_flashdata('err', "Check Email And Mobile Already Exists!");
	        		$this->load->view('userRegister');
	        	}
	        	else
	        	{
		        	$type = 'admin';
					$data = array(
		        		'company_name'		=> $this->encrypt->encode($this->input->post('company_name')),
		        		'admin_name'		=> $this->encrypt->encode($this->input->post('admin_name')),
		        		'email' 			=> $this->input->post('email'),
		        		'password'			=> password_hash($this->input->post('password'), PASSWORD_BCRYPT),
		        		'mobile' 			=> $this->encrypt->encode($this->input->post('mobile')),
		        		'gender' 			=> $this->encrypt->encode($this->input->post('gender')),
		        		'address' 			=> $this->encrypt->encode($this->input->post('address')),
		        		'type' 				=> $this->encrypt->encode($type)
		        	);

	                // $journalName = str_replace(' ', '_', $_FILES['image']['name']);
	                // $config['file_name'] = time() . $journalName;
	                // $config['upload_path'] = './public/admin/images/';
	                // $config['allowed_types'] = 'gif|jpg|png|JPG|JPEG|jpeg';
	                // $this->upload->initialize($config);
	                // $this->upload->do_upload('image');
	                // $_POST['image'] = $config['file_name'];
	                

		        	if($result = $this->db->insert('company_login', $data) > 0){
		        		echo json_encode($result);
		        		$this->session->set_flashdata('success', 'Admin Added Successfully!');
		        	}else{
		        		$this->session->set_flashdata('error', 'Failed to Register Admin!');
		        	}
		        }
	    	}
	    }

	    public function view_login()
	    {
	    	$this->load->view('adminLogin');
	    }

	    public function admin_login()
	    {
			if ($this->input->server('REQUEST_METHOD') == 'POST') 
	        {	
	        	$input_email = $this->input->post('email');
	        	$query = $this->db->where('email', $input_email)->get('company_login')->row_array();

				if($query > 0)
				{
					$query_email = $query['email'];
		        	$type = $this->encrypt->decode($query['type']);

					if($input_email === $query_email)
		        	{
		        		$this->admin_password_verify($query_email);
					    $this->session->set_flashdata('msg', 'Email Verifed!');
		        	} 
		        	else 
		        	{
		        		$this->session->set_flashdata('err', 'Invalid Email!');
			            return redirect(base_url(),'refresh');
		        	}
				} else{
	        		$this->session->set_flashdata('err', 'Failed Email Verification!');
			        return redirect(base_url(),'refresh');
				}
		        
		    }else{
	    		return redirect(base_url());
	    	}
	    }
	    
	    public function admin_password_verify($email)
	    {
		    echo '
		    	<!DOCTYPE html>
				<html lang="en">
					<head>
						<meta charset="utf-8">
						<meta http-equiv="X-UA-Compatible" content="IE=edge">
						<meta name="viewport" content="width=device-width, initial-scale=1">
						<meta name="author" content="">
						<meta name="description" content="">
						<meta name="keywords" content=""> 
						<title> designhost.in </title>
  						<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
						<link rel="stylesheet" type="text/css" href="public/css/login_css/my-css.css">
						<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
					</head>
					<body>
				    	<div id="wrapper">
							<div id="login-form"> 
								<div class="container">
									<div class="row">
										<div class="col-md-5 col-md-offset-4">
											<div class="login-form-border">
												<form id="form_password_verify" method="post" action="CompanyController/get_password_for_verify" autocomplete="off">
													<img src="public/images/login_page_images/logo.png" width="100" height="50" style="margin:0 auto;" class="img-responsive" alt="logo">
													<h3> Sign in </h3>
									                <h5 align="center">"'.$email.'"</h5>
													<div class="form-group">
														<input type="hidden" name="email" id="email" title="Admin Email" placeholder="Admin Email" value="'.$email.'" class="form-control input"> 
														<input type="password" name="password" id="password" title="Admin Password" placeholder="Admin Password" class="form-control input" required=""> 
													</div>
													<div class="row row-top">
														<div class="col-md-9 col-xs-6">
															<p class="text2">
																<a href="#" style="color:#1a73e8;"> Forgot Password? </a>
															</p>
														</div> 
														<div class="col-md-3 col-xs-6">
															<p class="login-top">
																<button class="btn btn-primary" title="Admin Login" onclic id="login">Login</button>
															</p>
														</div> 
													</div>
													<p class="text3"> CRM Login? This is Last step for Login verification!</p> 
													<p class="alert alert-dismissible alert-success" id="success" style="display: none; width: 100%; float: right;"></p>
				                                    <p class="alert alert-dismissible alert-danger" id="error" style="display: none; width: 100%; float: right;"></p>
												</form>
											</div> 
										</div> 
									</div> 
								</div>
							</div>
						</div> 
						<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
						<script type="text/javascript">
							$(document).ready(function(){
								$("body").bind("cut copy paste",function (e) {
							        e.preventDefault();
							    });
							   
							    $("body").on("contextmenu",function(e){
							        return false;
							    });
								$("#login").on("click", function(){
									$("#error").empty();
									$("#success").empty();

									var password = $("#password").val();

									if(password == ""){
										$("#error").append("Please Fill Password!").show().css({"color": "red"}).fadeOut();
					                    return false;
									}else{}
								});
							});
						</script>
					</body>
				</html>
		    ';
	    }

	    public function get_password_for_verify()
	    {
        	$input_email = $this->input->post('email');
        	$input_password = $this->input->post('password');
        	$type = 'admin';

        	$query = $this->db->where('email', $input_email)->get('company_login')->row_array();

			if($query > 0)
			{
				$query_email = $query['email'];
	        	$query_password = $query['password'];
	        	$query_type = $this->encrypt->decode($query['type']);

	        	if(password_verify($input_password, $query_password))
				{
			    	$_SESSION['email'] = $query_email;
	    			$this->session->set_flashdata('msg', 'Admin Login Successfully!');
			    	$this->load->view('DashboardAdmin/index');
			    } 
			    else 
			    {
					return redirect(base_url("/admin-login"));
	    			$this->session->set_flashdata('err', 'Invalid Password!');
			    }
			}else{
				return redirect(base_url("/admin-login"));
				$this->session->set_flashdata('err', 'Password verification failed!');
			}
	    }

	    public function logout()
	    {
	    	session_destroy();
			$this->session->set_flashdata('msg', 'User Session Expire!');
            return redirect(base_url(),'refresh');
	    }
	}

?>