<!-- captcha code  -->
<div id="frame0">
  <h1>Php Captch Code </h1>
  <p>Feel free to use it</p>
</div>
<br><br><br>

<form action="" method="post" name="form1" id="form1" >
  <table width="425" border="0" align="center" cellpadding="5" cellspacing="1" class="table">
    <?php if(isset($msg)){?>
    <tr>
      <td colspan="2" align="center" valign="top"><?php echo $msg;?></td>
    </tr>
    <?php } ?>
    <tr>
      <td align="right" valign="top"> <p>Validation code:</p></td>
      <td><img src="./captcha.php?rand=<?php echo rand();?>" id='captchaimg'>
        <label for='message'><p>Enter the above code here :</p></label>
        <input id="captcha_code" name="captcha_code" type="text">
        <p>Can't read the image? click <a href='javascript: refreshCaptcha();'>here</a> to refresh.</p></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input name="Submit" type="submit" onclick="return validate();" value="Submit" class="button1"></td>
    </tr>
  </table>
</form>
 