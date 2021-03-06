<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="<?php echo base_url('/bootstrap/css/bootstrap.min.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('/bootstrap/css/carousel.css');?>">
     <link rel="stylesheet" href="<?php echo base_url('/bootstrap/css/login.css');?>">
    <script src="<?php echo base_url('/jquery/jquery-3.1.1.min.js');?>"></script>
    <script src="<?php echo base_url('/jquery/jquery.validate.js');?>"></script>
    <script src="<?php echo base_url('/jquery/validation.js');?>"></script>
    <script src="<?php echo base_url('/bootstrap/js/bootstrap.min.js');?>"></script>
    <title>Collab - Login</title>
     <link rel="shortcut icon" href="<?php echo base_url('icon.jpg');?>" type="icon">
    
</head>
<body>
<div class="page-wrapper">
<div class="carousel slide carousel-fade" data-ride="carousel">

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
        <div class="item active">
        </div>
        <div class="item">
        </div>
        <div class="item">
        </div>
    </div>
</div>

<!-- Remeber to put all the content you want on top of the slider below the slider code -->
    
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4">
            </div>
            <div class="col-md-4" style="text-align:center">
                <img src="logo1.png" width="300" height="180" style="padding-top: 70px;">
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
            </div>
            <div class="col-md-4" style="text-align:center">
                <ul class="nav nav-tabs nav-justified">
                    <li class="active" ><a href="#login" data-toggle="tab">Log in</a></li>
                    <li><a href="#register" data-toggle="tab">Register</a></li>
                </ul>
                <div class="tab-content ">
                <div class="tab-pane active" id="login">
                     <?php echo validation_errors();
                        $attributes = array('id' => 'loginForm');
                        echo form_open('verify_login', $attributes); ?>
                        <fieldset>
                            <div class="rowText"s> 
                            <input type="text" id="username" name="username" size="25" required/>
                            </div>
                            <div class="rowText">
                            <input type="password" id="password" name="password" size="25" required/>
                            </div>
                            <div class="rowBtn">
                            <input type="submit" id="loginBtn" name="loginBtn" value="Log in">
                            </div>
                        </fieldset>
                        
                    </form>
                </div>
                
                    <div class="tab-pane" id="register" style="text-align:left">
                    <?php echo validation_errors();
                        $attributes = array('id' => 'registerForm');
                        echo form_open('Register', $attributes); ?>
                        <fieldset>
                            <input type="text" id="firstName" name="firstName" placeholder="First Name">
                            <input type="text" id="lastName" name="lastName" placeholder="Last Name">
                          <div  class="rowText">
                            <input type="text" id="email" name="email" placeholder="Email Address">
                          </div>
                          <div  class="rowText">
                            <input type="password" id="regPass" name="regPass" placeholder="Password">

                          </div>
                          <div  class="rowText">
                            <input type="password" id="confirmPass" name="confirmPass" placeholder="Confirm Password">
                          </div>    
                          <div  class="rowText">
                            <input type="text" id="idNumber" name="idNumber" placeholder="ID Number">
                          </div>
                          <div class="rowText">
                            <span class="rowText">
                              <select id="college" name="college">
                                <option selected>College</option>
                                <option value="COB">COB</option>   
                                <option value="CCS">COS</option>
                                <option value="CED">CED</option>
                                <option value="COE">GCOE</option>
                                <option value="COL">COL</option>
                                <option value="CLA">CLA</option>
                                <option value="COS">COS</option>  
                                <option value="SOE">SOE</option>
                                </select>
                              </span>
                              <span class="rowText">
                               <select id="degree" name="degree">
                                <option>Degree</option>
                                <option value ="CS-CSE">CS-CSE</option>
                                <option value ="CS-ST">CS-ST</option>
                                <option value ="CS-NE">CS-NE</option>
                                </select>
                              </span>
                          </div>
                          <div class="rowBtn-reg">
                              <input type="submit" id="regBtn" name="regBtn" value="Register">
                          </div>

                        </fieldset>
                    </form>
                </div>
               
                </div>
                
            </div>
        </div>

    </div>
</div>
    <script type="text/javascript">
    $('.carousel').carousel();  
    
    
    </script>
</body>
</html>