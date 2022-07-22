<!--  Lopping while array  -->
<?php

    $aplikasi[1]='gtAkademik';
    $aplikasi[2]='gtFinansial';
    $aplikasi[3]='gtPerizinan';
    $aplikasi[4]='eCampusz';
    $aplikasi[5]='eOviz';


    echo "looping menggunakan while <br><br>";
    
    $indeks=1;
    while($indeks <= count($aplikasi)){
    echo $aplikasi[$indeks]."<br>";
    $indeks++;
    }

?>
