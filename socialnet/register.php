<?php include('temp/header_tmp.php');?>


<?php
  if($_POST){
    echo '<pre>';
    print_r($_POST);
    exit;
  }
?>

<style>
.form_control{
  padding: 5px;
  width: 200px;
  margin: 10px 0;
}
.form_btn{
  padding: 5px;
  width: 100px;
  margin: 10px 0;
}
</style>

<table width="100%">
  <tr>
      <td width="50%">

      </td>
      <td width="50%" style="border-left:1px solid; padding: 30px;">
        <h2>Register to Faryal Social Network</h2>
          <p>Please sign up to our system to create your profile. The sign up is free. </p>
          <form method="post" action="">
            <div><input type="text" name="first_name" id="first_name" class="form_control" placeholder="First Name" value="" /></div>
            <div><input type="text" name="last_name" id="last_name" class="form_control" placeholder="Last Name" value="" /></div>
            <div><input type="email" name="email" id="email" class="form_control" placeholder="Email" value="" /></div>
            <div><input type="password" name="password" id="password" class="form_control" placeholder="password" value="" /></div>
            <div>
                <select name="gender" id="gender" class="form_control" required>
                    <option value="">Select Gender</option>
                    <option value="1">Female</option>
                    <option value="2">Male</option>
                </select>
            </div>
            <p>By clicking register you are agree with our terms and policy</p>
            <div><input type="submit" class="form_btn"value="Register" /></div>
          </form>

          <hr />

          if you have an account, you can easily access your profile
          <a href="<?=basepath('login.php')?>">Log in</a>

      </td>
  </tr>
</table>

<?php include('temp/footer_tmp.php');?>
