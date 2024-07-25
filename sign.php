<?php include "config.php";?>
<html>
<meta charset="UTF-8">
<link rel="canonical" href="/spotlight/nasha-mukt-bharat-abhiyaan" />
<link rel="shortlink" href="/node/1598649" />
<link rel="shortcut icon" href="https://www.india.gov.in/sites/upload_files/npi/files/favicon_0.ico" type="image/vnd.microsoft.icon" />
<title>Nasha Mukt Bharat Abhiyaan| National Portal of India</title>

<meta name="title" content="National Portal of India" />
<meta name="lang" content="English" />
<meta name="MobileOptimized" content="width" />
<meta name="HandheldFriendly" content="true" />

<meta name="keywords" content="National Portal of India, India Portal, NPI, Government Information, Government Services, one stop source of government information, single-window access to government information,  Government of India, GoI" />
<meta name="description" content="National Portal of India provides a single-window access to information and services that are electronically delivered from all Government Departments, Institutions and Organizations. It has been a popular source of information to a wide range of stakeholders - from citizens, to government, business and Indian Diasporas. It is a gateway to access Indian Government websites at Centre, State and District levels." />

<meta name="viewport" content="width=device-width, initial-scale=1" />

<!-- Place favicon.ico in the root directory -->
<link rel="apple-touch-icon" href="images/favicon.png">
<link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon">
<!-- fonts file -->

<link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&amp;display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display&amp;display=swap" rel="stylesheet">
<!-- css file  -->
<link rel="stylesheet" href="plugins.css">
<!-- <link rel="stylesheet" href="assets/css/font-awesome.min.css"> -->

<link rel="stylesheet" href="bootstrap.min.css">
<link rel="stylesheet" href="animate.min.css">
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="responsive.css">
<script src="sweetalert.min.js"></script>
<script src="jquery-3.6.0.min.js"></script>
<script src="modernizr-3.11.2.min.js"></script>
<script src="validate.js"></script>
</head>
<!-- <style type="text/css">
    html {
        overflow: hidden;
    }
</style> -->

<body>

    <div class="main-wrapper resizable">
        <header class="header-area transparent-header d-none d-lg-block" id="sticky">
            <div class="hdrTpDiv">
                <div class="container-fluid">
                    <div class="hdrBtmDiv">
                        <div class="row align-items-center">
                            <div class="col-lg-6 ">
                                <div class="header-logo">
                                    <a href="index.php"><img src="images/logo.png" alt=""></a>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="col-lg-12 topHdr">
                                    <div class="topHdrIn">
                                        <div class="hdrTprgtIn indFlg">
                                            <img src="images/if.gif" alt="">
                                        </div>
                                        <!-- <div class="navbar-left langDivnew"> <button type="button" class="btn navbar-toggle collapsed btn-lang" data-toggle="collapse" data-target="#languages-menu"> <span class="sr-only">Switch language</span>  <img src="assets/images/icon-translate.5d54eb12502dfba5f0d87ee2290693cd.png" alt="Translate"> </button> </div> -->
                                        <div class="hdrTpCntrIn">
                                            <p class="header-btn" style="margin-bottom: 1px;">National Toll free
                                                Deaddiction Helpline: <span> <b>14446</b></span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <div class="hderbtmdivnew">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12 hdrMenuDiv">
                            <div class="primary-menu text-left">

                                <div class="tkPldge"><a class="button" style="margin-top: 150px; margin-right: 20px;"
                                        href="take-recovered-pledge.php">Recovered Drug User?<span
                                            class="clckHrAnm">Take a pledge <i>135</i></span> </a></div>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </header>


        <!-- mobile header area end here  -->
        <!-- breadcrumb area end here  -->
        <!-- contact area start here  -->
        <!-- <section class="contact-area section"> -->
        <div class="jumbotron" style="height: 550px;">
            <div class="container">
                <div class="row">
                    <div class="contact-info-wrap mb-100">
                        <div class="row g-0 align-items-center">
                            <div class="col-lg-6 col-md-6">
                                <div class="google-map">
                                    <img src="images/indianMap.png" alt="gogole map" style="height: 500px; width: 500px;">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="contact-info-contnt">
                                    <div class="primary-form">
                                        <h2 class="form-title">Send Us a Message</h2>
                                        <form method="POST">
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="name" name="name" required=""
                                                    placeholder="Name" maxlength="100"
                                                    onchange="validatestrings(this);">
                                            </div>
                                            <div class="form-group">
                                                <input type="integer" class="form-control" id="contact" name="contact" required=""
                                                    placeholder="Contact" maxlength="100" 
                                                    onchange="validatenumber(this);">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="addiction" name="addiction" required=""
                                                    placeholder="Addiction" maxlength="100" 
                                                    onchange="validatestrings(this);">
                                            </div>
                                            <div class="form-group">
                                            <label for="age">choose age:</label>
                                                <select name="age" id="age" class="form-control" placeholder="Age" >
                                                    <option value="13-20">13-20</option>
                                                	<option value="21-30">21-30</option>
                                                	<option value="31-40">31-40</option>
                                                	<option value="41-50">41-50</option>
                                                	<option value="51-60">51-60</option>
                                                </select>
                                                <!-- <input type="text" class="form-control" id="age" name="age"
                                                    placeholder="Age" maxlength="100" 
                                                    onchange="validatenumber(this);"> -->
                                            </div>
                                            <div class="form-group">
                                                <textarea class="form-message" id="message" rows="3" required=""
                                                    placeholder="Message" name="message" maxlength="100"
                                                    onchange="validatestringsandnumber(this);"></textarea>
                                            </div>
                                            <button type="submit" class="primary-btn" name="btn_submit">Send
                                                Message</button>
                                        </form>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- </section> -->
        <!-- contact area end here  -->

        <!-- footer area start here  -->
    </div>
</body>

</html>

<?php 

	if(isset($_POST['btn_submit'])) 
	{
		extract($_POST);
       // $count=mysqli_query($conn,"select no from drug_use_by_age where age='$age'");
        $update=mysqli_query($conn,"update drug_use_by_age set no=no+1 where age='$age'");
		$add = mysqli_query($conn,"insert into tb_info(name, contact,addiction,age, message) values('$name','$contact','$addiction','$age','$message')") or die(mysqli_error($conn));

		if($add)
		{
			echo "<script>;";
			echo "window.alert('Data insert successfully....!');";
			echo 'window.location.href = "sign.php";'; 
			echo "</script>";
		}
		else
		{
			echo "<script>;";
			echo "window.alert('Data error....!');";
			echo "</script>";
		}
	}

 ?>