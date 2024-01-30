<?php
 include_once("conection.php");
if(isset( $_POST["uname"])){
    $un = $_POST["uname"];
    $ps = $_POST["psw"];

    $sql = "SELECT * FROM users WHERE username='$un' and password='$ps'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        session_start();
        $_SESSION["login"] = true;
        echo "ZALOGOWANO";
    } else {
        echo "Błędne dane";
        echo "<a href='./login_form.html'>Zaloguj sie ponownie</a>";
    }
    $conn->close();
}else{
    include_once("login_form.html");
}
 


?>
