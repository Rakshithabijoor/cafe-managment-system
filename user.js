function validatei() {
  var username = document.getElementById("uname").value;
  var password = document.getElementById("password").value;
  var cpassword = document.getElementById("cpassword").value;
  var email = document.getElementById("email").value;
  var phone = document.getElementById("phone").value;

  if (username != "" && password == cpassword) {
    if (email != "" && phone != "") {


      window.open("user1.html")
    }
  }
  else {
    alert("check out the fields again!")
  }
}
