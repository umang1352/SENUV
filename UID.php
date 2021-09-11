   <?php  
include("header.php");
?>
    <section class="banner inner-page">
        	<div class="banner-img"><img src="images/banner/event.jpg" alt=""></div>
            <div class="page-title">	
	            <div class="container">
                    <h1>UNIQUE IDENTIFICATION NUMBER</h1>
                </div>
            </div>
        </section>
        <section class="breadcrumb ">
        	<div class="container">
            	<ul>
                	<li><a href="index.php">Home</a></li>
                    <li><a href="#">UID</a></li>
                </ul>
            </div>
        </section>
        <div class="event-page">
        	<div class="container">
            	<div class="section-title">
                	<h2>OUR WORK</h2>
                    <p>CHECK OUT OUR BEST </p>
                </div>

                <div style="color: black" align="center">
                    
                    <?php
                    echo ":Your UID is here";  
include("action.php");
?>
                </div>
                <br>
                <br>
                <div class="event-filter">
                	<div class="left-icon"><i class="fa fa-filter"></i><span>Refine Results</span></div>
                    <div class="searchFilter">
                        <div class="input-box">
                            <i class="fa fa-th-large"></i>
                            <input placeholder="UID" type="text">
                        </div>
                        <div class="input-box searchlocation">
                            <i class="fa fa-map-marker"></i>
                            <input placeholder="INDIA - Gujarat " type="text">
                        </div>
                        <div class="input-box date">
                            <div class="fa fa-calendar"></div>
                            <input placeholder="2020-03-28" id="datepicker1" type="text" dir="rtl">
                        </div>
                        <input value="Search" class="btn" type="submit">
                    </div>
                </div>
                <br>
                <br>
                
                <br>
                <br>
                <div class="pagination">
                    <ul>
                        <li class="next"><a href="#"><i class="fa fa-angle-right"></i><span>Next</span></a></li>
                        <li class="active"><a href="#">2</a></li>
                        <li><a href="#">1</a></li>
                        <li class="prev"><a href="#"><span>prev</span> <i class="fa fa-angle-left"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>

       
<?php  
include("footer.php");
?>
