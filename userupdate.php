<?php require_once("webassist/security_assist/wa_hashencryption.php"); ?>
<?php require_once( "webassist/security_assist/helper_php.php" ); ?>
<?php
if (!WA_Auth_RulePasses("Logged in to ps4_users")){
	WA_Auth_RestrictAccess("login.php");
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
<wa_insertserverbehavior sb="loggedInPageAccess" />
<wa_insertserverbehavior sb="WebAssist/SecurityAssist/Set Cookies" />
<?php if(WA_Auth_RulePasses("Validated form")){ // Begin Show Region ?>
<p>Invalid information, please check your entries and try again.
  <wa_insertserverbehavior sb="uniqueValidationShowIf" field="0"> The value you entered for the Email field is already contained in our records. </wa_insertserverbehavior>
</p>
<?php } // End Show Region ?>
<?php if(WA_Auth_RulePasses("Successful update")){ // Begin Show Region ?>
<p>Information updated successfully</p>
<?php } // End Show Region ?>
<wa_insertserverbehavior sb="RecordSet" />
<wa_insertserverbehavior sb="Update" />
<div id="UpdateContainer" class="WAATK">
  <wa_insertserverbehavior sb="showRegion_notEmptyRS">
    <div id="UserUpdate_Basic_Default_ProgressWrapper">
      <form class="Basic_Default" id="UserUpdate_Basic_Default" name="UserUpdate_Basic_Default" method="post" action="userupdate.php">
        <fieldset class="Basic_Default" id="User_Update">
          <legend class="groupHeader">User Update</legend>
          <span class="fieldsetDescription"> Required * </span>
          <div class="lineGroup">
            <label for="User_Update_group_Email" class="sublabel" > Email:<span class="requiredIndicator">&nbsp;*</span></label>
            <input id="User_Update_group_Email" name="User_Update_group_Email" type="text" value="<?php echo((isset($_GET["invalid"])?ValidatedField("userupdate","User_Update_group_Email"):"".$SecurityAssistps4users->getColumnVal("UserEmail")  ."")); ?>" class="formTextfield_Medium" tabindex="1" pattern="[^@]+@[^@]+\.[a-zA-Z]{2,6}" title="Please enter a value." required="true">
            <?php
if (ValidatedField('userupdate','userupdate'))  {
  if ((strpos((",".ValidatedField("userupdate","userupdate").","), "," . "1" . ",") !== false || "1" == "") || (strpos((",".ValidatedField("userupdate","userupdate").","), "," . "2" . ",") !== false || "2" == ""))  {
    if (!(false))  {
?>
              <span class="serverInvalidState" id="User_Update_group_Email_ServerError">Please enter a value.</span>
              <?php //WAFV_Conditional userupdate.php userupdate(1,2:)
    }
  }
}?>
          </div>
          <div class="lineGroup">
            <label for="User_Update_group_2_Password" class="sublabel" > Password:</label>
            <input id="User_Update_group_2_Password" name="User_Update_group_2_Password" type="password" value="" class="formPasswordfield_Medium" tabindex="2" title="Password strength requirement not met. @@strengthmessage@@" confirm="">
            <?php
if (ValidatedField('userupdate','userupdate'))  {
  if ((strpos((",".ValidatedField("userupdate","userupdate").","), "," . "3" . ",") !== false || "3" == ""))  {
    if (!(false))  {
?>
              <span class="serverInvalidState" id="User_Update_group_2_Password_ServerError">Password strength requirement not met. @@strengthmessage@@</span>
              <?php //WAFV_Conditional userupdate.php userupdate(3:)
    }
  }
}?>
          </div>
          <div class="lineGroup">
            <label for="User_Update_group_3_Confirm" class="sublabel" > Confirm:</label>
            <input id="User_Update_group_3_Confirm" name="User_Update_group_3_Confirm" type="password" value="" class="formPasswordfield_Medium" tabindex="3" title="A value is required." confirm="User_Update_group_2_Password">
            <?php
if (ValidatedField('userupdate','userupdate'))  {
  if ((strpos((",".ValidatedField("userupdate","userupdate").","), "," . "4" . ",") !== false || "4" == ""))  {
    if (!(false))  {
?>
              <span class="serverInvalidState" id="User_Update_group_3_Confirm_ServerError">A value is required.</span>
              <?php //WAFV_Conditional userupdate.php userupdate(4:)
    }
  }
}?>
          </div>
          <div class="lineGroup">
            <label for="User_Update_group_4_First_Name" class="sublabel" > First Name:<span class="requiredIndicator">&nbsp;*</span></label>
            <input id="User_Update_group_4_First_Name" name="User_Update_group_4_First_Name" type="text" value="<?php echo((isset($_GET["invalid"])?ValidatedField("userupdate","User_Update_group_4_First_Name"):"".$SecurityAssistps4users->getColumnVal("UserFirstName")  ."")); ?>" class="formTextfield_Medium" tabindex="4" title="Please enter a value." required="true">
            <?php
if (ValidatedField('userupdate','userupdate'))  {
  if ((strpos((",".ValidatedField("userupdate","userupdate").","), "," . "5" . ",") !== false || "5" == ""))  {
    if (!(false))  {
?>
              <span class="serverInvalidState" id="User_Update_group_4_First_Name_ServerError">Please enter a value.</span>
              <?php //WAFV_Conditional userupdate.php userupdate(5:)
    }
  }
}?>
          </div>
          <div class="lineGroup">
            <label for="User_Update_group_5_Last_Name" class="sublabel" > Last Name:<span class="requiredIndicator">&nbsp;*</span></label>
            <input id="User_Update_group_5_Last_Name" name="User_Update_group_5_Last_Name" type="text" value="<?php echo((isset($_GET["invalid"])?ValidatedField("userupdate","User_Update_group_5_Last_Name"):"".$SecurityAssistps4users->getColumnVal("UserLastName")  ."")); ?>" class="formTextfield_Medium" tabindex="5" title="Please enter a value." required="true">
            <?php
if (ValidatedField('userupdate','userupdate'))  {
  if ((strpos((",".ValidatedField("userupdate","userupdate").","), "," . "6" . ",") !== false || "6" == ""))  {
    if (!(false))  {
?>
              <span class="serverInvalidState" id="User_Update_group_5_Last_Name_ServerError">Please enter a value.</span>
              <?php //WAFV_Conditional userupdate.php userupdate(6:)
    }
  }
}?>
          </div>
          <div class="lineGroup">
            <label for="User_Update_group_6_Address" class="sublabel" > Address:<span class="requiredIndicator">&nbsp;*</span></label>
            <input id="User_Update_group_6_Address" name="User_Update_group_6_Address" type="text" value="<?php echo((isset($_GET["invalid"])?ValidatedField("userupdate","User_Update_group_6_Address"):"".$SecurityAssistps4users->getColumnVal("UserAddress")  ."")); ?>" class="formTextfield_Medium" tabindex="6" title="Please enter a value." required="true">
            <?php
if (ValidatedField('userupdate','userupdate'))  {
  if ((strpos((",".ValidatedField("userupdate","userupdate").","), "," . "7" . ",") !== false || "7" == ""))  {
    if (!(false))  {
?>
              <span class="serverInvalidState" id="User_Update_group_6_Address_ServerError">Please enter a value.</span>
              <?php //WAFV_Conditional userupdate.php userupdate(7:)
    }
  }
}?>
          </div>
          <div class="lineGroup">
            <label for="User_Update_group_7_Address_2" class="sublabel" > Address 2:<span class="requiredIndicator">&nbsp;*</span></label>
            <input id="User_Update_group_7_Address_2" name="User_Update_group_7_Address_2" type="text" value="<?php echo((isset($_GET["invalid"])?ValidatedField("userupdate","User_Update_group_7_Address_2"):"".$SecurityAssistps4users->getColumnVal("UserAddress2")  ."")); ?>" class="formTextfield_Medium" tabindex="7" title="Please enter a value." required="true">
            <?php
if (ValidatedField('userupdate','userupdate'))  {
  if ((strpos((",".ValidatedField("userupdate","userupdate").","), "," . "8" . ",") !== false || "8" == ""))  {
    if (!(false))  {
?>
              <span class="serverInvalidState" id="User_Update_group_7_Address_2_ServerError">Please enter a value.</span>
              <?php //WAFV_Conditional userupdate.php userupdate(8:)
    }
  }
}?>
          </div>
          <div class="lineGroup">
            <label for="User_Update_group_8_City" class="sublabel" > City:<span class="requiredIndicator">&nbsp;*</span></label>
            <input id="User_Update_group_8_City" name="User_Update_group_8_City" type="text" value="<?php echo((isset($_GET["invalid"])?ValidatedField("userupdate","User_Update_group_8_City"):"".$SecurityAssistps4users->getColumnVal("UserCity")  ."")); ?>" class="formTextfield_Medium" tabindex="8" title="Please enter a value." required="true">
            <?php
if (ValidatedField('userupdate','userupdate'))  {
  if ((strpos((",".ValidatedField("userupdate","userupdate").","), "," . "9" . ",") !== false || "9" == ""))  {
    if (!(false))  {
?>
              <span class="serverInvalidState" id="User_Update_group_8_City_ServerError">Please enter a value.</span>
              <?php //WAFV_Conditional userupdate.php userupdate(9:)
    }
  }
}?>
          </div>
          <div class="lineGroup">
            <label for="User_Update_group_9_State" class="sublabel" > State:<span class="requiredIndicator">&nbsp;*</span></label>
            <input id="User_Update_group_9_State" name="User_Update_group_9_State" type="text" value="<?php echo((isset($_GET["invalid"])?ValidatedField("userupdate","User_Update_group_9_State"):"".$SecurityAssistps4users->getColumnVal("UserState")  ."")); ?>" class="formTextfield_Medium" tabindex="9" title="Please enter a value." required="true">
            <?php
if (ValidatedField('userupdate','userupdate'))  {
  if ((strpos((",".ValidatedField("userupdate","userupdate").","), "," . "10" . ",") !== false || "10" == ""))  {
    if (!(false))  {
?>
              <span class="serverInvalidState" id="User_Update_group_9_State_ServerError">Please enter a value.</span>
              <?php //WAFV_Conditional userupdate.php userupdate(10:)
    }
  }
}?>
          </div>
          <div class="lineGroup">
            <label for="User_Update_group_10_Zip" class="sublabel" > Zip:<span class="requiredIndicator">&nbsp;*</span></label>
            <input id="User_Update_group_10_Zip" name="User_Update_group_10_Zip" type="text" value="<?php echo((isset($_GET["invalid"])?ValidatedField("userupdate","User_Update_group_10_Zip"):"".$SecurityAssistps4users->getColumnVal("UserZip")  ."")); ?>" class="formTextfield_Medium" tabindex="10" title="Please enter a value." required="true">
            <?php
if (ValidatedField('userupdate','userupdate'))  {
  if ((strpos((",".ValidatedField("userupdate","userupdate").","), "," . "11" . ",") !== false || "11" == ""))  {
    if (!(false))  {
?>
              <span class="serverInvalidState" id="User_Update_group_10_Zip_ServerError">Please enter a value.</span>
              <?php //WAFV_Conditional userupdate.php userupdate(11:)
    }
  }
}?>
          </div>
          <div class="lineGroup">
            <label for="User_Update_group_11_Country" class="sublabel" > Country:</label>
            <select class="formMenufield_Medium" name="User_Update_group_11_Country" id="User_Update_group_11_Country" rel="<?php echo((isset($_GET["invalid"])?ValidatedField("userupdate","User_Update_group_11_Country"):"".$SecurityAssistps4users->getColumnVal("UserCountry")  ."")); ?>" tabindex="11" title="Please enter a value.">
              <option value="United States" <?php if (!(strcmp("United States", (isset($_GET["invalid"])?ValidatedField("userupdate","User_Update_group_11_Country"):"")))) {echo "selected=\"selected\"";} ?>>United States</option>
              <option value="United Kingdom" <?php if (!(strcmp("United Kingdom", (isset($_GET["invalid"])?ValidatedField("userupdate","User_Update_group_11_Country"):"")))) {echo "selected=\"selected\"";} ?>>United Kingdom</option>
              <option value="Afghanistan" <?php if (!(strcmp("Afghanistan", (isset($_GET["invalid"])?ValidatedField("userupdate","User_Update_group_11_Country"):"")))) {echo "selected=\"selected\"";} ?>>Afghanistan</option>
              <option value="Albania" <?php if (!(strcmp("Albania", (isset($_GET["invalid"])?ValidatedField("userupdate","User_Update_group_11_Country"):"")))) {echo "selected=\"selected\"";} ?>>Albania</option>
              <option value="Algeria" <?php if (!(strcmp("Algeria", (isset($_GET["invalid"])?ValidatedField("userupdate","User_Update_group_11_Country"):"")))) {echo "selected=\"selected\"";} ?>>Algeria</option>
              <option value="American Samoa" <?php if (!(strcmp("American Samoa", (isset($_GET["invalid"])?ValidatedField("userupdate","User_Update_group_11_Country"):"")))) {echo "selected=\"selected\"";} ?>>American Samoa</option>
              <option value="Andorra" <?php if (!(strcmp("Andorra", (isset($_GET["invalid"])?ValidatedField("userupdate","User_Update_group_11_Country"):"")))) {echo "selected=\"selected\"";} ?>>Andorra</option>
              <option value="Angola" <?php if (!(strcmp("Angola", (isset($_GET["invalid"])?ValidatedField("userupdate","User_Update_group_11_Country"):"")))) {echo "selected=\"selected\"";} ?>>Angola</option>
              <option value="Anguilla" <?php if (!(strcmp("Anguilla", (isset($_GET["invalid"])?ValidatedField("userupdate","User_Update_group_11_Country"):"")))) {echo "selected=\"selected\"";} ?>>Anguilla</option>
              <option value="Antarctica" <?php if (!(strcmp("Antarctica", (isset($_GET["invalid"])?ValidatedField("userupdate","User_Update_group_11_Country"):"")))) {echo "selected=\"selected\"";} ?>>Antarctica</option>
              <option value="Antigua and Barbuda" <?php if (!(strcmp("Antigua and Barbuda", (isset($_GET["invalid"])?ValidatedField("userupdate","User_Update_group_11_Country"):"")))) {echo "selected=\"selected\"";} ?>>Antigua and Barbuda</option>
              <option value="Argentina" <?php if (!(strcmp("Argentina", (isset($_GET["invalid"])?ValidatedField("userupdate","User_Update_group_11_Country"):"")))) {echo "selected=\"selected\"";} ?>>Argentina</option>
              <option value="Armenia" <?php if (!(strcmp("Armenia", (isset($_GET["invalid"])?ValidatedField("userupdate","User_Update_group_11_Country"):"")))) {echo "selected=\"selected\"";} ?>>Armenia</option>
              <option value="Aruba" <?php if (!(strcmp("Aruba", (isset($_GET["invalid"])?ValidatedField("userupdate","User_Update_group_11_Country"):"")))) {echo "selected=\"selected\"";} ?>>Aruba</option>
              <option value="Australia" <?php if (!(strcmp("Australia", (isset($_GET["invalid"])?ValidatedField("userupdate","User_Update_group_11_Country"):"")))) {echo "selected=\"selected\"";} ?>>Australia</option>
              <option value="Austria" <?php if (!(strcmp("Austria", (isset($_GET["invalid"])?ValidatedField("userupdate","User_Update_group_11_Country"):"")))) {echo "selected=\"selected\"";} ?>>Austria</option>
              <option value="Azerbaijan" <?php if (!(strcmp("Azerbaijan", (isset($_GET["invalid"])?ValidatedField("userupdate","User_Update_group_11_Country"):"")))) {echo "selected=\"selected\"";} ?>>Azerbaijan</option>
              <option value="Bahamas" <?php if (!(strcmp("Bahamas", (isset($_GET["invalid"])?ValidatedField("userupdate","User_Update_group_11_Country"):"")))) {echo "selected=\"selected\"";} ?>>Bahamas</option>
              <option value="Bahrain" <?php if (!(strcmp("Bahrain", (isset($_GET["invalid"])?ValidatedField("userupdate","User_Update_group_11_Country"):"")))) {echo "selected=\"selected\"";} ?>>Bahrain</option>
              <option value="Bangladesh" <?php if (!(strcmp("Bangladesh", (isset($_GET["invalid"])?ValidatedField("userupdate","User_Update_group_11_Country"):"")))) {echo "selected=\"selected\"";} ?>>Bangladesh</option>
              <option value="Barbados" <?php if (!(strcmp("Barbados", (isset($_GET["invalid"])?ValidatedField("userupdate","User_Update_group_11_Country"):"")))) {echo "selected=\"selected\"";} ?>>Barbados</option>
              <option value="Belarus" <?php if (!(strcmp("Belarus", (isset($_GET["invalid"])?ValidatedField("userupdate","User_Update_group_11_Country"):"")))) {echo "selected=\"selected\"";} ?>>Belarus</option>
              <option value="Belgium" <?php if (!(strcmp("Belgium", (isset($_GET["invalid"])?ValidatedField("userupdate","User_Update_group_11_Country"):"")))) {echo "selected=\"selected\"";} ?>>Belgium</option>
              <option value="Belize" <?php if (!(strcmp("Belize", (isset($_GET["invalid"])?ValidatedField("userupdate","User_Update_group_11_Country"):"")))) {echo "selected=\"selected\"";} ?>>Belize</option>
              <option value="Benin" <?php if (!(strcmp("Benin", (isset($_GET["invalid"])?ValidatedField("userupdate","User_Update_group_11_Country"):"")))) {echo "selected=\"selected\"";} ?>>Benin</option>
              <option value="Bermuda" <?php if (!(strcmp("Bermuda", (isset($_GET["invalid"])?ValidatedField("userupdate","User_Update_group_11_Country"):"")))) {echo "selected=\"selected\"";} ?>>Bermuda</option>
              <option value="Bhutan" <?php if (!(strcmp("Bhutan", (isset($_GET["invalid"])?ValidatedField("userupdate","User_Update_group_11_Country"):"")))) {echo "selected=\"selected\"";} ?>>Bhutan</option>
              <option value="Bolivia" <?php if (!(strcmp("Bolivia", (isset($_GET["invalid"])?ValidatedField("userupdate","User_Update_group_11_Country"):"")))) {echo "selected=\"selected\"";} ?>>Bolivia</option>
              <option value="Bosnia and Herzegovina" <?php if (!(strcmp("Bosnia and Herzegovina", (isset($_GET["invalid"])?ValidatedField("userupdate","User_Update_group_11_Country"):"")))) {echo "selected=\"selected\"";} ?>>Bosnia and Herzegovina</option>
              <option value="Botswana" <?php if (!(strcmp("Botswana", (isset($_GET["invalid"])?ValidatedField("userupdate","User_Update_group_11_Country"):"")))) {echo "selected=\"selected\"";} ?>>Botswana</option>
              <option value="Bouvet Island" <?php if (!(strcmp("Bouvet Island", (isset($_GET["invalid"])?ValidatedField("userupdate","User_Update_group_11_Country"):"")))) {echo "selected=\"selected\"";} ?>>Bouvet Island</option>
              <option value="Brazil" <?php if (!(strcmp("Brazil", (isset($_GET["invalid"])?ValidatedField("userupdate","User_Update_group_11_Country"):"")))) {echo "selected=\"selected\"";} ?>>Brazil</option>
              <option value="British Indian Ocean Territory" <?php if (!(strcmp("British Indian Ocean Territory", (isset($_GET["invalid"])?ValidatedField("userupdate","User_Update_group_11_Country"):"")))) {echo "selected=\"selected\"";} ?>>British Indian Ocean Territory</option>
              <option value="Brunei Darussalam" <?php if (!(strcmp("Brunei Darussalam", (isset($_GET["invalid"])?ValidatedField("userupdate","User_Update_group_11_Country"):"")))) {echo "selected=\"selected\"";} ?>>Brunei Darussalam</option>
              <option value="Bulgaria" <?php if (!(strcmp("Bulgaria", (isset($_GET["invalid"])?ValidatedField("userupdate","User_Update_group_11_Country"):"")))) {echo "selected=\"selected\"";} ?>>Bulgaria</option>
              <option value="Burkina Faso" <?php if (!(strcmp("Burkina Faso", (isset($_GET["invalid"])?ValidatedField("userupdate","User_Update_group_11_Country"):"")))) {echo "selected=\"selected\"";} ?>>Burkina Faso</option>
              <option value="Burundi" <?php if (!(strcmp("Burundi", (isset($_GET["invalid"])?ValidatedField("userupdate","User_Update_group_11_Country"):"")))) {echo "selected=\"selected\"";} ?>>Burundi</option>
              <option value="Cambodia" <?php if (!(strcmp("Cambodia", (isset($_GET["invalid"])?ValidatedField("userupdate","User_Update_group_11_Country"):"")))) {echo "selected=\"selected\"";} ?>>Cambodia</option>
              <option value="Cameroon" <?php if (!(strcmp("Cameroon", (isset($_GET["invalid"])?ValidatedField("userupdate","User_Update_group_11_Country"):"")))) {echo "selected=\"selected\"";} ?>>Cameroon</option>
              <option value="Canada" <?php if (!(strcmp("Canada", (isset($_GET["invalid"])?ValidatedField("userupdate","User_Update_group_11_Country"):"")))) {echo "selected=\"selected\"";} ?>>Canada</option>
              <option value="Cape Verde" <?php if (!(strcmp("Cape Verde", (isset($_GET["invalid"])?ValidatedField("userupdate","User_Update_group_11_Country"):"")))) {echo "selected=\"selected\"";} ?>>Cape Verde</option>
              <option value="Cayman Islands" <?php if (!(strcmp("Cayman Islands", (isset($_GET["invalid"])?ValidatedField("userupdate","User_Update_group_11_Country"):"")))) {echo "selected=\"selected\"";} ?>>Cayman Islands</option>
              <option value="Central African Republic" <?php if (!(strcmp("Central African Republic", (isset($_GET["invalid"])?ValidatedField("userupdate","User_Update_group_11_Country"):"")))) {echo "selected=\"selected\"";} ?>>Central African Republic</option>
              <option value="Chad" <?php if (!(strcmp("Chad", (isset($_GET["invalid"])?ValidatedField("userupdate","User_Update_group_11_Country"):"")))) {echo "selected=\"selected\"";} ?>>Chad</option>
              <option value="Chile" <?php if (!(strcmp("Chile", (isset($_GET["invalid"])?ValidatedField("userupdate","User_Update_group_11_Country"):"")))) {echo "selected=\"selected\"";} ?>>Chile</option>
              <option value="China" <?php if (!(strcmp("China", (isset($_GET["invalid"])?ValidatedField("userupdate","User_Update_group_11_Country"):"")))) {echo "selected=\"selected\"";} ?>>China</option>
              <option value="Christmas Island" <?php if (!(strcmp("Christmas Island", (isset($_GET["invalid"])?ValidatedField("userupdate","User_Update_group_11_Country"):"")))) {echo "selected=\"selected\"";} ?>>Christmas Island</option>
              <option value="Cocos (Keeling) Islands" <?php if (!(strcmp("Cocos (Keeling) Islands", (isset($_GET["invalid"])?ValidatedField("userupdate","User_Update_group_11_Country"):"")))) {echo "selected=\"selected\"";} ?>>Cocos (Keeling) Islands</option>
              <option value="Colombia" <?php if (!(strcmp("Colombia", (isset($_GET["invalid"])?ValidatedField("userupdate","User_Update_group_11_Country"):"")))) {echo "selected=\"selected\"";} ?>>Colombia</option>
              <option value="Comoros" <?php if (!(strcmp("Comoros", (isset($_GET["invalid"])?ValidatedField("userupdate","User_Update_group_11_Country"):"")))) {echo "selected=\"selected\"";} ?>>Comoros</option>
              <option value="Congo" <?php if (!(strcmp("Congo", (isset($_GET["invalid"])?ValidatedField("userupdate","User_Update_group_11_Country"):"")))) {echo "selected=\"selected\"";} ?>>Congo</option>
              <option value="Congo, The Democratic Republic of The" <?php if (!(strcmp("Congo, The Democratic Republic of The", (isset($_GET["invalid"])?ValidatedField("userupdate","User_Update_group_11_Country"):"")))) {echo "selected=\"selected\"";} ?>>Congo, The Democratic Republic of The</option>
              <option value="Cook Islands" <?php if (!(strcmp("Cook Islands", (isset($_GET["invalid"])?ValidatedField("userupdate","User_Update_group_11_Country"):"")))) {echo "selected=\"selected\"";} ?>>Cook Islands</option>
              <option value="Costa Rica" <?php if (!(strcmp("Costa Rica", (isset($_GET["invalid"])?ValidatedField("userupdate","User_Update_group_11_Country"):"")))) {echo "selected=\"selected\"";} ?>>Costa Rica</option>
              <option value="Cote D'ivoire" <?php if (!(strcmp("Cote D'ivoire", (isset($_GET["invalid"])?ValidatedField("userupdate","User_Update_group_11_Country"):"")))) {echo "selected=\"selected\"";} ?>>Cote D'ivoire</option>
              <option value="Croatia" <?php if (!(strcmp("Croatia", (isset($_GET["invalid"])?ValidatedField("userupdate","User_Update_group_11_Country"):"")))) {echo "selected=\"selected\"";} ?>>Croatia</option>
              <option value="Cuba" <?php if (!(strcmp("Cuba", (isset($_GET["invalid"])?ValidatedField("userupdate","User_Update_group_11_Country"):"")))) {echo "selected=\"selected\"";} ?>>Cuba</option>
              <option value="Cyprus" <?php if (!(strcmp("Cyprus", (isset($_GET["invalid"])?ValidatedField("userupdate","User_Update_group_11_Country"):"")))) {echo "selected=\"selected\"";} ?>>Cyprus</option>
              <option value="Czech Republic" <?php if (!(strcmp("Czech Republic", (isset($_GET["invalid"])?ValidatedField("userupdate","User_Update_group_11_Country"):"")))) {echo "selected=\"selected\"";} ?>>Czech Republic</option>
              <option value="Denmark" <?php if (!(strcmp("Denmark", (isset($_GET["invalid"])?ValidatedField("userupdate","User_Update_group_11_Country"):"")))) {echo "selected=\"selected\"";} ?>>Denmark</option>
              <option value="Djibouti" <?php if (!(strcmp("Djibouti", (isset($_GET["invalid"])?ValidatedField("userupdate","User_Update_group_11_Country"):"")))) {echo "selected=\"selected\"";} ?>>Djibouti</option>
              <option value="Dominica" <?php if (!(strcmp("Dominica", (isset($_GET["invalid"])?ValidatedField("userupdate","User_Update_group_11_Country"):"")))) {echo "selected=\"selected\"";} ?>>Dominica</option>
              <option value="Dominican Republic" <?php if (!(strcmp("Dominican Republic", (isset($_GET["invalid"])?ValidatedField("userupdate","User_Update_group_11_Country"):"")))) {echo "selected=\"selected\"";} ?>>Dominican Republic</option>
              <option value="Ecuador" <?php if (!(strcmp("Ecuador", (isset($_GET["invalid"])?ValidatedField("userupdate","User_Update_group_11_Country"):"")))) {echo "selected=\"selected\"";} ?>>Ecuador</option>
              <option value="Egypt" <?php if (!(strcmp("Egypt", (isset($_GET["invalid"])?ValidatedField("userupdate","User_Update_group_11_Country"):"")))) {echo "selected=\"selected\"";} ?>>Egypt</option>
              <option value="El Salvador" <?php if (!(strcmp("El Salvador", (isset($_GET["invalid"])?ValidatedField("userupdate","User_Update_group_11_Country"):"")))) {echo "selected=\"selected\"";} ?>>El Salvador</option>
              <option value="Equatorial Guinea" <?php if (!(strcmp("Equatorial Guinea", (isset($_GET["invalid"])?ValidatedField("userupdate","User_Update_group_11_Country"):"")))) {echo "selected=\"selected\"";} ?>>Equatorial Guinea</option>
              <option value="Eritrea" <?php if (!(strcmp("Eritrea", (isset($_GET["invalid"])?ValidatedField("userupdate","User_Update_group_11_Country"):"")))) {echo "selected=\"selected\"";} ?>>Eritrea</option>
              <option value="Estonia" <?php if (!(strcmp("Estonia", (isset($_GET["invalid"])?ValidatedField("userupdate","User_Update_group_11_Country"):"")))) {echo "selected=\"selected\"";} ?>>Estonia</option>
              <option value="Ethiopia" <?php if (!(strcmp("Ethiopia", (isset($_GET["invalid"])?ValidatedField("userupdate","User_Update_group_11_Country"):"")))) {echo "selected=\"selected\"";} ?>>Ethiopia</option>
              <option value="Falkland Islands (Malvinas)" <?php if (!(strcmp("Falkland Islands (Malvinas)", (isset($_GET["invalid"])?ValidatedField("userupdate","User_Update_group_11_Country"):"")))) {echo "selected=\"selected\"";} ?>>Falkland Islands (Malvinas)</option>
              <option value="Faroe Islands" <?php if (!(strcmp("Faroe Islands", (isset($_GET["invalid"])?ValidatedField("userupdate","User_Update_group_11_Country"):"")))) {echo "selected=\"selected\"";} ?>>Faroe Islands</option>
              <option value="Fiji" <?php if (!(strcmp("Fiji", (isset($_GET["invalid"])?ValidatedField("userupdate","User_Update_group_11_Country"):"")))) {echo "selected=\"selected\"";} ?>>Fiji</option>
              <option value="Finland" <?php if (!(strcmp("Finland", (isset($_GET["invalid"])?ValidatedField("userupdate","User_Update_group_11_Country"):"")))) {echo "selected=\"selected\"";} ?>>Finland</option>
              <option value="France" <?php if (!(strcmp("France", (isset($_GET["invalid"])?ValidatedField("userupdate","User_Update_group_11_Country"):"")))) {echo "selected=\"selected\"";} ?>>France</option>
              <option value="French Guiana" <?php if (!(strcmp("French Guiana", (isset($_GET["invalid"])?ValidatedField("userupdate","User_Update_group_11_Country"):"")))) {echo "selected=\"selected\"";} ?>>French Guiana</option>
              <option value="French Polynesia" <?php if (!(strcmp("French Polynesia", (isset($_GET["invalid"])?ValidatedField("userupdate","User_Update_group_11_Country"):"")))) {echo "selected=\"selected\"";} ?>>French Polynesia</option>
              <option value="French Southern Territories" <?php if (!(strcmp("French Southern Territories", (isset($_GET["invalid"])?ValidatedField("userupdate","User_Update_group_11_Country"):"")))) {echo "selected=\"selected\"";} ?>>French Southern Territories</option>
              <option value="Gabon" <?php if (!(strcmp("Gabon", (isset($_GET["invalid"])?ValidatedField("userupdate","User_Update_group_11_Country"):"")))) {echo "selected=\"selected\"";} ?>>Gabon</option>
              <option value="Gambia" <?php if (!(strcmp("Gambia", (isset($_GET["invalid"])?ValidatedField("userupdate","User_Update_group_11_Country"):"")))) {echo "selected=\"selected\"";} ?>>Gambia</option>
              <option value="Georgia" <?php if (!(strcmp("Georgia", (isset($_GET["invalid"])?ValidatedField("userupdate","User_Update_group_11_Country"):"")))) {echo "selected=\"selected\"";} ?>>Georgia</option>
              <option value="Germany" <?php if (!(strcmp("Germany", (isset($_GET["invalid"])?ValidatedField("userupdate","User_Update_group_11_Country"):"")))) {echo "selected=\"selected\"";} ?>>Germany</option>
              <option value="Ghana" <?php if (!(strcmp("Ghana", (isset($_GET["invalid"])?ValidatedField("userupdate","User_Update_group_11_Country"):"")))) {echo "selected=\"selected\"";} ?>>Ghana</option>
              <option value="Gibraltar" <?php if (!(strcmp("Gibraltar", (isset($_GET["invalid"])?ValidatedField("userupdate","User_Update_group_11_Country"):"")))) {echo "selected=\"selected\"";} ?>>Gibraltar</option>
              <option value="Greece" <?php if (!(strcmp("Greece", (isset($_GET["invalid"])?ValidatedField("userupdate","User_Update_group_11_Country"):"")))) {echo "selected=\"selected\"";} ?>>Greece</option>
              <option value="Greenland" <?php if (!(strcmp("Greenland", (isset($_GET["invalid"])?ValidatedField("userupdate","User_Update_group_11_Country"):"")))) {echo "selected=\"selected\"";} ?>>Greenland</option>
              <option value="Grenada" <?php if (!(strcmp("Grenada", (isset($_GET["invalid"])?ValidatedField("userupdate","User_Update_group_11_Country"):"")))) {echo "selected=\"selected\"";} ?>>Grenada</option>
              <option value="Guadeloupe" <?php if (!(strcmp("Guadeloupe", (isset($_GET["invalid"])?ValidatedField("userupdate","User_Update_group_11_Country"):"")))) {echo "selected=\"selected\"";} ?>>Guadeloupe</option>
              <option value="Guam" <?php if (!(strcmp("Guam", (isset($_GET["invalid"])?ValidatedField("userupdate","User_Update_group_11_Country"):"")))) {echo "selected=\"selected\"";} ?>>Guam</option>
              <option value="Guatemala" <?php if (!(strcmp("Guatemala", (isset($_GET["invalid"])?ValidatedField("userupdate","User_Update_group_11_Country"):"")))) {echo "selected=\"selected\"";} ?>>Guatemala</option>
              <option value="Guinea" <?php if (!(strcmp("Guinea", (isset($_GET["invalid"])?ValidatedField("userupdate","User_Update_group_11_Country"):"")))) {echo "selected=\"selected\"";} ?>>Guinea</option>
              <option value="Guinea-bissau" <?php if (!(strcmp("Guinea-bissau", (isset($_GET["invalid"])?ValidatedField("userupdate","User_Update_group_11_Country"):"")))) {echo "selected=\"selected\"";} ?>>Guinea-bissau</option>
              <option value="Guyana" <?php if (!(strcmp("Guyana", (isset($_GET["invalid"])?ValidatedField("userupdate","User_Update_group_11_Country"):"")))) {echo "selected=\"selected\"";} ?>>Guyana</option>
              <option value="Haiti" <?php if (!(strcmp("Haiti", (isset($_GET["invalid"])?ValidatedField("userupdate","User_Update_group_11_Country"):"")))) {echo "selected=\"selected\"";} ?>>Haiti</option>
              <option value="Heard Island and Mcdonald Islands" <?php if (!(strcmp("Heard Island and Mcdonald Islands", (isset($_GET["invalid"])?ValidatedField("userupdate","User_Update_group_11_Country"):"")))) {echo "selected=\"selected\"";} ?>>Heard Island and Mcdonald Islands</option>
              <option value="Holy See (Vatican City State)" <?php if (!(strcmp("Holy See (Vatican City State)", (isset($_GET["invalid"])?ValidatedField("userupdate","User_Update_group_11_Country"):"")))) {echo "selected=\"selected\"";} ?>>Holy See (Vatican City State)</option>
              <option value="Honduras" <?php if (!(strcmp("Honduras", (isset($_GET["invalid"])?ValidatedField("userupdate","User_Update_group_11_Country"):"")))) {echo "selected=\"selected\"";} ?>>Honduras</option>
              <option value="Hong Kong" <?php if (!(strcmp("Hong Kong", (isset($_GET["invalid"])?ValidatedField("userupdate","User_Update_group_11_Country"):"")))) {echo "selected=\"selected\"";} ?>>Hong Kong</option>
              <option value="Hungary" <?php if (!(strcmp("Hungary", (isset($_GET["invalid"])?ValidatedField("userupdate","User_Update_group_11_Country"):"")))) {echo "selected=\"selected\"";} ?>>Hungary</option>
              <option value="Iceland" <?php if (!(strcmp("Iceland", (isset($_GET["invalid"])?ValidatedField("userupdate","User_Update_group_11_Country"):"")))) {echo "selected=\"selected\"";} ?>>Iceland</option>
              <option value="India" <?php if (!(strcmp("India", (isset($_GET["invalid"])?ValidatedField("userupdate","User_Update_group_11_Country"):"")))) {echo "selected=\"selected\"";} ?>>India</option>
              <option value="Indonesia" <?php if (!(strcmp("Indonesia", (isset($_GET["invalid"])?ValidatedField("userupdate","User_Update_group_11_Country"):"")))) {echo "selected=\"selected\"";} ?>>Indonesia</option>
              <option value="Iran, Islamic Republic of" <?php if (!(strcmp("Iran, Islamic Republic of", (isset($_GET["invalid"])?ValidatedField("userupdate","User_Update_group_11_Country"):"")))) {echo "selected=\"selected\"";} ?>>Iran, Islamic Republic of</option>
              <option value="Iraq" <?php if (!(strcmp("Iraq", (isset($_GET["invalid"])?ValidatedField("userupdate","User_Update_group_11_Country"):"")))) {echo "selected=\"selected\"";} ?>>Iraq</option>
              <option value="Ireland" <?php if (!(strcmp("Ireland", (isset($_GET["invalid"])?ValidatedField("userupdate","User_Update_group_11_Country"):"")))) {echo "selected=\"selected\"";} ?>>Ireland</option>
              <option value="Israel" <?php if (!(strcmp("Israel", (isset($_GET["invalid"])?ValidatedField("userupdate","User_Update_group_11_Country"):"")))) {echo "selected=\"selected\"";} ?>>Israel</option>
              <option value="Italy" <?php if (!(strcmp("Italy", (isset($_GET["invalid"])?ValidatedField("userupdate","User_Update_group_11_Country"):"")))) {echo "selected=\"selected\"";} ?>>Italy</option>
              <option value="Jamaica" <?php if (!(strcmp("Jamaica", (isset($_GET["invalid"])?ValidatedField("userupdate","User_Update_group_11_Country"):"")))) {echo "selected=\"selected\"";} ?>>Jamaica</option>
              <option value="Japan" <?php if (!(strcmp("Japan", (isset($_GET["invalid"])?ValidatedField("userupdate","User_Update_group_11_Country"):"")))) {echo "selected=\"selected\"";} ?>>Japan</option>
              <option value="Jordan" <?php if (!(strcmp("Jordan", (isset($_GET["invalid"])?ValidatedField("userupdate","User_Update_group_11_Country"):"")))) {echo "selected=\"selected\"";} ?>>Jordan</option>
              <option value="Kazakhstan" <?php if (!(strcmp("Kazakhstan", (isset($_GET["invalid"])?ValidatedField("userupdate","User_Update_group_11_Country"):"")))) {echo "selected=\"selected\"";} ?>>Kazakhstan</option>
              <option value="Kenya" <?php if (!(strcmp("Kenya", (isset($_GET["invalid"])?ValidatedField("userupdate","User_Update_group_11_Country"):"")))) {echo "selected=\"selected\"";} ?>>Kenya</option>
              <option value="Kiribati" <?php if (!(strcmp("Kiribati", (isset($_GET["invalid"])?ValidatedField("userupdate","User_Update_group_11_Country"):"")))) {echo "selected=\"selected\"";} ?>>Kiribati</option>
              <option value="Korea, Democratic People's Republic of" <?php if (!(strcmp("Korea, Democratic People's Republic of", (isset($_GET["invalid"])?ValidatedField("userupdate","User_Update_group_11_Country"):"")))) {echo "selected=\"selected\"";} ?>>Korea, Democratic People's Republic of</option>
              <option value="Korea, Republic of" <?php if (!(strcmp("Korea, Republic of", (isset($_GET["invalid"])?ValidatedField("userupdate","User_Update_group_11_Country"):"")))) {echo "selected=\"selected\"";} ?>>Korea, Republic of</option>
              <option value="Kuwait" <?php if (!(strcmp("Kuwait", (isset($_GET["invalid"])?ValidatedField("userupdate","User_Update_group_11_Country"):"")))) {echo "selected=\"selected\"";} ?>>Kuwait</option>
              <option value="Kyrgyzstan" <?php if (!(strcmp("Kyrgyzstan", (isset($_GET["invalid"])?ValidatedField("userupdate","User_Update_group_11_Country"):"")))) {echo "selected=\"selected\"";} ?>>Kyrgyzstan</option>
              <option value="Lao People's Democratic Republic" <?php if (!(strcmp("Lao People's Democratic Republic", (isset($_GET["invalid"])?ValidatedField("userupdate","User_Update_group_11_Country"):"")))) {echo "selected=\"selected\"";} ?>>Lao People's Democratic Republic</option>
              <option value="Latvia" <?php if (!(strcmp("Latvia", (isset($_GET["invalid"])?ValidatedField("userupdate","User_Update_group_11_Country"):"")))) {echo "selected=\"selected\"";} ?>>Latvia</option>
              <option value="Lebanon" <?php if (!(strcmp("Lebanon", (isset($_GET["invalid"])?ValidatedField("userupdate","User_Update_group_11_Country"):"")))) {echo "selected=\"selected\"";} ?>>Lebanon</option>
              <option value="Lesotho" <?php if (!(strcmp("Lesotho", (isset($_GET["invalid"])?ValidatedField("userupdate","User_Update_group_11_Country"):"")))) {echo "selected=\"selected\"";} ?>>Lesotho</option>
              <option value="Liberia" <?php if (!(strcmp("Liberia", (isset($_GET["invalid"])?ValidatedField("userupdate","User_Update_group_11_Country"):"")))) {echo "selected=\"selected\"";} ?>>Liberia</option>
              <option value="Libyan Arab Jamahiriya" <?php if (!(strcmp("Libyan Arab Jamahiriya", (isset($_GET["invalid"])?ValidatedField("userupdate","User_Update_group_11_Country"):"")))) {echo "selected=\"selected\"";} ?>>Libyan Arab Jamahiriya</option>
              <option value="Liechtenstein" <?php if (!(strcmp("Liechtenstein", (isset($_GET["invalid"])?ValidatedField("userupdate","User_Update_group_11_Country"):"")))) {echo "selected=\"selected\"";} ?>>Liechtenstein</option>
              <option value="Lithuania" <?php if (!(strcmp("Lithuania", (isset($_GET["invalid"])?ValidatedField("userupdate","User_Update_group_11_Country"):"")))) {echo "selected=\"selected\"";} ?>>Lithuania</option>
              <option value="Luxembourg" <?php if (!(strcmp("Luxembourg", (isset($_GET["invalid"])?ValidatedField("userupdate","User_Update_group_11_Country"):"")))) {echo "selected=\"selected\"";} ?>>Luxembourg</option>
              <option value="Macao" <?php if (!(strcmp("Macao", (isset($_GET["invalid"])?ValidatedField("userupdate","User_Update_group_11_Country"):"")))) {echo "selected=\"selected\"";} ?>>Macao</option>
              <option value="Macedonia, The Former Yugoslav Republic of" <?php if (!(strcmp("Macedonia, The Former Yugoslav Republic of", (isset($_GET["invalid"])?ValidatedField("userupdate","User_Update_group_11_Country"):"")))) {echo "selected=\"selected\"";} ?>>Macedonia, The Former Yugoslav Republic of</option>
              <option value="Madagascar" <?php if (!(strcmp("Madagascar", (isset($_GET["invalid"])?ValidatedField("userupdate","User_Update_group_11_Country"):"")))) {echo "selected=\"selected\"";} ?>>Madagascar</option>
              <option value="Malawi" <?php if (!(strcmp("Malawi", (isset($_GET["invalid"])?ValidatedField("userupdate","User_Update_group_11_Country"):"")))) {echo "selected=\"selected\"";} ?>>Malawi</option>
              <option value="Malaysia" <?php if (!(strcmp("Malaysia", (isset($_GET["invalid"])?ValidatedField("userupdate","User_Update_group_11_Country"):"")))) {echo "selected=\"selected\"";} ?>>Malaysia</option>
              <option value="Maldives" <?php if (!(strcmp("Maldives", (isset($_GET["invalid"])?ValidatedField("userupdate","User_Update_group_11_Country"):"")))) {echo "selected=\"selected\"";} ?>>Maldives</option>
              <option value="Mali" <?php if (!(strcmp("Mali", (isset($_GET["invalid"])?ValidatedField("userupdate","User_Update_group_11_Country"):"")))) {echo "selected=\"selected\"";} ?>>Mali</option>
              <option value="Malta" <?php if (!(strcmp("Malta", (isset($_GET["invalid"])?ValidatedField("userupdate","User_Update_group_11_Country"):"")))) {echo "selected=\"selected\"";} ?>>Malta</option>
              <option value="Marshall Islands" <?php if (!(strcmp("Marshall Islands", (isset($_GET["invalid"])?ValidatedField("userupdate","User_Update_group_11_Country"):"")))) {echo "selected=\"selected\"";} ?>>Marshall Islands</option>
              <option value="Martinique" <?php if (!(strcmp("Martinique", (isset($_GET["invalid"])?ValidatedField("userupdate","User_Update_group_11_Country"):"")))) {echo "selected=\"selected\"";} ?>>Martinique</option>
              <option value="Mauritania" <?php if (!(strcmp("Mauritania", (isset($_GET["invalid"])?ValidatedField("userupdate","User_Update_group_11_Country"):"")))) {echo "selected=\"selected\"";} ?>>Mauritania</option>
              <option value="Mauritius" <?php if (!(strcmp("Mauritius", (isset($_GET["invalid"])?ValidatedField("userupdate","User_Update_group_11_Country"):"")))) {echo "selected=\"selected\"";} ?>>Mauritius</option>
              <option value="Mayotte" <?php if (!(strcmp("Mayotte", (isset($_GET["invalid"])?ValidatedField("userupdate","User_Update_group_11_Country"):"")))) {echo "selected=\"selected\"";} ?>>Mayotte</option>
              <option value="Mexico" <?php if (!(strcmp("Mexico", (isset($_GET["invalid"])?ValidatedField("userupdate","User_Update_group_11_Country"):"")))) {echo "selected=\"selected\"";} ?>>Mexico</option>
              <option value="Micronesia, Federated States of" <?php if (!(strcmp("Micronesia, Federated States of", (isset($_GET["invalid"])?ValidatedField("userupdate","User_Update_group_11_Country"):"")))) {echo "selected=\"selected\"";} ?>>Micronesia, Federated States of</option>
              <option value="Moldova, Republic of" <?php if (!(strcmp("Moldova, Republic of", (isset($_GET["invalid"])?ValidatedField("userupdate","User_Update_group_11_Country"):"")))) {echo "selected=\"selected\"";} ?>>Moldova, Republic of</option>
              <option value="Monaco" <?php if (!(strcmp("Monaco", (isset($_GET["invalid"])?ValidatedField("userupdate","User_Update_group_11_Country"):"")))) {echo "selected=\"selected\"";} ?>>Monaco</option>
              <option value="Mongolia" <?php if (!(strcmp("Mongolia", (isset($_GET["invalid"])?ValidatedField("userupdate","User_Update_group_11_Country"):"")))) {echo "selected=\"selected\"";} ?>>Mongolia</option>
              <option value="Montserrat" <?php if (!(strcmp("Montserrat", (isset($_GET["invalid"])?ValidatedField("userupdate","User_Update_group_11_Country"):"")))) {echo "selected=\"selected\"";} ?>>Montserrat</option>
              <option value="Morocco" <?php if (!(strcmp("Morocco", (isset($_GET["invalid"])?ValidatedField("userupdate","User_Update_group_11_Country"):"")))) {echo "selected=\"selected\"";} ?>>Morocco</option>
              <option value="Mozambique" <?php if (!(strcmp("Mozambique", (isset($_GET["invalid"])?ValidatedField("userupdate","User_Update_group_11_Country"):"")))) {echo "selected=\"selected\"";} ?>>Mozambique</option>
              <option value="Myanmar" <?php if (!(strcmp("Myanmar", (isset($_GET["invalid"])?ValidatedField("userupdate","User_Update_group_11_Country"):"")))) {echo "selected=\"selected\"";} ?>>Myanmar</option>
              <option value="Namibia" <?php if (!(strcmp("Namibia", (isset($_GET["invalid"])?ValidatedField("userupdate","User_Update_group_11_Country"):"")))) {echo "selected=\"selected\"";} ?>>Namibia</option>
              <option value="Nauru" <?php if (!(strcmp("Nauru", (isset($_GET["invalid"])?ValidatedField("userupdate","User_Update_group_11_Country"):"")))) {echo "selected=\"selected\"";} ?>>Nauru</option>
              <option value="Nepal" <?php if (!(strcmp("Nepal", (isset($_GET["invalid"])?ValidatedField("userupdate","User_Update_group_11_Country"):"")))) {echo "selected=\"selected\"";} ?>>Nepal</option>
              <option value="Netherlands" <?php if (!(strcmp("Netherlands", (isset($_GET["invalid"])?ValidatedField("userupdate","User_Update_group_11_Country"):"")))) {echo "selected=\"selected\"";} ?>>Netherlands</option>
              <option value="Netherlands Antilles" <?php if (!(strcmp("Netherlands Antilles", (isset($_GET["invalid"])?ValidatedField("userupdate","User_Update_group_11_Country"):"")))) {echo "selected=\"selected\"";} ?>>Netherlands Antilles</option>
              <option value="New Caledonia" <?php if (!(strcmp("New Caledonia", (isset($_GET["invalid"])?ValidatedField("userupdate","User_Update_group_11_Country"):"")))) {echo "selected=\"selected\"";} ?>>New Caledonia</option>
              <option value="New Zealand" <?php if (!(strcmp("New Zealand", (isset($_GET["invalid"])?ValidatedField("userupdate","User_Update_group_11_Country"):"")))) {echo "selected=\"selected\"";} ?>>New Zealand</option>
              <option value="Nicaragua" <?php if (!(strcmp("Nicaragua", (isset($_GET["invalid"])?ValidatedField("userupdate","User_Update_group_11_Country"):"")))) {echo "selected=\"selected\"";} ?>>Nicaragua</option>
              <option value="Niger" <?php if (!(strcmp("Niger", (isset($_GET["invalid"])?ValidatedField("userupdate","User_Update_group_11_Country"):"")))) {echo "selected=\"selected\"";} ?>>Niger</option>
              <option value="Nigeria" <?php if (!(strcmp("Nigeria", (isset($_GET["invalid"])?ValidatedField("userupdate","User_Update_group_11_Country"):"")))) {echo "selected=\"selected\"";} ?>>Nigeria</option>
              <option value="Niue" <?php if (!(strcmp("Niue", (isset($_GET["invalid"])?ValidatedField("userupdate","User_Update_group_11_Country"):"")))) {echo "selected=\"selected\"";} ?>>Niue</option>
              <option value="Norfolk Island" <?php if (!(strcmp("Norfolk Island", (isset($_GET["invalid"])?ValidatedField("userupdate","User_Update_group_11_Country"):"")))) {echo "selected=\"selected\"";} ?>>Norfolk Island</option>
              <option value="Northern Mariana Islands" <?php if (!(strcmp("Northern Mariana Islands", (isset($_GET["invalid"])?ValidatedField("userupdate","User_Update_group_11_Country"):"")))) {echo "selected=\"selected\"";} ?>>Northern Mariana Islands</option>
              <option value="Norway" <?php if (!(strcmp("Norway", (isset($_GET["invalid"])?ValidatedField("userupdate","User_Update_group_11_Country"):"")))) {echo "selected=\"selected\"";} ?>>Norway</option>
              <option value="Oman" <?php if (!(strcmp("Oman", (isset($_GET["invalid"])?ValidatedField("userupdate","User_Update_group_11_Country"):"")))) {echo "selected=\"selected\"";} ?>>Oman</option>
              <option value="Pakistan" <?php if (!(strcmp("Pakistan", (isset($_GET["invalid"])?ValidatedField("userupdate","User_Update_group_11_Country"):"")))) {echo "selected=\"selected\"";} ?>>Pakistan</option>
              <option value="Palau" <?php if (!(strcmp("Palau", (isset($_GET["invalid"])?ValidatedField("userupdate","User_Update_group_11_Country"):"")))) {echo "selected=\"selected\"";} ?>>Palau</option>
              <option value="Palestinian Territory, Occupied" <?php if (!(strcmp("Palestinian Territory, Occupied", (isset($_GET["invalid"])?ValidatedField("userupdate","User_Update_group_11_Country"):"")))) {echo "selected=\"selected\"";} ?>>Palestinian Territory, Occupied</option>
              <option value="Panama" <?php if (!(strcmp("Panama", (isset($_GET["invalid"])?ValidatedField("userupdate","User_Update_group_11_Country"):"")))) {echo "selected=\"selected\"";} ?>>Panama</option>
              <option value="Papua New Guinea" <?php if (!(strcmp("Papua New Guinea", (isset($_GET["invalid"])?ValidatedField("userupdate","User_Update_group_11_Country"):"")))) {echo "selected=\"selected\"";} ?>>Papua New Guinea</option>
              <option value="Paraguay" <?php if (!(strcmp("Paraguay", (isset($_GET["invalid"])?ValidatedField("userupdate","User_Update_group_11_Country"):"")))) {echo "selected=\"selected\"";} ?>>Paraguay</option>
              <option value="Peru" <?php if (!(strcmp("Peru", (isset($_GET["invalid"])?ValidatedField("userupdate","User_Update_group_11_Country"):"")))) {echo "selected=\"selected\"";} ?>>Peru</option>
              <option value="Philippines" <?php if (!(strcmp("Philippines", (isset($_GET["invalid"])?ValidatedField("userupdate","User_Update_group_11_Country"):"")))) {echo "selected=\"selected\"";} ?>>Philippines</option>
              <option value="Pitcairn" <?php if (!(strcmp("Pitcairn", (isset($_GET["invalid"])?ValidatedField("userupdate","User_Update_group_11_Country"):"")))) {echo "selected=\"selected\"";} ?>>Pitcairn</option>
              <option value="Poland" <?php if (!(strcmp("Poland", (isset($_GET["invalid"])?ValidatedField("userupdate","User_Update_group_11_Country"):"")))) {echo "selected=\"selected\"";} ?>>Poland</option>
              <option value="Portugal" <?php if (!(strcmp("Portugal", (isset($_GET["invalid"])?ValidatedField("userupdate","User_Update_group_11_Country"):"")))) {echo "selected=\"selected\"";} ?>>Portugal</option>
              <option value="Puerto Rico" <?php if (!(strcmp("Puerto Rico", (isset($_GET["invalid"])?ValidatedField("userupdate","User_Update_group_11_Country"):"")))) {echo "selected=\"selected\"";} ?>>Puerto Rico</option>
              <option value="Qatar" <?php if (!(strcmp("Qatar", (isset($_GET["invalid"])?ValidatedField("userupdate","User_Update_group_11_Country"):"")))) {echo "selected=\"selected\"";} ?>>Qatar</option>
              <option value="Reunion" <?php if (!(strcmp("Reunion", (isset($_GET["invalid"])?ValidatedField("userupdate","User_Update_group_11_Country"):"")))) {echo "selected=\"selected\"";} ?>>Reunion</option>
              <option value="Romania" <?php if (!(strcmp("Romania", (isset($_GET["invalid"])?ValidatedField("userupdate","User_Update_group_11_Country"):"")))) {echo "selected=\"selected\"";} ?>>Romania</option>
              <option value="Russian Federation" <?php if (!(strcmp("Russian Federation", (isset($_GET["invalid"])?ValidatedField("userupdate","User_Update_group_11_Country"):"")))) {echo "selected=\"selected\"";} ?>>Russian Federation</option>
              <option value="Rwanda" <?php if (!(strcmp("Rwanda", (isset($_GET["invalid"])?ValidatedField("userupdate","User_Update_group_11_Country"):"")))) {echo "selected=\"selected\"";} ?>>Rwanda</option>
              <option value="Saint Helena" <?php if (!(strcmp("Saint Helena", (isset($_GET["invalid"])?ValidatedField("userupdate","User_Update_group_11_Country"):"")))) {echo "selected=\"selected\"";} ?>>Saint Helena</option>
              <option value="Saint Kitts and Nevis" <?php if (!(strcmp("Saint Kitts and Nevis", (isset($_GET["invalid"])?ValidatedField("userupdate","User_Update_group_11_Country"):"")))) {echo "selected=\"selected\"";} ?>>Saint Kitts and Nevis</option>
              <option value="Saint Lucia" <?php if (!(strcmp("Saint Lucia", (isset($_GET["invalid"])?ValidatedField("userupdate","User_Update_group_11_Country"):"")))) {echo "selected=\"selected\"";} ?>>Saint Lucia</option>
              <option value="Saint Pierre and Miquelon" <?php if (!(strcmp("Saint Pierre and Miquelon", (isset($_GET["invalid"])?ValidatedField("userupdate","User_Update_group_11_Country"):"")))) {echo "selected=\"selected\"";} ?>>Saint Pierre and Miquelon</option>
              <option value="Saint Vincent and The Grenadines" <?php if (!(strcmp("Saint Vincent and The Grenadines", (isset($_GET["invalid"])?ValidatedField("userupdate","User_Update_group_11_Country"):"")))) {echo "selected=\"selected\"";} ?>>Saint Vincent and The Grenadines</option>
              <option value="Samoa" <?php if (!(strcmp("Samoa", (isset($_GET["invalid"])?ValidatedField("userupdate","User_Update_group_11_Country"):"")))) {echo "selected=\"selected\"";} ?>>Samoa</option>
              <option value="San Marino" <?php if (!(strcmp("San Marino", (isset($_GET["invalid"])?ValidatedField("userupdate","User_Update_group_11_Country"):"")))) {echo "selected=\"selected\"";} ?>>San Marino</option>
              <option value="Sao Tome and Principe" <?php if (!(strcmp("Sao Tome and Principe", (isset($_GET["invalid"])?ValidatedField("userupdate","User_Update_group_11_Country"):"")))) {echo "selected=\"selected\"";} ?>>Sao Tome and Principe</option>
              <option value="Saudi Arabia" <?php if (!(strcmp("Saudi Arabia", (isset($_GET["invalid"])?ValidatedField("userupdate","User_Update_group_11_Country"):"")))) {echo "selected=\"selected\"";} ?>>Saudi Arabia</option>
              <option value="Senegal" <?php if (!(strcmp("Senegal", (isset($_GET["invalid"])?ValidatedField("userupdate","User_Update_group_11_Country"):"")))) {echo "selected=\"selected\"";} ?>>Senegal</option>
              <option value="Serbia and Montenegro" <?php if (!(strcmp("Serbia and Montenegro", (isset($_GET["invalid"])?ValidatedField("userupdate","User_Update_group_11_Country"):"")))) {echo "selected=\"selected\"";} ?>>Serbia and Montenegro</option>
              <option value="Seychelles" <?php if (!(strcmp("Seychelles", (isset($_GET["invalid"])?ValidatedField("userupdate","User_Update_group_11_Country"):"")))) {echo "selected=\"selected\"";} ?>>Seychelles</option>
              <option value="Sierra Leone" <?php if (!(strcmp("Sierra Leone", (isset($_GET["invalid"])?ValidatedField("userupdate","User_Update_group_11_Country"):"")))) {echo "selected=\"selected\"";} ?>>Sierra Leone</option>
              <option value="Singapore" <?php if (!(strcmp("Singapore", (isset($_GET["invalid"])?ValidatedField("userupdate","User_Update_group_11_Country"):"")))) {echo "selected=\"selected\"";} ?>>Singapore</option>
              <option value="Slovakia" <?php if (!(strcmp("Slovakia", (isset($_GET["invalid"])?ValidatedField("userupdate","User_Update_group_11_Country"):"")))) {echo "selected=\"selected\"";} ?>>Slovakia</option>
              <option value="Slovenia" <?php if (!(strcmp("Slovenia", (isset($_GET["invalid"])?ValidatedField("userupdate","User_Update_group_11_Country"):"")))) {echo "selected=\"selected\"";} ?>>Slovenia</option>
              <option value="Solomon Islands" <?php if (!(strcmp("Solomon Islands", (isset($_GET["invalid"])?ValidatedField("userupdate","User_Update_group_11_Country"):"")))) {echo "selected=\"selected\"";} ?>>Solomon Islands</option>
              <option value="Somalia" <?php if (!(strcmp("Somalia", (isset($_GET["invalid"])?ValidatedField("userupdate","User_Update_group_11_Country"):"")))) {echo "selected=\"selected\"";} ?>>Somalia</option>
              <option value="South Africa" <?php if (!(strcmp("South Africa", (isset($_GET["invalid"])?ValidatedField("userupdate","User_Update_group_11_Country"):"")))) {echo "selected=\"selected\"";} ?>>South Africa</option>
              <option value="South Georgia and The South Sandwich Islands" <?php if (!(strcmp("South Georgia and The South Sandwich Islands", (isset($_GET["invalid"])?ValidatedField("userupdate","User_Update_group_11_Country"):"")))) {echo "selected=\"selected\"";} ?>>South Georgia and The South Sandwich Islands</option>
              <option value="Spain" <?php if (!(strcmp("Spain", (isset($_GET["invalid"])?ValidatedField("userupdate","User_Update_group_11_Country"):"")))) {echo "selected=\"selected\"";} ?>>Spain</option>
              <option value="Sri Lanka" <?php if (!(strcmp("Sri Lanka", (isset($_GET["invalid"])?ValidatedField("userupdate","User_Update_group_11_Country"):"")))) {echo "selected=\"selected\"";} ?>>Sri Lanka</option>
              <option value="Sudan" <?php if (!(strcmp("Sudan", (isset($_GET["invalid"])?ValidatedField("userupdate","User_Update_group_11_Country"):"")))) {echo "selected=\"selected\"";} ?>>Sudan</option>
              <option value="Suriname" <?php if (!(strcmp("Suriname", (isset($_GET["invalid"])?ValidatedField("userupdate","User_Update_group_11_Country"):"")))) {echo "selected=\"selected\"";} ?>>Suriname</option>
              <option value="Svalbard and Jan Mayen" <?php if (!(strcmp("Svalbard and Jan Mayen", (isset($_GET["invalid"])?ValidatedField("userupdate","User_Update_group_11_Country"):"")))) {echo "selected=\"selected\"";} ?>>Svalbard and Jan Mayen</option>
              <option value="Swaziland" <?php if (!(strcmp("Swaziland", (isset($_GET["invalid"])?ValidatedField("userupdate","User_Update_group_11_Country"):"")))) {echo "selected=\"selected\"";} ?>>Swaziland</option>
              <option value="Sweden" <?php if (!(strcmp("Sweden", (isset($_GET["invalid"])?ValidatedField("userupdate","User_Update_group_11_Country"):"")))) {echo "selected=\"selected\"";} ?>>Sweden</option>
              <option value="Switzerland" <?php if (!(strcmp("Switzerland", (isset($_GET["invalid"])?ValidatedField("userupdate","User_Update_group_11_Country"):"")))) {echo "selected=\"selected\"";} ?>>Switzerland</option>
              <option value="Syrian Arab Republic" <?php if (!(strcmp("Syrian Arab Republic", (isset($_GET["invalid"])?ValidatedField("userupdate","User_Update_group_11_Country"):"")))) {echo "selected=\"selected\"";} ?>>Syrian Arab Republic</option>
              <option value="Taiwan, Province of China" <?php if (!(strcmp("Taiwan, Province of China", (isset($_GET["invalid"])?ValidatedField("userupdate","User_Update_group_11_Country"):"")))) {echo "selected=\"selected\"";} ?>>Taiwan, Province of China</option>
              <option value="Tajikistan" <?php if (!(strcmp("Tajikistan", (isset($_GET["invalid"])?ValidatedField("userupdate","User_Update_group_11_Country"):"")))) {echo "selected=\"selected\"";} ?>>Tajikistan</option>
              <option value="Tanzania, United Republic of" <?php if (!(strcmp("Tanzania, United Republic of", (isset($_GET["invalid"])?ValidatedField("userupdate","User_Update_group_11_Country"):"")))) {echo "selected=\"selected\"";} ?>>Tanzania, United Republic of</option>
              <option value="Thailand" <?php if (!(strcmp("Thailand", (isset($_GET["invalid"])?ValidatedField("userupdate","User_Update_group_11_Country"):"")))) {echo "selected=\"selected\"";} ?>>Thailand</option>
              <option value="Timor-leste" <?php if (!(strcmp("Timor-leste", (isset($_GET["invalid"])?ValidatedField("userupdate","User_Update_group_11_Country"):"")))) {echo "selected=\"selected\"";} ?>>Timor-leste</option>
              <option value="Togo" <?php if (!(strcmp("Togo", (isset($_GET["invalid"])?ValidatedField("userupdate","User_Update_group_11_Country"):"")))) {echo "selected=\"selected\"";} ?>>Togo</option>
              <option value="Tokelau" <?php if (!(strcmp("Tokelau", (isset($_GET["invalid"])?ValidatedField("userupdate","User_Update_group_11_Country"):"")))) {echo "selected=\"selected\"";} ?>>Tokelau</option>
              <option value="Tonga" <?php if (!(strcmp("Tonga", (isset($_GET["invalid"])?ValidatedField("userupdate","User_Update_group_11_Country"):"")))) {echo "selected=\"selected\"";} ?>>Tonga</option>
              <option value="Trinidad and Tobago" <?php if (!(strcmp("Trinidad and Tobago", (isset($_GET["invalid"])?ValidatedField("userupdate","User_Update_group_11_Country"):"")))) {echo "selected=\"selected\"";} ?>>Trinidad and Tobago</option>
              <option value="Tunisia" <?php if (!(strcmp("Tunisia", (isset($_GET["invalid"])?ValidatedField("userupdate","User_Update_group_11_Country"):"")))) {echo "selected=\"selected\"";} ?>>Tunisia</option>
              <option value="Turkey" <?php if (!(strcmp("Turkey", (isset($_GET["invalid"])?ValidatedField("userupdate","User_Update_group_11_Country"):"")))) {echo "selected=\"selected\"";} ?>>Turkey</option>
              <option value="Turkmenistan" <?php if (!(strcmp("Turkmenistan", (isset($_GET["invalid"])?ValidatedField("userupdate","User_Update_group_11_Country"):"")))) {echo "selected=\"selected\"";} ?>>Turkmenistan</option>
              <option value="Turks and Caicos Islands" <?php if (!(strcmp("Turks and Caicos Islands", (isset($_GET["invalid"])?ValidatedField("userupdate","User_Update_group_11_Country"):"")))) {echo "selected=\"selected\"";} ?>>Turks and Caicos Islands</option>
              <option value="Tuvalu" <?php if (!(strcmp("Tuvalu", (isset($_GET["invalid"])?ValidatedField("userupdate","User_Update_group_11_Country"):"")))) {echo "selected=\"selected\"";} ?>>Tuvalu</option>
              <option value="Uganda" <?php if (!(strcmp("Uganda", (isset($_GET["invalid"])?ValidatedField("userupdate","User_Update_group_11_Country"):"")))) {echo "selected=\"selected\"";} ?>>Uganda</option>
              <option value="Ukraine" <?php if (!(strcmp("Ukraine", (isset($_GET["invalid"])?ValidatedField("userupdate","User_Update_group_11_Country"):"")))) {echo "selected=\"selected\"";} ?>>Ukraine</option>
              <option value="United Arab Emirates" <?php if (!(strcmp("United Arab Emirates", (isset($_GET["invalid"])?ValidatedField("userupdate","User_Update_group_11_Country"):"")))) {echo "selected=\"selected\"";} ?>>United Arab Emirates</option>
              <option value="United Kingdom" <?php if (!(strcmp("United Kingdom", (isset($_GET["invalid"])?ValidatedField("userupdate","User_Update_group_11_Country"):"")))) {echo "selected=\"selected\"";} ?>>United Kingdom</option>
              <option value="United States" <?php if (!(strcmp("United States", (isset($_GET["invalid"])?ValidatedField("userupdate","User_Update_group_11_Country"):"")))) {echo "selected=\"selected\"";} ?>>United States</option>
              <option value="United States Minor Outlying Islands" <?php if (!(strcmp("United States Minor Outlying Islands", (isset($_GET["invalid"])?ValidatedField("userupdate","User_Update_group_11_Country"):"")))) {echo "selected=\"selected\"";} ?>>United States Minor Outlying Islands</option>
              <option value="Uruguay" <?php if (!(strcmp("Uruguay", (isset($_GET["invalid"])?ValidatedField("userupdate","User_Update_group_11_Country"):"")))) {echo "selected=\"selected\"";} ?>>Uruguay</option>
              <option value="Uzbekistan" <?php if (!(strcmp("Uzbekistan", (isset($_GET["invalid"])?ValidatedField("userupdate","User_Update_group_11_Country"):"")))) {echo "selected=\"selected\"";} ?>>Uzbekistan</option>
              <option value="Vanuatu" <?php if (!(strcmp("Vanuatu", (isset($_GET["invalid"])?ValidatedField("userupdate","User_Update_group_11_Country"):"")))) {echo "selected=\"selected\"";} ?>>Vanuatu</option>
              <option value="Venezuela" <?php if (!(strcmp("Venezuela", (isset($_GET["invalid"])?ValidatedField("userupdate","User_Update_group_11_Country"):"")))) {echo "selected=\"selected\"";} ?>>Venezuela</option>
              <option value="Viet Nam" <?php if (!(strcmp("Viet Nam", (isset($_GET["invalid"])?ValidatedField("userupdate","User_Update_group_11_Country"):"")))) {echo "selected=\"selected\"";} ?>>Viet Nam</option>
              <option value="Virgin Islands, British" <?php if (!(strcmp("Virgin Islands, British", (isset($_GET["invalid"])?ValidatedField("userupdate","User_Update_group_11_Country"):"")))) {echo "selected=\"selected\"";} ?>>Virgin Islands, British</option>
              <option value="Virgin Islands, U.S." <?php if (!(strcmp("Virgin Islands, U.S.", (isset($_GET["invalid"])?ValidatedField("userupdate","User_Update_group_11_Country"):"")))) {echo "selected=\"selected\"";} ?>>Virgin Islands, U.S.</option>
              <option value="Wallis and Futuna" <?php if (!(strcmp("Wallis and Futuna", (isset($_GET["invalid"])?ValidatedField("userupdate","User_Update_group_11_Country"):"")))) {echo "selected=\"selected\"";} ?>>Wallis and Futuna</option>
              <option value="Western Sahara" <?php if (!(strcmp("Western Sahara", (isset($_GET["invalid"])?ValidatedField("userupdate","User_Update_group_11_Country"):"")))) {echo "selected=\"selected\"";} ?>>Western Sahara</option>
              <option value="Yemen" <?php if (!(strcmp("Yemen", (isset($_GET["invalid"])?ValidatedField("userupdate","User_Update_group_11_Country"):"")))) {echo "selected=\"selected\"";} ?>>Yemen</option>
              <option value="Zambia" <?php if (!(strcmp("Zambia", (isset($_GET["invalid"])?ValidatedField("userupdate","User_Update_group_11_Country"):"")))) {echo "selected=\"selected\"";} ?>>Zambia</option>
              <option value="Zimbabwe" <?php if (!(strcmp("Zimbabwe", (isset($_GET["invalid"])?ValidatedField("userupdate","User_Update_group_11_Country"):"")))) {echo "selected=\"selected\"";} ?>>Zimbabwe</option>
            </select>
          </div>
          <div class="lineGroup">
            <label for="User_Update_group_12_Phone" class="sublabel" > Phone:</label>
            <input id="User_Update_group_12_Phone" name="User_Update_group_12_Phone" type="text" value="<?php echo((isset($_GET["invalid"])?ValidatedField("userupdate","User_Update_group_12_Phone"):"".$SecurityAssistps4users->getColumnVal("UserPhone")  ."")); ?>" class="formTextfield_Medium" tabindex="12" title="Please enter a value.">
          </div>
          <div class="lineGroup">
            <label for="User_Update_group_13_Fax" class="sublabel" > Fax:<span class="requiredIndicator">&nbsp;*</span></label>
            <input id="User_Update_group_13_Fax" name="User_Update_group_13_Fax" type="text" value="<?php echo((isset($_GET["invalid"])?ValidatedField("userupdate","User_Update_group_13_Fax"):"".$SecurityAssistps4users->getColumnVal("UserFax")  ."")); ?>" class="formTextfield_Medium" tabindex="13" title="Please enter a value." required="true">
            <?php
if (ValidatedField('userupdate','userupdate'))  {
  if ((strpos((",".ValidatedField("userupdate","userupdate").","), "," . "12" . ",") !== false || "12" == ""))  {
    if (!(false))  {
?>
              <span class="serverInvalidState" id="User_Update_group_13_Fax_ServerError">Please enter a value.</span>
              <?php //WAFV_Conditional userupdate.php userupdate(12:)
    }
  }
}?>
          </div>
          <span class="buttonFieldGroup" >
            <input class="formButton" name="UserUpdate_submit" type="submit" id="UserUpdate_submit" value="Update"  onClick="clearAllServerErrors('UserUpdate_Basic_Default')" tabindex="14">
          </span>
        </fieldset>
      </form>
    </div>
    <div id="UserUpdate_Basic_Default_ProgressMessageWrapper" class="blockUIOverlay" style="display:none;">
      <script type="text/javascript">
WADFP_SetProgressToForm('UserUpdate_Basic_Default', 'UserUpdate_Basic_Default_ProgressMessageWrapper', WADFP_Theme_Options['BigSpin:Slate']);
    </script>
      <div id="UserUpdate_Basic_Default_ProgressMessage" >
        <p style="margin:10px; padding:5px;" ><img src="webassist/progress_bar/images/slate-largespin.gif" alt="" title="" style="vertical-align:middle;" />&nbsp;&nbsp;Please wait</p>
      </div>
    </div>
  </wa_insertserverbehavior>
  <wa_insertserverbehavior sb="showRegion_emptyRS">
    <p>No record found.</p>
  </wa_insertserverbehavior>
</div>
<wa_insertserverbehavior sb="Check New Username" />
<script src="webassist/forms/wa_servervalidation.js" type="text/javascript"></script>
<script src="webassist/jq_validation/jquery.h5validate.js"></script>
<script>
var UserUpdate_Basic_Default_Opts = {
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
function UserUpdate_Basic_Default_Validate() {
    $("#UserUpdate_Basic_Default").h5Validate(UserUpdate_Basic_Default_Opts);
  }
$(document).ready(function () {
  UserUpdate_Basic_Default_Validate()
  ConvertServerErrors(UserUpdate_Basic_Default_Opts);
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
