<?php
   
    session_start();
    if(isset($_POST['logout']))
    {
        session_unset();
        
    }
?>

<html>
    <body>
        <h2>Welcome</h2>
        <form method='post'>
            <input type='submit' name='logout' value='Logout'>
        </form>
    </body>
</html>