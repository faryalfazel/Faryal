<?php

  // here are all the codes related to system configuration

  function basePath($para = '')
  {
      $sysPath = 'http://localhost/socialnet/'.$para;
      return $sysPath;
  }

  function dbConnect()
  {
      $host = 'localhost';
      $username = 'root';
      $password = '';
      $database = 'social_network';

      $conn = mysqli_connect($host, $username, $password, $database);

      if($conn){
          return $conn;
      }else{
          return 'Error in connection!!!';
      }
  }
