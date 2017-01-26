<?php





function generatePass() {

    $arrayOfSym="'#;[]!$%^&*()_+{}@~?><";
    $arrayOfChars="abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
    $password="";
    $ranNum = mt_rand(0,51);
    $ranNumII = mt_rand(0,21);

    ;
    get_char_from_arraySym($arrayOfSym,1,$ranNumII);

    for($e=0;$e<4;$e++){
        $char=get_char_from_arrayChars($arrayOfChars,1,$ranNum,true);
        $nAscii=get_char_from_arrayChars($arrayOfChars,1,$ranNum,false) ;
        $symChars=get_char_from_arraySym($arrayOfSym,1,$ranNumII);
        $password=$password+$char+$nAscii+$symChars;
    }
    return $password;
    /*$password ="";
    $ASCIII =0;
    $ASCIII2 = 0;
    $symChars= "";
    $choppedLett = "";*/

    /*
    $arrChars = str_split($arrayOfChars);
    $arrSym = str_split($arrayOfSym);*/

}

function get_char_from_arrayChars($str,$l = 0,$selChar,$boolean) {
    if ($l > 0) {
        $nArray = array();
        $len = mb_strlen($str, "UTF-8");
        /*$len = mb_strlen($str2, "UTF-8*/
        if($boolean == true)
        {
            for ($i = 0; $i < $len; $i += $l) {
                $nArray[] = mb_substr($str, $i, $l, "UTF-8");

            }
            return $nArray[$selChar];


        }
        else{

            for ($i = 0; $i < $len; $i += $l) {
                $nArray[] = ord(mb_substr($str, $i, $l, "UTF-8"));

            }
            return $nArray[$selChar]; 


        }
    }

}

function get_char_from_arraySym($str,$l = 0,$selChar) {
    if ($l > 0) {
        $nArray = array();
        $len = mb_strlen($str, "UTF-8");
        /*$len = mb_strlen($str2, "UTF-8");*/
        for ($i = 0; $i < $len; $i += $l) {
            $nArray[] = mb_substr($str, $i, $l, "UTF-8");
            
        }
        return $nArray[$selChar];
    }

}

echo generatePass();

?>
