var aUser = [];
function changePassword() {
  let aUser = JSON.parse(localStorage.getItem("userdata"));
  let oUser = {};
  const userIndex = sessionStorage.getItem("userIndex");

  oUser = aUser[userIndex];
  console.log(oUser.password);
  let oPass = document.getElementById("oldPassword").value;
  const newPassword = document.getElementById("newpassword").value;
  const conPassword = document.getElementById("conpassword").value;
  if (oPass == "" || newPassword == "" || conPassword == "") {
    alert("Please enter passwords");
  }
  if (oPass === oUser.password) {
    if (newPassword === conPassword) {
      aUser[userIndex].password = newPassword;
      localStorage.setItem("userdata", JSON.stringify(aUser));
      alert("password change SuccessFully ");
      window.open("./Dashboard.php");
    } else {
      alert(" password and confirm password is mis match ");
      return false;
    }
  } else {
    alert("old password is incorrect");
    return false;
  }
  return false;
}

function changeProfile() {
  let aUser = JSON.parse(localStorage.getItem("userdata"));
  let oUser = {};
  const userIndex = sessionStorage.getItem("userIndex");
  oUser = aUser[userIndex];
  let changeName = document.getElementById("changeName").value;
  const changeEmail = document.getElementById("changeEmail").value;
  const changeMobile = document.getElementById("changeMobile").value;
  if (changeName == "" || changeEmail == "" || changeMobile == "") {
    alert("Please enter a all field");
  } else if (changeName == "") {
    alert("Please enter a Name");
  } else if (changeEmail == "") {
    alert("Please enter a Email");
  } else if (changeMobile == "") {
    alert("Please enter a Mobile");
  } else {
    aUser[userIndex].userEmail = changeEmail;
    aUser[userIndex].mobile = changeMobile;
    aUser[userIndex].userName = changeName;
    localStorage.setItem("userdata", JSON.stringify(aUser));
    window.open("./Dashboard.php");
  }
}
