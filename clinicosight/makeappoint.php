<?php 
session_start();
$menu= 1;
include("dbconnection.php");
include("header.php");
include("validation/header.php"); 
include("functions/patient.php");

//CHECKS login button is submitted or not
if(isset($_POST["btnlogin"]))
{
	//patient Login funtion..
$loginvalidation =  loginfuntion($_POST["loginid"],$_POST["password"]);
}
?>
<!-- ####################################################################################################### -->
<?php include("menu.php"); 
?>

<!-- Patient Login Form####################################################################################################### -->
<div id="container">
  <div class="wrapper">
    <div id="content">
     <?php 
 if(isset($_SESSION["patid"]))
{
	$enable ="true";
$dt= "$_POST[year]-$_POST[month]-$_POST[date]"; ?>
<form id="formID" class="formular" method="post" action="appointmenttime.php">


     <div align="center"><strong>Make An Appointment</strong></div>

  <p>Patient ID
       <label for="textfield"></label>
    <input type="text" name="patid" id="textfield" class="validate[required] text-input" value="<?php echo $_SESSION["patid"]; ?>"/>

  Patient Name
  <input type="text" name="patname" id="textfield2" class="validate[required] text-input" value="<?php echo $_SESSION["patname"]; ?>"/>
  <label for="select"></label>
        
  Doctor Name  
  <input type="hidden" name="docid" id="docid" class="validate[required] text-input"  value="<?php echo $_SESSION["appdocid"]; ?>" />
  <input type="text" name="docname" id="textfield3" class="validate[required] text-input"  value="<?php echo $_SESSION["appdocname"]; ?>"/>
   Specialist Type : 
    <input type="text" name="sptype" id="textfield4" class="validate[required] text-input" value="<?php echo $_SESSION[appdocsptype];?>"/>
  
    Appointment Date :<label for="select" class="validate[required]"></label><?php include("controls/datetimepicker/demo.htm"); ?>  <br />
    
    
    Comment
    <label for="textarea"></label>
    <textarea name="comment" id="textarea" cols="45" rows="5"></textarea>
  </p>
     <div align="center">
     <input type="submit" name="button" id="button" value="Make An Appointment" />
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="reset" name="button2" id="button2" value="Reset" />
      </div>
      
      </form>
<?php
$sql="INSERT INTO appointment (patid, datetime,atime, adate, comment)
VALUES 
('$_POST[patid]','$dt','$_POST[atime]','$_POST[adate]','$_POST[adate]')";

}
else
{
?>
      <h1>Patient Login</h1>
      <p>&nbsp;</p>
     
      <form method="post" action="appointmenttime.php" id="formID" class="formular" >
      <p>
      <center>  <img src="images/patient.jpg" alt="" width="125" height="125" /></center></p>
     <p><font color="#FF0000"><?php echo $loginvalidation; ?></font></p>
      <p>Login ID :
  <input type="text" name="loginid"  id="textfield" class="validate[required] text-input" value="" size="22" />
      </p>
      <p>      
        Password : <input type="password" name="password" id="password"  class="validate[required] text-input" value="" size="22" />
      </p>
      
      <p> &nbsp; <br />    
        <input name="btnlogin" type="submit" id="submit" value="Login"  class="submit"/>

      </p>
      <p>&nbsp;

      </p>
      </form>
      <form method="post" action="register.php" id="formID1" class="formular" >
       <p>
<b>New User</b>
      </p>
       <input name="btnlogin" type="submit" id="submit" value="Click here to Register"  class="submit"/>

      <p>
&nbsp;<br />&nbsp;
      </p>
      </form>
      <p>&nbsp;</p>
<!-- Patient Login Form Ends Here####################################################################################################### -->
 <?php
}
 ?>
      
<h2>&nbsp;</h2>
<div id="respond"></div>
    </div>
    <div id="column">
      <div class="subnav">
        <h2>Patient Account</h2>
        <ul>
          <li><a href="profile.php">Patient Profile</a></li>
          <li><a href="#">Free CSS Templates</a>
            <ul>
              <li><a href="#">Free XHTML Templates</a></li>
              <li><a href="#">Free Website Templates</a></li>
            </ul>
          </li>
          <li><a href="#">Open Source Layouts</a>
            <ul>
              <li><a href="#">Open Source Software</a></li>
              <li><a href="#">Open Source Webdesign</a>
                <ul>
                  <li><a href="#">Open Source Downloads</a></li>
                  <li><a href="#">Open Source Website</a></li>
                </ul>
              </li>
            </ul>
          </li>
          <li><a href="#">Open Source Themes</a></li>
        </ul>
      </div>
    </div>
    <br class="clear" />
  </div>
</div>
<!-- ####################################################################################################### -->
<div id="footer">
  <div class="wrapper">
    <div id="newsletter">
      <h2>Stay In The Know !</h2>
      <p>Please enter your email to join our mailing list</p>
      <form action="#" method="post">
        <fieldset>
          <legend>News Letter</legend>
          <input type="text" value="Enter Email Here&hellip;"  onfocus="this.value=(this.value=='Enter Email Here&hellip;')? '' : this.value ;" />
          <input type="submit" name="news_go" id="news_go" value="GO" />
        </fieldset>
      </form>
      <p>To unsubscribe please <a href="#">click here &raquo;</a></p>
    </div>
    <div class="footbox">
      <h2>Lacus interdum</h2>
      <ul>
        <li><a href="#">Praesent et eros</a></li>
        <li><a href="#">Praesent et eros</a></li>
        <li><a href="#">Lorem ipsum dolor</a></li>
        <li><a href="#">Suspendisse in neque</a></li>
        <li class="last"><a href="#">Praesent et eros</a></li>
      </ul>
    </div>
    <div class="footbox">
      <h2>Lacus interdum</h2>
      <ul>
        <li><a href="#">Praesent et eros</a></li>
        <li><a href="#">Praesent et eros</a></li>
        <li><a href="#">Lorem ipsum dolor</a></li>
        <li><a href="#">Suspendisse in neque</a></li>
        <li class="last"><a href="#">Praesent et eros</a></li>
      </ul>
    </div>
    <div class="footbox">
      <h2>Lacus interdum</h2>
      <ul>
        <li><a href="#">Praesent et eros</a></li>
        <li><a href="#">Praesent et eros</a></li>
        <li><a href="#">Lorem ipsum dolor</a></li>
        <li><a href="#">Suspendisse in neque</a></li>
        <li class="last"><a href="#">Praesent et eros</a></li>
      </ul>
    </div>
    <br class="clear" />
  </div>
</div>
<!-- ####################################################################################################### -->
<div id="copyright">
  <div class="wrapper">
    <p class="fl_left">Copyright &copy; 2011 - All Rights Reserved - <a href="#">Domain Name</a></p>
    <p class="fl_right">Template by <a href="http://www.os-templates.com/" title="Free Website Templates">OS Templates</a></p>
    <br class="clear" />
  </div>
</div>
</body>
</html>
