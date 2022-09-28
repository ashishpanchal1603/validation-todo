var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
var phoneno = /^(\+[91]{2})([789][0-9]{9})$/;
var userArray = [];

function Submit() {
  let userName = document.getElementById("userName").value;
  let userEmail = document
    .getElementById("userEmail")
    .value.trim()
    .toLowerCase();
  let mobile = document.getElementById("mobile").value;
  let password = document.getElementById("password").value;
  let birthDate = document.getElementById("dob").value;
  let male = document.getElementById("male").value;
  let gender = male.checked === true ? "male" : "male";
  if (
    userName === "" ||
    userEmail === "" ||
    mobile === "" ||
    birthDate === "" ||
    password === ""
  ) {
    alert("please enter the all fill");
  } else {
    if (mobile.match(phoneno)) {
      if (userEmail.match(mailformat)) {
        let userObject = {
          userName: userName,
          userEmail: userEmail,
          mobile: mobile,
          password: password,
          birthDate: birthDate,
          gender: gender,
        };

        let dataStore = JSON.parse(localStorage.getItem("userdata"));

        if (dataStore == null) {
          userArray.push(userObject);
          localStorage.setItem("userdata", JSON.stringify(userArray));
        } else {
          dataStore.push(userObject);
          localStorage.setItem("userdata", JSON.stringify(dataStore));
        }
        alert("Registration Successfully");
        window.open("./login.php");
      } else {
        console.log("please enter a valid user Email");
      }
    } else {
      console.log("please enter a valid phone number");
    }
  }
}

function login() {
  const users = JSON.parse(localStorage.getItem("userdata"));
  if (users == null) {
    alert("Invalid Credentials");
    return false;
  }

  const email = document
    .getElementById("loginEmail")
    .value.trim()
    .toLowerCase();
  const password = document.getElementById("loginPassword").value;
  let isUser = false;

  for (let i = 0; i < users.length; i++) {
    if (email == users[i].userEmail && password == users[i].password) {
      sessionStorage.setItem("userIndex", i);
      sessionStorage.setItem("email", email);
      isUser = true;
      break;
    }
  }
  if (isUser) {
    alert("login SuccessFully");
    window.location = "./Dashboard.php";
  } else {
    alert("Invalid Credentials");
  }
}
