function checkValidation() {
    var email = document.getElementById("email").value;
    var emailRegex = /^\S+@\S+\.\S+$/;
  if (!emailRegex.test(email)) {
    alert("Invalid Email Address");
    return false;
  }
  var fname = document.getElementById("fname").value;
  if (fname == "") {
    alert("First Name must be filled out");
    return false;
  }
  var lname = document.getElementById("lname").value;
  if (lname == "") {
    alert("Last Name must be filled out");
    return false;
  }
  var mname = document.getElementById("mname").value;
  if (fname == "") {
    alert("Middle Name must be filled out");
    return false;
  }
}