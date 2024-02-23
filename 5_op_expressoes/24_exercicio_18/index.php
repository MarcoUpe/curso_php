<?php

    // comparacao 1
    if(12 > 5 || "João" === "João"){ // true e true
        echo "True 1 <br>";
    }

    // comparacao 2
    if(1 > 5 || 1){ // false e true
        echo "True 2 <br>";
    }

    // comparacao 3
    if(20 === "20" || 51 >= 31){ // false e true
        echo "True 3 <br>";
    }

?>