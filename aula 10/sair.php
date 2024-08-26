<?php

sessinon_strat();
unset($_SESSION['email']);
unset($_SESSION['senha']);
hearder("Location: Login.php");

?>