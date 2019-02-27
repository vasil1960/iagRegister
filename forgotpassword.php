<?php require_once("webassist/security_assist/wa_hashencryption.php"); ?>
<?php require_once('Connections/ltu.php'); ?>
<?php require_once("webassist/form_validations/wavt_scripts_php.php"); ?>
<?php require_once("webassist/form_validations/wavt_validatedform_php.php"); ?>
<?php require_once( "webassist/security_assist/helper_php.php" ); ?>
<?php require_once("webassist/email/WA_Email.php"); ?>
<?php 
 if ((isset($_POST["ForgotPassword_submit"]) || isset($_POST["ForgotPassword_submit_x"])))  {
   $WAFV_Redirect = "".($_SERVER["PHP_SELF"])  ."?invalid=true";
   $_SESSION['WAVT_forgotpassword_Errors'] = "";
   if ($WAFV_Redirect == "")  {
     $WAFV_Redirect = $_SERVER["PHP_SELF"];
   }
   $WAFV_Errors = "";
   $WAFV_Errors .= WAValidateEM((isset($_POST["Forgot_Password_group_Email"])?$_POST["Forgot_Password_group_Email"]:"") . "",true,1);
  $WAFV_Errors .= WAValidateLE((strtolower(isset($_POST["Security_Code"])?$_POST["Security_Code"]:"")) . "",((isset($_SESSION["captcha_Security_Code"]))?strtolower($_SESSION["captcha_Security_Code"]):"") . "",true,2);
  $WAFV_Errors .= WAValidateLE((strtolower(isset($_POST["Security_Answer"])?$_POST["Security_Answer"]:"")) . "",((isset($_SESSION["random_answer"]))?strtolower($_SESSION["random_answer"]):"") . "",true,3);

   if ($WAFV_Errors != "")  {
     PostResult($WAFV_Redirect,$WAFV_Errors,"forgotpassword");
   }
 }
 ?>
<?php
if(isset($_POST["ForgotPassword_submit"]) || isset($_POST["ForgotPassword_submit_x"])){
	//WA SecurityAssist Email object="PHPMailer"
  $WA_Auth_Parameter = array(
    "connection"=>$ltu,
    "database"=>$database_ltu,
    "tableName"=>"ps4_users",
    "filterColumn"=>"UserEmail",
    "columnValue"=>"".((isset($_POST["Forgot_Password_group_Email"]))?$_POST["Forgot_Password_group_Email"]:"")  ."",
    "columnType"=>"text",
    "usernameColumn"=>"UserEmail",
    "passwordColumn"=>"UserPassword",
    "passwordEncryption"=>"hash",
    "successRedirect"=>"login.php?emailedPassword=1",
    "failRedirect"=>"forgotpassword.php",
    "keepQueryString"=>true,
    "toAddressColumn"=>"UserEmail",
    "fromAddress"=>"yourname@yourserver.com",
    "fromAddressDisplay"=>"Your Name",
    "mailHost"=>"mail.tsigov.eu",
    "mailPort"=>"25",
    "mailMethod"=>"smtp",
    "mailCharSet"=>"UTF-8",
    "subject"=>"Forgotten Password",
    "mailBodyFile"=>"webassist/email/forgotpw.php"
);
	WA_Auth_ForgotPassword($WA_Auth_Parameter);
}
?>
<!DOCTYPE html>
<html lang="en"><!-- InstanceBegin template="/Templates/main.dwt.php" codeOutsideHTMLIsLocked="false" -->
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- InstanceBeginEditable name="doctitle" -->
<title>Bootstrap - Prebuilt Layout</title>
<!-- InstanceEndEditable -->
<!-- Bootstrap -->
<link href="css/bootstrap.css" rel="stylesheet">

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
<!-- InstanceBeginEditable name="head" -->
<!-- InstanceEndEditable -->
</head>
<body>
<nav class="navbar navbar-default">
  <div class="container-fluid"> 
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#defaultNavbar1"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
      <a class="navbar-brand" href="#">Brand</a></div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="defaultNavbar1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Link<span class="sr-only">(current)</span></a></li>
        <li><a href="#">Link</a></li>
        <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Dropdown<span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li class="divider"></li>
            <li><a href="#">Separated link</a></li>
            <li class="divider"></li>
            <li><a href="#">One more separated link</a></li>
          </ul>
        </li>
      </ul>
      <form class="navbar-form navbar-left" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#">Link</a></li>
        <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Dropdown<span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li class="divider"></li>
            <li><a href="#">Separated link</a></li>
          </ul>
        </li>
      </ul>
    </div>
    <!-- /.navbar-collapse --> 
  </div>
  <!-- /.container-fluid --> 
</nav>
<div class="container-fluid">
  <div class="row">
    <div class="col-md-6 col-md-offset-3">
      <h1 class="text-center">Bootstrap with Dreamweaver</h1>
    </div>
  </div>
  <hr>
</div>
<div class="container">
  <div class="row">
  <!-- InstanceBeginEditable name="MainContent" -->
<?php if(WA_Auth_RulePasses("Validated form")){ // Begin Show Region ?>
<p>Invalid information, please check your entries and try again</p>
<?php } // End Show Region ?>
<?php if(WA_Auth_RulePasses("Email address not found")){ // Begin Show Region ?>
<p>Your email address could not be found in our records. Please try again.</p>
<?php } // End Show Region ?>
<?php if(WA_Auth_RulePasses("Email server failure")){ // Begin Show Region ?>
<p>Email failed to send.  Please confirm your email settings with your hosting provider.</p>
<?php } // End Show Region ?>
<div id="ForgotPWContainer" class="WAATK">
  <div id="ForgotPassword_Basic_Default_ProgressWrapper">
    <form class="Basic_Default" id="ForgotPassword_Basic_Default" name="ForgotPassword_Basic_Default" method="post" action="forgotpassword.php">
      <fieldset class="Basic_Default" id="Forgot_Password">
        <legend class="groupHeader">Forgot Password</legend>
        <span class="fieldsetDescription"> Required * </span>
        <div class="lineGroup">
          <label for="Forgot_Password_group_Email" class="sublabel" > Email:<span class="requiredIndicator">&nbsp;*</span></label>
          <input id="Forgot_Password_group_Email" name="Forgot_Password_group_Email" type="text" value="<?php echo((isset($_GET["invalid"])?ValidatedField("forgotpassword","Forgot_Password_group_Email"):"")); ?>" class="formTextfield_Medium" tabindex="1" pattern="[^@]+@[^@]+\.[a-zA-Z]{2,6}" title="Please enter a value." required="true">
          <?php
if (ValidatedField('forgotpassword','forgotpassword'))  {
  if ((strpos((",".ValidatedField("forgotpassword","forgotpassword").","), "," . "1" . ",") !== false || "1" == ""))  {
    if (!(false))  {
?>
            <span class="serverInvalidState" id="Forgot_Password_group_Email_ServerError">Please enter a value.</span>
            <?php //WAFV_Conditional forgotpassword.php forgotpassword(1:)
    }
  }
}?>
        </div>
        <div class="lineGroup">
          <label for="Security_Code" class="sublabel" >&nbsp;</label>
          <img src="webassist/captcha/wavt_captchasecurityimages.php?field=Security_Code&amp;noisefreq=15&amp;noisecolor=060606&amp;gridcolor=080808&amp;font=fonts/MOM_T___.TTF&amp;textcolor=040404" alt="Security Code" class="Captcha">
          <div class="fullColumnGroup" style="clear:left;">
            <label for="Security_Code" class="sublabel" > Security code:<span class="requiredIndicator">&nbsp;*</span></label>
            <input id="Security_Code" name="Security_Code" type="text" value="" class="formTextfield_Large" tabindex="2" title="Please enter a value" required="true">
            <?php
if (ValidatedField('forgotpassword','forgotpassword'))  {
  if ((strpos((",".ValidatedField("forgotpassword","forgotpassword").","), "," . "2" . ",") !== false || "2" == ""))  {
    if (!(false))  {
?>
              <span class="serverInvalidState" id="Security_Code_ServerError">Please enter a value</span>
              <?php //WAFV_Conditional forgotpassword.php forgotpassword(2:)
    }
  }
}?>
          </div>
        </div>
        <div class="lineGroup">
          <label for="Security_Answer_2" class="sublabel" >&nbsp;</label>
          <span class="precedingText">
            <?php require_once("webassist/captcha/wavt_captchasecurityquestion.php"); ?>
          </span>
          <div class="fullColumnGroup" style="clear:left;">
            <label for="Security_Answer" class="sublabel" > Answer:<span class="requiredIndicator">&nbsp;*</span></label>
            <input id="Security_Answer" name="Security_Answer" type="text" value="" class="formTextfield_Large" tabindex="3" title="Please enter a value" required="true">
            <?php
if (ValidatedField('forgotpassword','forgotpassword'))  {
  if ((strpos((",".ValidatedField("forgotpassword","forgotpassword").","), "," . "3" . ",") !== false || "3" == ""))  {
    if (!(false))  {
?>
              <span class="serverInvalidState" id="Security_Answer_ServerError">Please enter a value</span>
              <?php //WAFV_Conditional forgotpassword.php forgotpassword(3:)
    }
  }
}?>
          </div>
        </div>
        <span class="buttonFieldGroup" >
          <input id="Hidden_Field" name="Hidden_Field" type="hidden" value="<?php echo((isset($_GET["invalid"])?ValidatedField("forgotpassword","Hidden_Field"):"")); ?>">
          <input class="formButton" name="ForgotPassword_submit" type="submit" id="ForgotPassword_submit" value="Send"  onClick="clearAllServerErrors('ForgotPassword_Basic_Default')" tabindex="4">
        </span>
      </fieldset>
    </form>
  </div>
  <div id="ForgotPassword_Basic_Default_ProgressMessageWrapper" class="blockUIOverlay" style="display:none;">
    <script type="text/javascript">
WADFP_SetProgressToForm('ForgotPassword_Basic_Default', 'ForgotPassword_Basic_Default_ProgressMessageWrapper', WADFP_Theme_Options['BigSpin:Slate']);
  </script>
    <div id="ForgotPassword_Basic_Default_ProgressMessage" >
      <p style="margin:10px; padding:5px;" ><img src="webassist/progress_bar/images/slate-largespin.gif" alt="" title="" style="vertical-align:middle;" />&nbsp;&nbsp;Please wait</p>
    </div>
  </div>
</div>
<script src="webassist/forms/wa_servervalidation.js" type="text/javascript"></script>
<script src="webassist/jq_validation/jquery.h5validate.js"></script>
<script>
var ForgotPassword_Basic_Default_Opts = {
    focusout: true,
    focusin: false,
    change: false,
    keyup: false,
    popupClass: "Bloom",
    pointedAt: "left",
    fieldOffset: 10,
    fieldMargin: 2,
    position: "left",
    direction: "left",
    border: 1,
    offset: 25,
    closeText: "✖",
    percentWidth: 100,
    orientation: "bottom"
  };
function ForgotPassword_Basic_Default_Validate() {
    $("#ForgotPassword_Basic_Default").h5Validate(ForgotPassword_Basic_Default_Opts);
  }
$(document).ready(function () {
  ForgotPassword_Basic_Default_Validate()
  ConvertServerErrors(ForgotPassword_Basic_Default_Opts);
});
</script>



<script src="webassist/progress_bar/jquery-blockui-formprocessing.js" type="text/javascript"></script>
<link href="webassist/forms/fd_basic_default.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="webassist/jq_validation/Bloom.css">
<script src="//ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1/jquery-ui.min.js"></script>
<!-- InstanceEndEditable -->    
  </div>
  <div class="row">
    <div class="text-center col-md-6 col-md-offset-3">
      <h4>Footer </h4>
      <p>Copyright &copy; 2015 &middot; All Rights Reserved &middot; <a href="http://yourwebsite.com/" >My Website</a></p>
    </div>
  </div>
  <hr>
</div>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
<script src="js/jquery-1.11.3.min.js"></script>

<!-- Include all compiled plugins (below), or include individual files as needed --> 
<script src="js/bootstrap.js"></script>
</body>
<!-- InstanceEnd --></html>
