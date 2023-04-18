<html>

<body>

    <form method="post" action="<?php  echo $_SERVER["PHP_SELF"]; ?>">

        Name: <input type="text" name="name" />
        Email: <input type="email" name="email" />
        <input type="submit" />
    </form>

    <?php
    
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $name = $_REQUEST['name'];
        $email =$_REQUEST['email'];
        if (empty($name) && empty($email)) {
            echo " empty";
          } else {
            echo $name;
            echo "<br>";
            echo $email;
          }

    }


?>



</body>

</html>