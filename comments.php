<?php 
session_start();


?>
<!DOCTYPE html>
<html>
<head>
<meta charset=utf-8>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>comments</title>
	<link href='http://fonts.googleapis.com/css?family=Roboto:400,300,700&amp;subset=latin,latin-ext' rel='stylesheet' type='text/css'>
        <!-- Load css styles -->
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
        <link rel="stylesheet" type="text/css" href="css/bootstrap-responsive.css" />
        <link rel="stylesheet" type="text/css" href="css/style.css" />
        <link rel="stylesheet" type="text/css" href="css/pluton.css" />
        <link rel="stylesheet" type="text/css" href="css/jquery.cslider.css" />
        <link rel="stylesheet" type="text/css" href="css/jquery.bxslider.css" />
        <link rel="stylesheet" type="text/css" href="css/animate.css" />
</head>
<body>
<div class="navbar">
            <div class="navbar-inner">
                <div class="container">
                    <a href="#" class="brand">
                        <img  src="images/logo.png" width="120" height="40" alt="Logo" />
                        <!-- This is website logo -->
                    </a>
                    <!-- Navigation button, visible on small resolution -->
                    <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                        <i class="icon-menu"></i>
                    </button>
                    <div class="nav-collapse collapse pull-right">
                        <ul class="nav" id="top-navigation">
                            <li class="active"><a href="home.php">الصفحة الرئيسية </a></li>
                            <li><a href="comments.php">اضافة تعليق </a></li>
                            <li><a href="sign.php">تسجيل الدخول</a></li>
                        </ul>
                    </div>
</div> </div> </div>
	<style>
		div.a{ text-align:center;
		}
		</style>
		 
		 <div class ="a">
	
		 <form action="login.php" method="post">

<div id="main" class="alt">
			<!--banner-->
	 <section>
						<div class="inner">
							<header class="major">
								<h1 style="color:black"> اضافة تعليق</h1>
							</header>
								
						
						</div>
					</section>
									
		
                    <label style="color:black"> اسم المستخدم </label>
     	<input type="text" name="uname" placeholder="user Name"><br>


		 <label style="color:black">التعليق  </label>
     	<input type="text" name="comm" placeholder="اكتب تعليقك هنا"><br><br>

         <button type="submit"  name="add" onclick="add()">إضافة التعليق</button>  <br> <br>

         <img src="images/back1.png"/>
		 <a href="home.php" class="button"> الرجوع للصفحة الرئيسية</a>
		

		 </form>
		 
		

	 </div>
	 <?php   
	 
$connection = mysqli_connect ('localhost','root','','pro');   
    
    
//add   
if(isset($_POST['add'])) 
{	
     $comments= $_POST['comment'];   
  $user= $_POST['user']; 
  $useru= $_POST['user2'];    

      
     
if($user==$useru)  
{  
  $query="INSERT INTO comment (the_comment)
             VALUES ('$comments')";
 $result = mysqli_query ($connection,$query);   
 if ($result){   
  echo "inserted done";   
     
}else {die('error');   
 }   
}    
} 

?>
</body>
</html>