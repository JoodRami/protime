<?php?>
<!DOCTYPE html>
<html lang="en">
    <head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>خدمات</title>
<style>
    body{
        background-color: rgb(152, 175, 237);
    }
   

</style>

    </head>
    <body> 
    <a href="home.php" class="button"> الرجوع للصفحة الرئيسية</a>
        <center> 
            <form method="post" action="index.php"> 
        <h1>طلب خدمة </h1> <br>
        <h3>اسم الخدمه</h3>
       <h3><input type="text"  name="ser_name" placeholder="اسم الخدمة المختارة" > <br><br> </h3>
       <h3>زمن الخدمه</h3>
       <h3><input type="text"  name="time" placeholder="الوقت المناسب" > <br><br> </h3>
       <h3>سعر الخدمه</h3>
<input type="radio">500</br>
<input type="radio">1000 </br>
<input type="radio">2500 </br>  <br>
       <input type="submit"  name="pay" value ="الذهاب للدفع" ><br><br>
       <form method="post" action="yu.php"> 
       <img  src="images/sh.jpg" height="250">

       </form>
      
    </body>
   </head>
</html>