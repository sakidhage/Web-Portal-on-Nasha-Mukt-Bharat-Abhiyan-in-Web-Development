<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<head>
<title>Visitors an Admin Panel Category Bootstrap Responsive Website Template | Responsive_table :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Visitors Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap-css -->
<link rel="stylesheet" href="css/bootstrap.min.css" >
<!-- //bootstrap-css -->
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href="css/style-responsive.css" rel="stylesheet"/>
<!-- font CSS -->
<link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<!-- font-awesome icons -->
<link rel="stylesheet" href="css/font.css" type="text/css"/>
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<script src="js/jquery2.0.3.min.js"></script>
</head>
<body>
<section id="container">
<!--header start-->
<header class="header fixed-top clearfix">
<!--logo start-->
<div class="brand">

    <a href="index.html" class="logo">
        VISITORS
    </a>
    <div class="sidebar-toggle-box">
        <div class="fa fa-bars"></div>
    </div>
</div>
<!--logo end-->


<div class="top-nav clearfix">
    <!--search & user info start-->
    <ul class="nav pull-right top-menu">
        
        <!-- user login dropdown start-->
        <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                <img alt="" src="images/2.png">
                <span class="username">Manthan</span>
                <b class="caret"></b>
            </a>
            <ul class="dropdown-menu extended logout">
                <li><a href="#"><i class=" fa fa-suitcase"></i>Profile</a></li>
                <li><a href="#"><i class="fa fa-cog"></i> Settings</a></li>
                <li><a href="index.php"><i class="fa fa-key"></i> Log Out</a></li>
            </ul>
        </li>
        <!-- user login dropdown end -->
       
    </ul>
    <!--search & user info end-->
</div>
</header>
<!--header end-->
<!--sidebar start-->
<aside>
    <div id="sidebar" class="nav-collapse">
        <!-- sidebar menu start-->
        <div class="leftside-navigation">
            <ul class="sidebar-menu" id="nav-accordion">
                <li>
                    <a href="dashboard.php">
                        <i class="fa fa-dashboard"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                
                
                <li class="sub-menu">
                    <a href="contactview.php">
                        <!-- <i class="fa fa-th"></i> -->
                        <span>Contact</span>
                    </a>
                    <!-- <ul class="sub">
                        <li><a href="basic_table.html">Basic Table</a></li>
                        <li><a href="responsive_table.html">Responsive Table</a></li>
                    </ul> -->
                </li>
                <li class="sub-menu">
                    <a href="advertise.php">
                        <!-- <i class="fa fa-th"></i> -->
                        <span>Advertisement</span>
                    </a>
                    <!-- <ul class="sub">
                        <li><a href="basic_table.html">Basic Table</a></li>
                        <li><a href="responsive_table.html">Responsive Table</a></li>
                    </ul> -->
                </li>
                
                
                <li>
                    <a href="logout.php">
                        <i class="fa fa-user"></i>
                        <span>Logout</span>
                    </a>
                </li>
            </ul>            </div>
        <!-- sidebar menu end-->
    </div>
</aside>
<!--sidebar end-->
<!--main content start-->
<section id="main-content">
	<section class="wrapper">
		<div class="table-agile-info">
 <div class="panel panel-default">
    <div class="panel-heading">
     Advertise
    </div>
    <div>
    <?php
    include "config.php";
	$add  = mysqli_query($conn,"select * from tb_add order by id desc") or die(mysqli_error($conn));
	?>
      <table class="table">
        <thead>
          <tr>
            <th data-breakpoints="xs">ID</th>
            <th data-breakpoints="xs">date</th>
            <th data-breakpoints="xs">palce</th>
            <th data-breakpoints="xs">Message</th>
            <th data-breakpoints="xs">Register member</th>
            <th data-breakpoints="xs">Operation</th>
           
          </tr>
        </thead>
        
        <tbody>
				<?php
					$counter = 0;
					while ($row = mysqli_fetch_array($add)) {
					extract($row);
					?>
				<tr>
					<td><?php echo ++$counter; ?></td>
					<td><?php echo $row['date']; ?></td>
					<td><?php echo $row['place']; ?></td>
					<td><?php echo $row['message']; ?></td>
                    <td><?php echo $row['reg_member']; ?></td>
					<td>
                        <a href="add_del.php?stud_id=<?php echo $id; ?>">
                        <button type="button" name="submit">Delete</button>
                    </a>
                    <a href="add_update.php?stud_id=<?php echo $id; ?>">
                        <button type="button" name="update">Update</button>
                    </a>
                    </td>
				</tr>
                
                            
		<?php } ?>  
        </tbody>
      </table>
      
        <a href="new_add.php?stud_id=<?php echo $id; ?>">
            <button type="button" name="submit">Add advertisement</button>
        </a> 
       
      
    </div>
    
  </div>
  
</div>
</section>
 <!-- footer -->
		  <!-- <div class="footer">
			<div class="wthree-copyright">
			  <p>© 2017 Visitors. All rights reserved | Design by <a href="http://w3layouts.com">W3layouts</a></p>
			</div>
		  </div> -->
  <!-- / footer -->
</section>

<!--main content end-->
</section>
<script src="js/bootstrap.js"></script>
<script src="js/jquery.dcjqaccordion.2.7.js"></script>
<script src="js/scripts.js"></script>
<script src="js/jquery.slimscroll.js"></script>
<script src="js/jquery.nicescroll.js"></script>
<!--[if lte IE 8]><script language="javascript" type="text/javascript" src="js/flot-chart/excanvas.min.js"></script><![endif]-->
<script src="js/jquery.scrollTo.js"></script>
</body>
</html>
