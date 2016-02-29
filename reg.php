<?php 
               error_reporting('E_ALL ^ E_NOTICE');
       if(isset($_POST['submit']))
            
       {
        mysql_connect('localhost','root','','etmaouting') or die(mysql_error());
        mysql_select_db('etmaoutings') or die(mysql_error());
        $First_Name=  \trim($_POST['FName']);
        $Last_Name=  \trim($_POST['LName']);
        $Contact=  \trim($_POST['Contact']);
        $email=  \trim($_POST['Email']);
        $q=mysql_query("select * from etmaouting where brethren='".$Contact."' or email='".$mail."' ") or die(mysql_error());
        $n=mysql_fetch_row($q);
        if($n>0)
        {
         $er='The username name '.$First_name.' or mail '.$mail.' is already registered for event';
        }
        else
        {
         $insert=mysql_query("insert into brethren values('".$First_Name."','".$Last_Name."','".$Contact."','".$email."')") or die(mysql_error());
         if($insert)
         {
          $er='Values are registered successfully';
         }
         else
         {
          $er='Values are not registered';
         }
        }
       }
           
       
       
      ?>



<html>
  
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <script type="text/javascript" src="http://netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css"
    rel="stylesheet" type="text/css">
    <link href="http://pingendo.github.io/pingendo-bootstrap/themes/default/bootstrap.css"
    rel="stylesheet" type="text/css">
  </head>  

  <body>      
    <div class="navbar navbar-default navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-ex-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#"><span>Brand</span></a>
        </div>
        <div class="collapse navbar-collapse" id="navbar-ex-collapse">
          <ul class="nav navbar-nav navbar-right">
            <li class="active">
                <a href="index.php">Events Calender</a>
            </li>
            <li class="active">
              <a href="#">Home</a>
            </li>
            <li>
              <a href="#">Log out</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div>
       
      <div class="section section-info">
        <div class="container-fluid">
          <div class="row-fluid">
            <div class="col-md-4 text-centre">
                <centre>
                <form role="form" method="post">
                <label class="control-label">First Name</label>
                <input class="form-control" id="FName" placeholder="Enter Fisrt Name"
                type="text">
                <label class="control-label">Last Name</label>
                <input class="form-control" id="LName" placeholder="Enter Fisrt Name"
                type="text">
                <label class="control-label">Contact</label>
                <input class="form-control" id="Contact" placeholder="Enter Contact"
                type="text">
                <label class="control-label"> Email address</label>
                <input class="form-control" id="Email"
                placeholder="Enter email" type="email">
                <button type="submit" class="active btn btn-sm btn-warning">Submit</button>
              </form>
              </div>
          </div>
        </div>
      </div>
      <script type="text/javascript">
        $(document).ready(function(){
        $('submit').click(function(){
          var Fname =document.getElementsByTagName('FName').value;
          var LName =document.getElementsByTagName('LName').value;
          var Contact =document.getElementsByTagName('Contact').value;
          var Email =document.getElementsByTagName('email').value;
          var chk = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
                 
          if (Fname ==='') {
            $('#er').html('Enter your Fisrt Name');
            return false;
            }

          if (LName ==='') {
            $('#er').html('Enter your Last Name');
          return false;
            }

          if (Contact ==='') {
            $('$er').html('Enter your Contact');
            return false;
          }

          if (Email ==='') {
            $('#er').html('Enter your Email');
            return false;
          }

          if (!chk.test(Email)) {
            $('#er').html('Enter valid Email');
            return false;
          }


        });
        });

      </script>
    </div>
       
  </body>

</html>