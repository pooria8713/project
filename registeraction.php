<?php
include("headeer.html");
?>
<center>
<?php
if(isset($_POST["firstname"]) && !empty($_POST["firstname"])
 && isset($_POST["lastname"])  && !empty($_POST["lastname"])
 && isset($_POST["email"])  && !empty($_POST["email"])
 && isset($_POST["username"])  && !empty($_POST["username"])
 && isset($_POST["password"])  && !empty($_POST["password"])
 && isset($_POST["repassword"])  && !empty($_POST["repassword"])
){
    $firstname=$_POST["firstname"];
    $lastname=$_POST["lastname"];
    $email=$_POST["email"];
    $username=$_POST["username"];
    $password=$_POST["password"];
    $repassword=$_POST["repassword"];
    echo("<h1>".$firstname."</h1>");
    echo("<h1>".$lastname."</h1>");
    echo("<h1>".$email."</h1>");
    echo("<h1>".$username."</h1>");
}else
{
echo("<h1> tamami fild hara por konid ❗</h1>");
}
?>
</center>
<?php
include("footer.html");
?>