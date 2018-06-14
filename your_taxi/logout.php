<?php
session_start();
if(session_destroy()){
 header("Location: index6.php");
}

?> 