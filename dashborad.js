function reload() {
  const userIndex = sessionStorage.getItem("userIndex");
  const sessionEmail = sessionStorage.getItem("email");
  let aUser = JSON.parse(localStorage.getItem("userdata"));
  let oUser = {};
  oUser = aUser[userIndex];
  if (sessionEmail === null) {
    window.location = "./index.php";
  }

  document.getElementById("dashName").innerHTML = oUser.userName;
  document.getElementById("dashemail").innerHTML = oUser.userEmail;
  document.getElementById("dashmobile").innerHTML = oUser.mobile;
  document.getElementById("dashBirth").innerHTML = oUser.birthDate;
  document.getElementById("dashgender").innerHTML = oUser.gender;

  navigator.geolocation.getCurrentPosition((position) => {
    let lat = position.coords.latitude;
    let lon = position.coords.longitude;

    let api = "https://api.openweathermap.org/data/2.5/weather";
    let apiKey = "f146799a557e8ab658304c1b30cc3cfd";

    url =
      api +
      "?lat=" +
      lat +
      "&lon=" +
      lon +
      "&appid=" +
      apiKey +
      "&units=imperial";

    console.log(url);
    fetch(url) //api for the get request
      .then((response) => response.json())
      .then((data) => {
        document.getElementById("temperature").innerHTML =
          data.main.temp + "f°";
        document.getElementById("icon").src = data.weather[0].icon + "png";
        document.getElementById("location").innerHTML =
          data.name + " (" + lat + "°, " + lon + "°)";
        document.getElementById("description").innerHTML = data.weather[0].main;
      });
  });
  fetch(
    "https://api.giphy.com/v1/gifs/search?q=spiderman+cat&api_key=AdqSuQfxgFIDAcPaU5om8iv86DBEY3FV"
  )
    .then((response) => response.json())
    .then((json) => {
      console.log(json.data);
      count = 0;
      setInterval(() => {
        document.getElementById("gif").src =
          json.data[count].images.original.url;
        count++;
      }, 2000);
    });
}
reload();

function logout() {
  sessionStorage.clear();
  window.open("./login.php");
}

function currenTime() {
  setInterval(() => {
    const d = new Date();
    document.getElementById(
      "time"
    ).innerText = `${d.getHours()}:${d.getMinutes()}:${d.getSeconds()}`;
  }, 10);
}
