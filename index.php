<?php

if($_COOKIE['lang']==''){
   setcookie('lang', "eng", time() + 60 * 60 * 24 * 180);
   header('Location: index.php?lang=eng');
}
session_start();
if(@$_GET["lang"]){
	$_SESSION["lang"] = $_GET["lang"];
}



switch($_SESSION["lang"]){
      case "eng":
         require('lang/eng.php');
      break;
      case "ua":
         require('lang/ua.php');
      break;
      case "ru":
         require('lang/ru.php');
      break;
      default:
         require('lang/eng.php');
         break;

   setcookie('lang', $lang['current'], time() + 60 * 60 * 24 * 180);
}
?>

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
   <title>Gallery Barbershop</title>
</head>
<body>
   <a class="anchor" id="home"></a>
   <nav class="navbar">
      <div class="nav-wrap">
         <div class="nav-logo"  onclick="smoothScroll('home')">
            <img src="sources/img/logo.png">
         </div>
         <div class="nav-links">
            <ul>
               <li><div onclick="smoothScroll('price-list')" ><?php echo $lang['pricelist'];?></div></li>
               <li><div onclick="smoothScroll('team')" ><?php echo $lang['team'];?></div></li>
               <li><div onclick="smoothScroll('slider')" ><?php echo $lang['gallery'];?></div></li>
               <li><div onclick="smoothScroll('about')" ><?php echo $lang['aboutUs'];?></div></li>
               <li><div onclick="smoothScroll('contacts')" ><?php echo $lang['contacts'];?></div></li>
            </ul>
         </div>
         <div class="authorization">
            
            <div class="lang">
               <button class="dropbtn"><img src="sources/flags/<?php echo $lang['lang-flag']?>_flag.png" alt="ua"></button>
               <div class="dropdown-content">
                  <a href="index.php?lang=ua" class="lang-item" id="ua"><img src="sources/flags/ua_flag.png" alt="ua"></a>
                  <a href="index.php?lang=ru" class="lang-item" id="ru"><img src="sources/flags/ru_flag.png" alt="ru"></a>
                  <a href="index.php?lang=en" class="lang-item" id="en"><img src="sources/flags/us_flag.png" alt="us"></a>
               </div>
            </div>

         <?php if(!isset($_COOKIE['user'])): ?>
            <div class="sign-in" onclick="displayElement('sign-in-form','flex'); displayElement('login-form','block')"> 
               <p><?php echo $lang['login'];?></p>
            </div>
            <?php else: ?>
            <div class="sign-in">
               <ul>
                  <li><a href="user_account.php"><?php echo $lang['myAccount'];?></a></li>
                  <li><a href="actions/exit.php"><?php echo $lang['quit'];?></a></li>
               </ul>
            </div>
         <?php endif; ?>
         </div>
      </div>
   </nav>
   <header id="header">
      <div class="header-filter"></div>
      <div class="wrapper">
         <div class="logo-container">
            <div class="logo-wrap">
               <img src="sources/img/logo.png" alt="logo">
               <p>Чоловіча цирюльня</p>
            </div>
            <article><p>„<?php echo $lang['article'];?>“</p></article>
            <div class="make-order"><p><?php echo $lang['toBook'];?></p></div>
         </div>
      </div>
   </header>
   <section>
      <a class="anchor" id="price-list"></a><!--anchor for price-list-->
      <div class="pricelist-block">
         <div class="wrapper">
            <p><?php echo $lang['services'];?></p>
            <div class="table">
               <table cellspacing="0" cellpadding="0">
                  <tr>
                     <td><?php echo $lang['haircut'];?></td>
                     <td class="price">200 <?php echo $lang['uah'];?></td>
                  </tr>
                  <tr>
                     <td class="dark"><?php echo $lang['beardTrimming'];?></td>
                     <td class="dark price">120 <?php echo $lang['uah'];?></td>
                  </tr>
                  <tr> 
                     <td><?php echo $lang['haircutAuto'];?></td>
                     <td class="price">150 <?php echo $lang['uah'];?></td>
                  </tr>
                  <tr>
                     <td class="dark"><?php echo $lang['childrenHaircut'];?></td>
                     <td class="dark price">150 <?php echo $lang['uah'];?></td>
                  </tr>
                  <tr>
                     <td><?php echo $lang['bundleCut'];?></td>
                     <td class="price">300 <?php echo $lang['uah'];?></td>
                  </tr>
                  <tr>
                     <td class="dark"><?php echo $lang['familyCut'];?></td>
                     <td class="dark price">300 <?php echo $lang['uah'];?></td>
                  </tr>
               </table>
            </div>
         </div>
      </div>
      <a class="anchor" id="team"></a><!--anchor for team-->
      <div class="team-list bg-filter">
         <div class="bg-filter"></div>
         <div class="container">
            <p>команда</p>
            <div class="wrapper">
               <div class="team-item">
                  <img src="sources/img/1.jpg">
                  <div class="hover-panel">
                     <div class="team-info">
                        <span class="name">Влад</span>
                        <span class="job">Майстер</span>
                     </div>
                  </div>
               </div>
               
               <div class="team-item">
                  <img src="sources/img/1.jpg">
                  <div class="hover-panel">
                     <div class="team-info">
                        <span class="name">Влад</span>
                        <span class="job">Майстер</span>
                     </div>
                  </div>
               </div>
               
               <div class="team-item">
                  <img src="sources/img/1.jpg">
                  <div class="hover-panel">
                     <div class="team-info">
                        <span class="name">Влад</span>
                        <span class="job">Майстер</span>
                     </div>
                  </div>
               </div>
               
               <div class="team-item">
                  <img src="sources/img/1.jpg">
                  <div class="hover-panel">
                     <div class="team-info">
                        <span class="name">Влад</span>
                        <span class="job">Майстер</span>
                     </div>
                  </div>
               </div>
               
               <div class="team-item">
                  <img src="sources/img/1.jpg" >
                  <div class="hover-panel">
                     <div class="team-info">
                        <span class="name">Влад</span>
                        <span class="job">Майстер</span>
                     </div>
                  </div>
               </div>
               
               <div class="team-item">
                  <img src="sources/img/1.jpg">
                  <div class="hover-panel">
                     <div class="team-info">
                        <span class="name">Влад</span>
                        <span class="job">Майстер</span>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <a class="anchor" id="slider"></a><!--anchor for slider-->
      <div class="photo-slider">
         <div class="wrapper">
            <div id="gallery" class="slider-block" style="display:none;">
		
               <img src="sources/img/slide-1.jpg" data-description="Image 1 Description">
               
               <img src="sources/img/slide-2.jpg" data-description="Image 2 Description">

               <img src="sources/img/slide-1.jpg" data-description="Image 1 Description">
               
               <img src="sources/img/slide-2.jpg" data-description="Image 2 Description">

               <img src="sources/img/slide-1.jpg" data-description="Image 1 Description">
               
               <img src="sources/img/slide-2.jpg" data-description="Image 2 Description">
               
               <img src="sources/img/slide-1.jpg" data-description="Image 1 Description">
               
               <img src="sources/img/slide-2.jpg" data-description="Image 2 Description">
            
            </div>
         </div> 
      </div>
      <a class="anchor" id="about"></a><!--anchor for slider-->
      <div class="about-us bg-filter">
         <div class="wrapper"><!---about-us text has to be here--></div>
      </div>
      <a class="anchor" id="contacts"></a><!--anchor for slider-->
      <div class="contacts">
         <div class="wrapper"><!---about-us text has to be here--></div>
      </div>
   </section>
   <footer></footer>
   <?php
   if(@$_COOKIE['user'] == ''): ?>
   <div class="sign-in-form" id="sign-in-form">
      <div class="login-form" id="login-form">
         <div class="window-title">
            <p class="form-title">Sign In</p>
            <div class="close-tab" onclick="displayElement('sign-in-form','none'); displayElement('register-form','none'); displayElement('login-form','none')">
               <div class="line1"></div>
               <div class="line2"></div>
            </div>
         </div>
         <form action="actions/auth.php" method="POST" > 
            
            <div class="form-group">
               <input type="text" class="form-control" id="login_enter" name="login" placeholder="Login" required>
             </div>
             <div class="form-group">
                <input type="password" class="form-control" id="pass_enter" name="pass" placeholder="Password" required>
             </div>
            
            <input type="submit" class="btn btn-success" name="submit" value="Sign In"></input>
            <br>
            <p>If you don`t have any account, then <span onclick="displayElement('register-form','block'), displayElement('login-form','none')" >Sign up</span></p> 
          </form>
      </div>
      <div class="register-form" id="register-form">
         <div class="window-title">
            <p class="form-title">Sing Up</p>
            <div class="close-tab" onclick="displayElement('sign-in-form','none'); displayElement('register-form','none'); displayElement('login-form','none')">
               <div class="line1"></div>
               <div class="line2"></div>
            </div>
         </div>
         <form action="actions/register.php" method="POST" > 
            <div class="form-group">
              <input type="text" class="form-control" id="name" name="name" placeholder="Name" required>
            </div>
            <div class="form-group">
               <input type="date" class="form-control" id="birthday" name="birthday" placeholder="Birthday" required>
            </div>
            <div class="form-group">
               <input type="email" class="form-control" id="email" name="email" placeholder="Email" required >
            </div>
            <div class="form-group">
               <input type="text" class="form-control" id="login_register" name="login" placeholder="Login" required>
             </div>
             <div class="form-group">
               <input type="password" class="form-control" id="pass_register" name="pass" placeholder="Password" required>
             </div>
             <div class="form-group">
               <input type="text" class="form-control" id="contactNumber" name="contactNumber" placeholder="Contact Number" 
               onkeypress="return (event.charCode >= 48 && event.charCode <= 57 && /^\d{0,9}$/.test(this.value));" required>
             </div>
            
             <input type="submit" class="btn btn-success" name="submit" value="Sign Up"></input>
            <br>
            <p>If you already have account, then <span onclick="displayElement('login-form','block'), displayElement('register-form','none')" >Sign in</span></p> 
          </form>
      </div>
   </div>
   <?php endif; ?>
</body>
</html>