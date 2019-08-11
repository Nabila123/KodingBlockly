<?php
    switch (@$_GET['page']) {
        default: include "include/home.php";
        break;

        case 'Tone' : if(!file_exists ("include/app-complete/index.html")) 
        die ("File about tidak ada"); 
        include "include/app-complete/index.html"; 
        break;

        case 'HelpEl' : if(!file_exists ("include/app-complete/index.html")) 
        die ("File about tidak ada"); 
        include "include/app-complete/index.html"; 
        break;

        case 'Custom' : if(!file_exists ("include/custom/index.html")) 
        die ("File about tidak ada"); 
        include "include/custom/index.html"; 
        break;
    }
?>