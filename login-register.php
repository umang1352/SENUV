<?php  
include("header.php");
?>
        <section class="banner inner-page">
        	<div class="banner-img"><img src="images/banner/register-bannerImg.jpg" alt=""></div>
            <div class="page-title">	
	            <div class="container">
                    <h1>Login</h1>
                </div>
            </div>
        </section>
        <section class="breadcrumb">
        	<div class="container">
            	<ul>
                	<li><a href="#">Home</a></li>
                    <li><a href="#">Login & Register</a></li>
                </ul>
            </div>
        </section>
        <section class="login-view">
        	<div class="container">
            	<div class="row">
                	<div class="col-sm-6">
                    	<div class="section-title">
                        	<h2>Login</h2>
                            <p>Login to your account below</p>
                        </div>
                        <div class="input-box">
                        	<input type="text" placeholder="UserName">
                        </div>
                        <div class="input-box">
                        	<input type="text" placeholder="Password">
                        </div>
                        <div class="check-slide">
                        	<label class="label_check" for="checkbox-01"><input id="checkbox-01" type="checkbox"> Remember Me</label>
                            <div class="right-link">
                            	<a href="#">Lost Password? </a>
                            </div>
                        </div>
                        <div class="submit-slide">
                        	<a href="adminsen/index3s.php"><input type="submit" value="Login" class="btn"></a>
                            
                            
                        </div>
                    </div>
                    <div class="container">
                    <div class="row">
                    <div class="col-sm-6">
                    	<div class="section-title">
                        	<h2>REGISTER</h2>
                            <p>Register now - Completely free</p>
                        </div>
                        <form method="post" action="REG.php">

<table border=0 cellspacing=0 cellpadding=15>
    
    <tr>
        
        <td ><div class="input-box"><input type="text" name="Username" placeholder="NAME" required="" /></div>
    </tr>


    
    <tr>
       
        <td ><div class="input-box"><input type="text" name="fname"  placeholder="Father Name" /></div></td>
    </tr>
    <tr>
         <td><div class="input-box">Gender
        <select class="form-select" name="gender">

           <option name="gender" value="Male" selected="Male">Male</option>
            <option name="gender" value="Female">Female</option>
            <option name="gender" value="Other">Other</option>
    </select>
    </div></td>
    </tr>

    


    <tr>
        
        <td ><div class="input-box"><input type="email" placeholder="Email" name="Email"  placeholder="Email ID" /></div></td>
    </tr>


    <tr>
        
        <td ><div class="input-box"><input type="password" name="Password" placeholder="Password" /></div></td>
    </tr>
    <tr>
        <td ><div class="input-box"><input type="text" name="addre" placeholder="Adress" /></div></td>
    </tr>
    <tr>
        
        <td ><div class="input-box"><input type="number" name="mobile"  placeholder="Mobile No" /></div></td>
    </tr>

    <tr><td colspan=""><div class="submit-slide">
                            <input type="submit" value="SIGN UP" class="btn">
                        </div></td></tr>
</div>
</div>
</table>

</form>
                        
                        <!--<form action="REG.php " method="post">
                            
                        <div class="input-box">
                        	<input type="text" placeholder="Email" name="Email">
                        </div>
                        <div class="input-box"> 
                        	<input type="password" placeholder="Password" name="Password">
                        </div>
                        <div class="input-box">
                        	<input type="password" placeholder="Re-Password">
                        </div>

                   <?php 
                   include("captcha.php");
                   ?>
                        <div class="submit-slide">
                        	<input type="submit" value="SIGN UP" class="btn">
                        </div>
                </form>-->
                <!--  <form>
                            <div class="row">
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>First Name *</label>
                                    <input type="text" placeholder="" class="form-control">
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Last Name *</label>
                                    <input type="text" placeholder="" class="form-control">
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Gender *</label>
                                    <select class="select2">
                                        <option value="">Please Select Gender *</option>
                                        <option value="1">Male</option>
                                        <option value="2">Female</option>
                                        <option value="3">Others</option>
                                    </select>
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Date Of Birth *</label>
                                    <input type="text" placeholder="dd/mm/yyyy" class="form-control air-datepicker"
                                        data-position='bottom right'>
                                    <i class="far fa-calendar-alt"></i>
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Roll</label>
                                    <input type="text" placeholder="" class="form-control">
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Blood Group *</label>
                                    <select class="select2">
                                        <option value="">Please Select Group *</option>
                                        <option value="1">A+</option>
                                        <option value="2">A-</option>
                                        <option value="3">B+</option>
                                        <option value="3">B-</option>
                                        <option value="3">O+</option>
                                        <option value="3">O-</option>
                                    </select>
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Religion *</label>
                                    <select class="select2">
                                        <option value="">Please Select Religion *</option>
                                        <option value="1">Islam</option>
                                        <option value="2">Hindu</option>
                                        <option value="3">Christian</option>
                                        <option value="3">Buddish</option>
                                        <option value="3">Others</option>
                                    </select>
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>E-Mail</label>
                                    <input type="email" placeholder="" class="form-control">
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Class *</label>
                                    <select class="select2">
                                        <option value="">Please Select Class *</option>
                                        <option value="1">Play</option>
                                        <option value="2">Nursery</option>
                                        <option value="3">One</option>
                                        <option value="3">Two</option>
                                        <option value="3">Three</option>
                                        <option value="3">Four</option>
                                        <option value="3">Five</option>
                                    </select>
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Section *</label>
                                    <select class="select2">
                                        <option value="">Please Select Section *</option>
                                        <option value="1">Pink</option>
                                        <option value="2">Blue</option>
                                        <option value="3">Bird</option>
                                        <option value="3">Rose</option>
                                        <option value="3">Red</option>
                                    </select>
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Admission ID</label>
                                    <input type="text" placeholder="" class="form-control">
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Phone</label>
                                    <input type="text" placeholder="" class="form-control">
                                </div>
                                <div class="col-lg-6 col-12 form-group">
                                    <label>Short BIO</label>
                                    <textarea class="textarea form-control" name="message" id="form-message" cols="10"
                                        rows="9"></textarea>
                                </div>
                                <div class="col-lg-6 col-12 form-group mg-t-30">
                                    <label class="text-dark-medium">Upload Student Photo (150px X 150px)</label>
                                    <input type="file" class="form-control-file">
                                </div>
                                <div class="col-12 form-group mg-t-8">
                                    <button type="submit" class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark">Save</button>
                                    <button type="reset" class="btn-fill-lg bg-blue-dark btn-hover-yellow">Reset</button>
                                </div>
                            </div>
                        </form>
                    -->
                    </div>
                </div>
                <div class="sosiyal-login">
                	<div class="row">
                    	<div class="col-sm-3 col-md-3">
                        	<a href="#" class="facebook"><i class="fa fa-facebook"></i>Facebook</a>
                        </div>
                        <div class="col-sm-3 col-md-3">
                            <a href="#" class="google-pluse"><i class="fa fa-google-plus"></i>Google</a>
                        </div>
                        <div class="col-sm-3 col-md-3">
                            <a href="#" class="twitter"><i class="fa fa-twitter"></i>Twitter</a>
                        </div>
                        <div class="col-sm-3 col-md-3">
                            <a href="#" class="linkedin"><i class="fa fa-linkedin"></i>Linkedin</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
       
<?php  
include("footer.php");
?>
