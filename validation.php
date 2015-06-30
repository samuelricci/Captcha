<?php

/* captcha validation */

session_start();

if(strtolower($_POST['answer']) == $_SESSION['captcha'])
    echo 'Good news everybody! The captcha worked. (\/)o_o(\/)';
else
    echo 'Ah, ah, ah. You did not say the magic word. You robot.';



unset($_SESSION['captcha']);

?>