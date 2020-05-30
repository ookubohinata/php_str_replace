<?php
    $str_base = "PHP4_PHP5_PHP7";
    // 第１＝ターゲット文字,第２＝置き換え文字,第３＝元の文字列
    echo $str = str_replace("PHP5","PHP5.5",$str_base)."<br>";

    $str_base2 = "大丈夫です";
    echo $str2 = str_replace("です","ます",$str_base2)."<br>";

    $str_base3 = "緊張してますか";
    echo $str3 = str_replace("緊張","浣腸",$str_base3)."<br>";

    $str_base4 = "東京,名古屋,京都,東京,大阪";
    $replace = str_replace("東京","北海道",$str_base4);
    echo $replace."<br>";
?>