<?php
    session_start();
    if(isset($_POST['do_login']))
    {
        $host="localhost";
        $username="root";
        $password="";
        $databasename="test_03_loginajax";
        $connect=mysqli_connect($host,$username,$password);
        $db=mysql_select_db($databasename);

        $email=$_POST['email'];
        $pass=md5($_POST['password']);
        $select_data=mysql_query("select * from user where email='$email' and password='$pass'");
    
        if($row=mysql_fetch_array($select_data))
        {
            $_SESSION['email']=$row['email'];
            echo "success";
        }else{
            echo "fail";
        }

        exit();
    }
?>