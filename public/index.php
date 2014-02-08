<?php

require_once 'shared.php';

?>

<form action="submit.php" method="post">
    <label for="first_name">First Name</label>
    <input type="text" name="first_name" id="first_name" />
    
    <label for="last_name">Last Name</label>
    <input type="text" name="last_name" id="last_name" />
    
    <label for="email">Email</label>
    <input type="text" name="email" id="email" />
    
    <label for="city">City</label>
    <input type="text" name="city" id="city" />
    
    <input type="submit" />
</form>