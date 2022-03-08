<?php 
    $suhu = 38;

    if($suhu > 38){ 
        echo "maaf, tidak boleh masuk"; //jika suhu diatas 38 maka akan keluar output ini
    } elseif ($suhu == 38) {
        echo "tetap jaga kesetan";
    } else {
        echo "silahkan masuk"; //jika suhu dibawah 38 maka akan keluar output ini
    } 