<?php

$to      = 'sgb15@hotmail.es';
$subject = 'myself';
$message = generatePass();

if(mail($to, $subject, $message))
{
    echo "<h1>Email has been sent</h1>";
}
else
{
    echo"<h1>Email has not been sent</h1>";
}


function generatePass() {

  $password ="";
  $ASCIII =0;
  $ASCIII2 = 0;
  $symChars= "";
  $choppedLett = "";
  $arrayOfChars="abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
  $arrayOfSym="'#;[]!$%^&*()_+{}@~?><";
  $arrChars = str_split($arrayOfChars);
  $arrSym = str_split($arrayOfSym);

  for($e=0;$e<2;$e++){
      $ASCIII=$arrChars[mt_rand(0, 51)];
      $ASCIII2 = ord($ASCIII[0]);
      $symChars=$arrSym[mt_rand(0, 21)];
      $choppedLett=$arrChars[mt_rand(0, 51)];
      $password=$password+$ASCIII2+$symChars+$choppedLett;
    }
   return $password;
}










?>
