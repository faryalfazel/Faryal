<?php include('temp/header_tmp.php');?>

<style>
.form_control{
  padding: 5px;
  width: 200px;
  margin: 10px 0;
}
.form_btn{
  padding: 5px;
  width: 50px;
  margin: 10px 0;
}
</style>

<table width="100%">
  <tr>
      <td width="50%">

      </td>
      <td width="50%" style="border-left:1px solid; padding: 30px;">
        <h2>Login to Frayal Social Network</h2>
          <p>You have to login to access your profile </p>
          <form method="post" action="">
            <div><input type="email" name="username" id="username" class="form_control" placeholder="Username" value="" /></div>
            <div><input type="password" name="password" id="password" class="form_control" placeholder="password" value="" /></div>
            <div><input type="submit" class="form_btn"value="Login" /></div>
          </form>

          <hr />

          if you dont have an account, please sign up to our system. The sign up is free.
          <a href="<?=basePath('register.php')?>">Sign up </a>

      </td>
  </tr>
</table>

<?php include('temp/footer_tmp.php');?>
