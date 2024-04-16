var check = false;
var check_name = false;
var myform = document.querySelector("form");
function processForm() {
  if (myform.password.value == myform.conform_password.value) {
    check = true;
    return check;
  } else {
    alert("Password does not match");
    document.querySelector("password").reset();
    document.querySelector("conform_password").reset();
    return check;
  }
  // if(myform.username.value == "Alpha"){
  //     check_name = true;
  // }
  // else{
  //     alert("User Name is incorrect")
  // }
}
