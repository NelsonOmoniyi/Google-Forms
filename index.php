<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<?php
include"config.php";
?>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Test Form</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="index.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.0/font/bootstrap-icons.css">
        
    </head>
    <body style="background-color: #F0EBF8;
    font-family: Arial, Roboto, Sans-serif;">
        <div class="form">
            <form action="index.php" method="POST">

                <div class="title-div">
                    <h3>Test Form</h3>
                    <a href="data.php" class="btn btn-sm" style="float: right; margin-top: -40px;">View Submitted Applications</a>
                    <hr>
                    <p class="mail">
                       <span><strong>omoniyinelson6@gmail.com </strong> <a href="https://accounts.google.com/AccountChooser" id="SwitchAcct" class="SwitchAcct">Switch account</a></span> 
                       <span><strong><i class="bi bi-cloud-check"></i></strong></span>
                    </p>
                    <p>The name and photo associated with your Google account will be recorded when you upload files and submit this form. Your email is not part of your response.</p>
                    <p class="req">* Required</p>
                </div>

                <div class="firstName-div">
                    <div class="firstName name">First Name <span class="req">*</span></div>
                    <div class="input-div1 input">
                        <input type="text" name="firstName" placeholder="Your answer" required maxlength="30">
                    </div>

                </div>


                <div class="lastName-div">
                    <div class="lastName name">Last Name <span class="req">*</span></div>
                    <div class="input-div2 input">
                        <input type="text" name="lastName" placeholder="Your answer" required maxlength="30"> 
                    </div>

                  

                </div>


                 <div class="email-div">
                    <div class="email name">Email <span class="req">*</span></div>
                    <div class="input-div3 input">
                        <input type="email" name="email" placeholder="Your answer" required maxlength="50">
                    </div>
                </div>

                <div class="mNumber-div">
                    <div class="mNumber name">Mobile Number <span class="req">*</span></div>
                    <div class="input-div4 input">
                        <input type="number" name="mNumber" placeholder="Your answer" required maxlength="20">
                    </div>

                </div>


                <div class="Ttitle-div">
                    <div class="Ttitle name">Talk Title <span class="req">*</span></div>
                    <div class="input-div5 input">
                        <input type="text" name="title" placeholder="Your answer" required maxlength="30">
                    </div>
                </div>

                <div class="Pphoto-div">
                    <div class="Pphoto name">Your Profile Photo <span class="req">*</span></div>
                    <div class="input-div6 input">
                        <span><i class="bi bi-upload"></i></span> 
                        <input type="file"  id="picture" name="picture" placeholder="Add file" value="Upload" maxlength="200">
                    </div>
                </div>

                <div class="buttons">
                    <input type="submit" class="btnn" name="Submit">
                    <span style="float: right; margin-top: 23px;" name="clear"><a href="index.php" class="btn btn-sm">Clear Form</a></span>
                </div>

                <div class="footer">
                    <p class="dont">Never submit passwords through Google Forms.</p>
                    <p class="terms">This content is neither created or endorsed by Google. Report Abuse - Term of Service - Private Policy <a href="data.php" class="btn btn-sm">View Submitted Applications</a></p>
                    
                    <h3>Google Forms</h3>

                </div>


            </form>
        </div>


    </body>
</html>


