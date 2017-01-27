
$(document).ready(function(){
    $("#generateBtn").click(function(){
        $("#displayPass").load("../PhpScripts/passwordGen.php")
    });
});