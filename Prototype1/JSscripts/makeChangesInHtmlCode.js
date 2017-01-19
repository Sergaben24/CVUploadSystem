<script>
    document.getElementById("staffButton").addEventListener("click", myFunction);
    document.getElementById("studentButton").addEventListener("click",myFunctionRepeated);
    document.getElementById("employerButton").addEventListener("click",myFunctionRepeatedAgain);
    function myFunction() {
        document.getElementById("changeTitle").innerHTML = "KU Talent Staff Login Screen";
        document.getElementById("newUserLink").innerHTML = "<a href='#'>New Staff ?</a>";
    }
    function myFunctionRepeated(){
      document.getElementById("changeTitle").innerHTML = "KU Student Login Screen";
      document.getElementById("newUserLink").innerHTML = "<a href='#'>New Student ?</a>";
    }
    function myFunctionRepeatedAgain(){
      document.getElementById("changeTitle").innerHTML = "KU Employer Login Screen";
      document.getElementById("newUserLink").innerHTML = "<a href='#'>New Employer ?</a>";
    }
  </script>