<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="A Components Mix Bootstarp 3 Admin Dashboard Template">
        <meta name="author" content="Westilian">
        <title title="Design Host">Design Host</title>
        <link rel="stylesheet" href="<?= base_url('public/'); ?>css/bootstrap.css" type="text/css">
        <link rel="stylesheet" href="<?= base_url('public/'); ?>css/bootstrap-reboot.min.css" type="text/css">
        <link rel="stylesheet" href="<?= base_url('public/'); ?>css/font-awesome.css" type="text/css">
        <!-- <link rel="stylesheet" href="<?= base_url('public/'); ?>css/plugins.css" type="text/css"> -->
        <link rel="stylesheet" href="<?= base_url('public/'); ?>css/common-styles.css" type="text/css">
        <link rel="stylesheet" href="<?= base_url('public/'); ?>css/matmix-iconfont.css" type="text/css">
        <link rel="stylesheet" href="<?= base_url('public/'); ?>css/my-css.css?<?= time();?>" type="text/css"/> 
    </head>
    <body class="body-background" style="background-color: #E5FFCC;">
        <div class="container">
            <div class="row">
		        <div class="col-md-12">
		            <div class="login-formme">
                        <div class="row">
                            <div class="col-md-6">
		            	         <h4 style="color: #2e6da4;">Register Admin</h4>
                            </div>
                            <div class="col-md-6">
                                <div id="success" style="float: right;"></div>
                                <div id="error" style="float: right;"></div>
                            </div>
                        </div> <hr>
                	    <form id="form_register_admin" method="post" style="margin-top: 20px;">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-2">
                                                <label class="col-form-label col-form-label-sm" for="Company Name">Company Name</label>
                                            </div>
                                            <div class="col-md-10">
                                                <input type="text" class="form-control form-control-sm" name="company_name" id="company_name" value="" title="Company Name" placeholder="Company Name">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-2">
                                                <label class="col-form-label col-form-label-sm" for="admin_name">Admin Name</label>
                                            </div>
                                            <div class="col-md-10">
                                                <input type="text" class="form-control form-control-sm" name="admin_name" id="admin_name" value="" title="Admin Name" placeholder="Admin Name">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-2">
                                                <label class="col-form-label col-form-label-sm" for="email">Email</label>
                                            </div>
                                            <div class="col-md-10">
                                                <input type="email" class="form-control form-control-sm" name="email" id="email" value="" title="Email" placeholder="Employee Email">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-2">
                                                <label class="col-form-label col-form-label-sm" for="password">Password</label>
                                            </div>
                                            <div class="col-md-10">
                                                <input type="password" class="form-control form-control-sm" name="password" id="password" title="Password" placeholder="Password">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                            	<div class="col-md-6">
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-2">
                                                <label class="col-form-label col-form-label-sm" for="phone">Mobile</label>
                                            </div>
                                            <div class="col-md-10">
                                                <input type="text" class="form-control form-control-sm" name="mobile" id="mobile" value="" title="Mobile Number" placeholder="Mobile Number">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-2">
                                                <label class="col-form-label col-form-label-sm" for="gender">Gender</label>
                                            </div>
                                            <div class="col-md-10">
                                                <input type="radio" class="form-control-sm" name="gender" id="gender" title="Male" value="Male" checked="Male">&nbsp;Male
                                                <input type="radio" class="form-control-sm" name="gender" id="gender" title="Female" value="Female">&nbsp;Female
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-2">
                                                <label class="col-form-label col-form-label-sm" for="address">Address</label>
                                            </div>
                                            <div class="col-md-10">
                                                <input type="text" class="form-control form-control-sm" name="address" id="address" value="" title="Address" placeholder="Address">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-2">
                                                <label class="col-form-label col-form-label-sm" for="Profile">Profile</label>
                                            </div>
                                            <div class="col-md-10">
                                                <input type="file" class="form-control" name="image" id="image" title="Image" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <div class="row">
                        	<div class="col-md-10 form-group"></div>
                            <div class="col-md-2 form-group">
                                <button class="btn btn-primary" id="register_admin" title="Register Admin" style="">Register</button>
                                <a href="<?= base_url(); ?>">Login</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="<?php echo base_url(); ?>public/js/bootstrap.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function(){
                $("#admin_name").keypress(function(event){
                    $('#error').empty();
                    var inputValue = event.which;
                    if(!(inputValue >= 65 && inputValue <= 122) && (inputValue != 32 && inputValue != 0)) { 
                        $('#error').append('Invalid!').show().css({'color' : 'red'}).fadeOut();
                        event.preventDefault(); 
                    }
                });
                $('#mobile').keypress(function (e) {
                    $('#error').empty();
                    var length = jQuery(this).val().length;
                    if(length > 9) {
                        $('#error').append('Invalid!').show().css({'color' : 'red'}).fadeOut();
                        return false;
                    } else if(e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
                        $('#error').append('Invalid!').show().css({'color' : 'red'}).fadeOut();
                        return false;
                    } else if((length == 0) && (e.which == 48)) {
                        $('#error').append('Invalid!').show().css({'color' : 'red'}).fadeOut();
                        return false;
                    }
                });

            	$('#register_admin').on('click', function(){
            		var company_name = $('#company_name').val();
            		var admin_name = $('#admin_name').val();
            		var email = $('#email').val();
            		var password = $('#password').val();
            		var mobile = $('#mobile').val();
            		var gender = $('#gender').val();
            		var address = $('#address').val();
                    var image = $('#image').val();

            		var formData = $('#form_register_admin').serialize();

                    $('#error').empty();
                    $('#success').empty();
                    
                    if(company_name === ''){
                        $('#error').append('Please Fill Company name!').show().css({'color' : 'red'}).fadeOut();
                        return false;
                    }else if(admin_name === ''){
                        $('#error').append('Please Fill Admmin Name!').show().css({'color' : 'red'}).fadeOut();
                        return false;
                    }else if(email === ''){
                        $('#error').append('Please Fill Email!').show().css({'color' : 'red'}).fadeOut();
                        return false;
                    }else if(password === ''){
                        $('#error').append('Please Fill Password!').show().css({'color' : 'red'}).fadeOut();
                        return false;
                    }else if(mobile === ''){
                        $('#error').append('Please Select Mobile Number!').show().css({'color' : 'red'}).fadeOut();
                        return false;
                    }else if(gender === ''){
                        $('#error').append('Please Check Gender!').show().css({'color' : 'red'}).fadeOut();
                        return false;
                    }else if(address === ''){
                        $('#error').append('Please Fill Address!').show().css({'color' : 'red'}).fadeOut();
                        return false;
                    }else if(image === ''){
                        $('#error').append('Please Select Admin Image!').show().css({'color' : 'red'}).fadeOut();
                        return false;
                    }else{
                        $.ajax({
                            url  : "<?php echo base_url('CompanyController/add_company_admin'); ?>",
                            type : 'POST',
                            data :  formData,
                            dataType : 'json',
                            cache : false,
                            success : function(result){
                                $('#success').append('Admin Registered Successfully!').show().css({'color' : 'green'}).fadeOut(3000);
                                if(result == 1){
                                    $('#form_register_admin').each(function(){
                                        this.reset();
                                    });
                                }else{
                                    $('#error').append('Failed to Register Admin!').show().css({'color' : 'red'}).fadeOut(3000);
                                }
                            }
                        });
                    }
            	});
            });
        </script>
    </body>
</html>