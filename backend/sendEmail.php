<?php
    
    if (isset($_POST['submit'])) {
        $to = "gregoriomarvin.ph@gmail.com";
        $subj = "Portfolio Contact Us";
        $from = "From :" . $_POST['name'];
        $msg = "Hello";
        
        if (mail($to, $subj, $msg, $from)) {
            echo "Success";
            header("location: index.php");
        }
        else{
            echo "Failed";
            header("location: index.php");
        }
    }
?>