<?php require_once("webassist/security_assist/wa_hashencryption.php"); ?>
<?php require_once('Connections/ltu.php'); ?>
<?php require_once("webassist/form_validations/wavt_scripts_php.php"); ?>
<?php require_once("webassist/form_validations/wavt_validatedform_php.php"); ?>
<?php require_once('webassist/mysqli/authentication.php'); ?>
<?php require_once( "webassist/security_assist/helper_php.php" ); ?>
<?php 
 if ((isset($_POST["LogIn_submit"]) || isset($_POST["LogIn_submit_x"])))  {
   $WAFV_Redirect = "".($_SERVER["PHP_SELF"])  ."?invalid=true";
   $_SESSION['WAVT_login_Errors'] = "";
   if ($WAFV_Redirect == "")  {
     $WAFV_Redirect = $_SERVER["PHP_SELF"];
   }
   $WAFV_Errors = "";
   $WAFV_Errors .= WAValidateEM((isset($_POST["Log_In_group_Email"])?$_POST["Log_In_group_Email"]:"") . "",true,1);
  $WAFV_Errors .= WAValidateRQ((isset($_POST["Log_In_group_2_Password"])?$_POST["Log_In_group_2_Password"]:"") . "",true,2);
  $WAFV_Errors .= WAValidateEL((isset($_POST["Log_In_group_2_Password"])?$_POST["Log_In_group_2_Password"]:"") . "",6,500,true,3);

   if ($WAFV_Errors != "")  {
     PostResult($WAFV_Redirect,$WAFV_Errors,"login");
   }
 }
 ?>
<?php
$Authenticate = new WA_MySQLi_Auth($ltu);
$Authenticate->Action = "authenticate";
$Authenticate->Trigger = ($_SERVER["REQUEST_METHOD"] === "POST");
$Authenticate->Name = "authenticate";
$Authenticate->Table = "ps4_users";
$Authenticate->addFilter("UserEmail", "=", "s", "".((isset($_POST["Log_In_group_Email"]))?$_POST["Log_In_group_Email"]:"")  ."");
$Authenticate->addFilter("UserPassword", "=", "s", "".(WA_HashEncryption((isset($_POST["Log_In_group_2_Password"]))?$_POST["Log_In_group_2_Password"]:""))  ."");
$Authenticate->storeResult("UserID", "SecurityAssist_UserID");
$Authenticate->storeResult("UserEmail", "SecurityAssist_UserEmail");
$Authenticate->storeResult("UserFirstName", "SecurityAssist_UserFirstName");
$Authenticate->storeResult("UserLastName", "SecurityAssist_UserLastName");
$Authenticate->RememberMe = (isset($_POST["Log_In_group_3_Remember_my_information"]));
$Authenticate->SaveLogin = (isset($_POST["Log_In_group_4_Log_me_in_automatically"]));
$Authenticate->AutoLogin = true;
$Authenticate->AutoReturn = true;
$SuccessRedirect = "index.php";
$FailedRedirect = "login.php?failedLogin=1";
if (function_exists("rel2abs")) $SuccessRedirect = $SuccessRedirect?rel2abs($SuccessRedirect,dirname(__FILE__)):"";
if (function_exists("rel2abs")) $FailedRedirect = $FailedRedirect?rel2abs($FailedRedirect,dirname(__FILE__)):"";
$Authenticate->SuccessRedirect = $SuccessRedirect;
$Authenticate->FailRedirect = $FailedRedirect;
$Authenticate->execute();
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
<p>Invalid username or password</p>
<?php } // End Show Region ?>
<?php if(WA_Auth_RulePasses("Log in success")){ // Begin Show Region ?>
<p>You have been logged in</p>
<?php } // End Show Region ?>
<?php if(WA_Auth_RulePasses("Failed log in")){ // Begin Show Region ?>
<p>Invalid username or password</p>
<?php } // End Show Region ?>
<?php if(WA_Auth_RulePasses("Emailed password")){ // Begin Show Region ?>
<p>Password information emailed, please check your inbox</p>
<?php } // End Show Region ?>
<?php if(WA_Auth_RulePasses("Successful update")){ // Begin Show Region ?>
<p>Registration completed successfully, please log in to access the site</p>
<?php } // End Show Region ?>
<div id="LogInContainer" class="WAATK">
  <div id="LogIn_Basic_Default_ProgressWrapper">
    <form class="Basic_Default" id="LogIn_Basic_Default" name="LogIn_Basic_Default" method="post" action="login.php">
      <fieldset class="Basic_Default" id="Log_In">
        <legend class="groupHeader">Log In</legend>
        <span class="fieldsetDescription"> Required * </span>
        <div class="lineGroup">
          <label for="Log_In_group_Email" class="sublabel" > Email:<span class="requiredIndicator">&nbsp;*</span></label>
          <input id="Log_In_group_Email" name="Log_In_group_Email" type="text" value="<?php echo((isset($_GET["invalid"])?ValidatedField("login","Log_In_group_Email"):"".((isset($_COOKIE["RememberMe_UserEmail"]))?$_COOKIE["RememberMe_UserEmail"]:"")  ."")); ?>" class="formTextfield_Medium" tabindex="1" pattern="[^@]+@[^@]+\.[a-zA-Z]{2,6}" title="Please enter a value." required="true">
          <?php
if (ValidatedField('login','login'))  {
  if ((strpos((",".ValidatedField("login","login").","), "," . "1" . ",") !== false || "1" == ""))  {
    if (!(false))  {
?>
            <span class="serverInvalidState" id="Log_In_group_Email_ServerError">Please enter a value.</span>
            <?php //WAFV_Conditional login.php login(1:)
    }
  }
}?>
        </div>
        <div class="lineGroup">
          <label for="Log_In_group_2_Password" class="sublabel" > Password:<span class="requiredIndicator">&nbsp;*</span></label>
          <input id="Log_In_group_2_Password" name="Log_In_group_2_Password" type="password" value="" class="formPasswordfield_Medium" tabindex="2" title="Please enter a value." confirm="" required="true">
          <a href="forgotpassword.php">forgot password?</a>
          <?php
if (ValidatedField('login','login'))  {
  if ((strpos((",".ValidatedField("login","login").","), "," . "2" . ",") !== false || "2" == "") || (strpos((",".ValidatedField("login","login").","), "," . "3" . ",") !== false || "3" == ""))  {
    if (!(false))  {
?>
            <span class="serverInvalidState" id="Log_In_group_2_Password_ServerError">Please enter a value.</span>
            <?php //WAFV_Conditional login.php login(2,3:)
    }
  }
}?>
        </div>
        <div class="lineGroup">
          <label class="checklabel" for="Log_In_group_3_Remember_my_information">
            <input type="checkbox" name="Log_In_group_3_Remember_my_information" id="Log_In_group_3_Remember_my_information" value="1" class="formCheckboxField_Standard" <?php if (!(strcmp((isset($_GET["invalid"])?ValidatedField("login","Log_In_group_3_Remember_my_information"):"".(isset($_COOKIE["RememberMe_UserEmail"])?"1":"")  .""),"1"))) {echo "checked=\"checked\"";} ?> tabindex="3" title="Please enter a value">
            &nbsp;Remember my information</label>
        </div>
        <div class="lineGroup">
          <label class="checklabel" for="Log_In_group_4_Log_me_in_automatically">
            <input type="checkbox" name="Log_In_group_4_Log_me_in_automatically" id="Log_In_group_4_Log_me_in_automatically" value="1" class="formCheckboxField_Standard" <?php if (!(strcmp((isset($_GET["invalid"])?ValidatedField("login","Log_In_group_4_Log_me_in_automatically"):"".(isset($_COOKIE["AutoLogin_UserEmail"])?"1":"")  .""),"1"))) {echo "checked=\"checked\"";} ?> tabindex="4" title="Please enter a value">
            &nbsp;Log me in automatically</label>
        </div>
        <span class="buttonFieldGroup" >
          <input class="formButton" name="LogIn_submit" type="submit" id="LogIn_submit" value="Log In"  onClick="clearAllServerErrors('LogIn_Basic_Default')" tabindex="5">
        </span>
      </fieldset>
    </form>
  </div>
  <div id="LogIn_Basic_Default_ProgressMessageWrapper" class="blockUIOverlay" style="display:none;">
    <script type="text/javascript">
WADFP_SetProgressToForm('LogIn_Basic_Default', 'LogIn_Basic_Default_ProgressMessageWrapper', WADFP_Theme_Options['BigSpin:Slate']);
  </script>
    <div id="LogIn_Basic_Default_ProgressMessage" >
      <p style="margin:10px; padding:5px;" ><img src="webassist/progress_bar/images/slate-largespin.gif" alt="" title="" style="vertical-align:middle;" />&nbsp;&nbsp;Please wait</p>
    </div>
  </div>
</div>
<script src="webassist/forms/wa_servervalidation.js" type="text/javascript"></script>
<script src="webassist/jq_validation/jquery.h5validate.js"></script>
<script>
var LogIn_Basic_Default_Opts = {
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
function LogIn_Basic_Default_Validate() {
    $("#LogIn_Basic_Default").h5Validate(LogIn_Basic_Default_Opts);
  }
$(document).ready(function () {
  LogIn_Basic_Default_Validate()
  ConvertServerErrors(LogIn_Basic_Default_Opts);
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
