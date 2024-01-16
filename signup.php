<?php?>
<!DOCTYPE html>
<html>
<head>
<meta charset=utf-8>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>signUp</title>
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
	
		 <form action="db_conn.php" method="post">

<div id="main" class="alt">
			<!--banner-->
	 <section>
						<div class="inner">
							<header class="major">
								<h1 style="color:black">مستخدم جديد</h1>
							</header>
								
						
						</div>
					</section>
									
		
		
     	<label style="color:black"> اسم المستخدم </label>
     	<input type="text" name="uname" placeholder="user Name"><br>

		 <label style="color:black">الاسم الثلاثي </label>
     	<input type="text" name="name" placeholder="full Name"><br>

		 <label style="color:black">الايميل  </label>
     	<input type="email" name="email" placeholder="example@gmail.com"><br>

     	<label style="color:black"> كلمة المرور  </label>
     	<input type="password" name="password" placeholder="Password"><br>

        
     	<label style="color:black"> رقم الجوال   </label>
     	<input type="phonenumber" name="phone" placeholder="0555555555"><br> <br>

	

         <img src="images/back1.png"/>
		 <input type="submit" name="add" opnclick="add()" value="انشاء حساب" class="submit" id="submit"/>
		 <a href="sign.php" class="button">لديك حساب بالفعل؟ اضغط هنا </a> 
        
        
		 </form>
	 </div>
</body>
</html>