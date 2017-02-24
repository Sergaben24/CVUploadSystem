
<?php

//global variables
$holdFPass="";
$tempPassword ="";
$tempPasswordII="";
$holdSPass="";
$finalPass;
//-----------------------

//------------------------------------------------------
// This function is used to generate a temporary password
function generateTempPass() {

    $ranNum = mt_rand(0,51);
    $ranNumII = mt_rand(0,21);
    $arrayOfSym="'#;[]!$%^&*()_+{}@~?><";
    $arrayOfChars="abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";

    for($e=0;$e<4;$e++){
        $char=get_char_from_arrayChars($arrayOfChars,1,$ranNum,true);
        $nAscii=get_char_from_arrayChars($arrayOfChars,1,$ranNum,false) ;
        $symChars=get_char_from_arraySym($arrayOfSym,1,$ranNumII);
        $tempPassword="$char$nAscii$symChars";
    }
    return $tempPassword;    

} 

//------------------------------------------------------------

//-----------------------------------------------------------------
// this function will generate a password
function generatePass(){

    $arrayOfChars="abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
    $ranNum = mt_rand(0,51);


    
        $holdFPass = generateTempPass();
        $finalPass = get_char_from_arrayChars($arrayOfChars,1,$ranNum,false);

        for($e=0;$e<5;$e++)
        {
            $array[$e] = $holdFPass;

            if($array[$e]===generateTempPass())
            {

                $array[$e] = generateTempPass();

            }        
            else
            {

                $array[$e] = generateTempPass();  
            }    

            $finalPass .= $array[$e];        
        }

    
    
    return $finalPass;


}
//------------------------------------------------------------

//-----------------------------------------------------------------
// this function will check whether the password is long enough
//--------------------------------------------------------------
function checkPass(){
    
    if(strlen(generatePass())<12)
    {
        echo "password too short, generate another password please";
    }
    else
    {
       echo generatePass();
    }
    
    
    
}
//------------------------------------------------------------------------------------
// this function has been used to split a string of letters in single characters and put them in an array
// the function has not been created by me, it is and addaptation of http://stackoverflow.com/questions/9438158/split-utf8-string-into-array-of-chars by hakre
function get_char_from_arrayChars($str,$l = 0,$selChar,$boolean) {  

    if ($l > 0) {
        $nArray = array();
        $len = mb_strlen($str, "UTF-8");
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
//--------------------------------------------------------------------

//------------------------------------------------------------------------------------
// this function has been used to split a string of symbols in single characters and put them in an array
// the function has not been created by me, it is and addaptation of http://stackoverflow.com/questions/9438158/split-utf8-string-into-array-of-chars by hakre                                              
function get_char_from_arraySym($str,$l = 0,$selChar) {
    if ($l > 0) {
        $nArray = array();
        $len = mb_strlen($str, "UTF-8");
        for ($i = 0; $i < $len; $i += $l) {
            $nArray[] = mb_substr($str, $i, $l, "UTF-8");

        }
        return $nArray[$selChar];
    }

}
//-----------------------------------

//------------------------------
//call to the checkPass
checkPass();
//------------------

?>
