<?php
if(!isset($_SESSION['logado'])){
    $_SESSION['seguro'];
    
    header("location: ../admin/index.php");
    
    exit;
}
?>