<?php
include("headeer.html")
?>
<form class="register" action="registeraction.php" method="post" >
    <input type="text" name="firstname" placeholder="name">
    <input type="text" name="lastname" placeholder="last name">
    <input type="text" name="email" placeholder="email">
    <input type="text" name="username" placeholder="User name">
    <input type="text" name="password" placeholder="password">
    <input type="text" name="repassword" placeholder="repassword">
    <input type="submit" value="register">
</form>
<?php
include("footer.html");
?>