<?php

     function funties($voertuig)
     {
        if( $voertuig == "auto"){
            echo "=een auto heeft 4 wielen";
        }
        elseif( $voertuig == "fiets"){
            echo "een fiets heeft 2 wielen";
        } 
        return;
     }

     funties("fiets");
    
?>