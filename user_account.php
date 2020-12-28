<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">

   
   <link rel="shortcut icon" href="sources/img/favicon.ico" type="image/x-icon"><!--icon-->
   <link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=Roboto&display=swap" rel="stylesheet"><!--font-->



   <!--jquerry link-->
   <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
   <script type="text/javascript" src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>

<!--unitegallery plugin-->
   <script type='text/javascript' src='plugins/unitegallery/js/unitegallery.min.js'></script> 
   <link rel='stylesheet' href='plugins/unitegallery/css/unite-gallery.css' type='text/css' /> 
   <script type='text/javascript' src='plugins/unitegallery/themes/slider/ug-theme-slider.js'></script> 
   <link rel='stylesheet' href='plugins/unitegallery/themes/default/ug-theme-default.css' type='text/css' />

   <script src="scripts/main.js"></script>
   <script src="scripts/script.js"></script>
   <link rel="stylesheet" href="css/style.css">
   <link rel="stylesheet" href="css/user-style.css">
   <title>Gallery Barbershop</title>
</head>
<body>
   <div class="wrapper">
   <?php if(!isset($_COOKIE['user'])): ?>
            <style>
               .sign-in{
                  width: 100%;
                  height: 100%;
                  display: flex;
                  align-items: center;
                  justify-content: center;
                  flex-direction: column;
               }
            </style>
            
            <div class="sign-in">
               <p>На жаль,у нас немає інформації про анонімного користувача :(</p> <br>
               <span onclick="displayElement('sign-in-form','flex')" >Увійти</span>
            </div>
            <?php else:
               
               
$db_host = 'localhost';
$db_user = 'root';
$db_pass = '';
$db_name ='barbershop_db';
$mysql = new mysqli($db_host,$db_user, $db_pass, $db_name);
$userId = $_COOKIE['user'];
$result = $mysql->query("SELECT * FROM `userinfo` WHERE `userId`= '$userId'");
$userInfo = mysqli_fetch_all($result,1);
if(count($userInfo) == 0){
   echo "user not found";
   $mysql->close();
   exit();
}
$userInfo = $userInfo['0']; // відкриваємо перший рядок у масиві



$mysql->close();


            ?>

            <div class="sign-in">
               <ul>
                  <li><a href="index.php">До головної</a></li>
                  <li><a href="actions/exit.php">Вихід</a></li>
               </ul>
            </div>
            <br>
            <div class="user-info">
               <p>Ім'я: <?= $userInfo['name'] ?> </p> 
               <p>День народження: <?= $userInfo['birthday'] ?> </p>
               <p>Електронна пошта: <?= $userInfo['email'] ?> </p>
               <p>Мобільний: <?= $userInfo['contactNumber'] ?> </p>
            </div>
         <?php endif; ?>
         
   </div>
   <?php
   if($_COOKIE['user'] == ''): ?>
   <div class="sign-in-form" id="sign-in-form">
      <div class="login-form" id="login-form">
         <div class="close-tab" onclick="displayElement('sign-in-form','none')">
            <div class="line1"></div>
            <div class="line2"></div>
         </div>
         <h3>Login</h3>
         <form action="actions/auth.php" method="POST" > 
            
            <div class="form-group">
               <input type="text" class="form-control" id="userlogin_enter" name="userlogin" placeholder="Login" required>
             </div>
             <div class="form-group">
                <input type="password" class="form-control" id="userpass_enter" name="userpass" placeholder="Password" required>
             </div>
            
            <button type="submit" class="btn btn-success" name="submit">Submit</button>
            <br>
            <p>If don`t have any acc then go to <span onclick="displayElement('register-form','block'), displayElement('login-form','none')" >registation</span></p> 
          </form>
      </div>
      <div class="register-form" id="register-form">
         <div class="close-tab" onclick="displayElement('sign-in-form','none')">
            <div class="line1"></div>
            <div class="line2"></div>
         </div>
         <h3>Registation</h3>
         <form action="actions/register.php" method="POST" > 
            <div class="form-group">
              <input type="text" class="form-control" id="personName" name="personName" placeholder="Name" required>
            </div>
            <div class="form-group">
               <input type="date" class="form-control" id="birthday" name="birthday" placeholder="Birthday" required>
            </div>
            <div class="form-group">
               <input type="email" class="form-control" id="email" name="email" placeholder="Email" required >
            </div>
            <div class="form-group">
               <input type="text" class="form-control" id="userlogin_register" name="userlogin" placeholder="Login" required>
             </div>
             <div class="form-group">
                <input type="password" class="form-control" id="userpass_register" name="userpass" placeholder="Password" required>
             </div>
             <div class="form-group">
                <input type="text" class="form-control" id="contactNumber" name="contactNumber" placeholder="Contact Number" onkeypress="return (event.charCode >= 48 && event.charCode <= 57 && /^\d{0,9}$/.test(this.value));" required>
             </div>
            
            <button type="submit" class="btn btn-success" name="submit">Submit</button>
            <br>
            <p>If you already have acc go to <span onclick="displayElement('login-form','block'), displayElement('register-form','none')" >login</span></p> 
          </form>
      </div>
   </div>
   <?php endif; ?>
</body>
</html>