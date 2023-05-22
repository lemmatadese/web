function validate() {
  var email = document.getElementById("email").value;  
  var pass = document.getElementById("pass").value;  
  const emailError=document.getElementById('em');
  
  var emailRegex = /^\S+@\S+\.\S+$/;
  if (!emailRegex.test(email)) {
    emailError.innerHTML='invalid email ';
        return false;
  }
  
  if(pass.length<=6){
    emailError.innerHTML='invalid password altleast 6 character ';
        return false;
}

}
  

  

 