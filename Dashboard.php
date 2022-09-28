<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="style.css" />
  </head>
  <body onload="currenTime(); reload()">
    <nav>
      <ul>
        <li><a href="#">Dashboard</a></li>
        <li><a href="./profileChange.php">ChangeProfile</a></li>
        <li><a href="./changePassword.php">ChangePassword</a></li>
        <li><a href="./task.php">Task</a></li>

        <li class="logout"><a onclick="logout()">LogOut</a></li>
        <li id="time"></li>
      </ul>
    </nav>

    <h1 class="Dtitle">User Dashboard</h1>
    <table
      aria-describedby="table details"
      class="table"
      cellspacing="10"
      cellpadding="10"
    >
      <tr>
        <td class="row">UserName</td>
        <td id="dashName"></td>
      </tr>
      <tr>
        <td>UseEmail</td>
        <td id="dashemail"></td>
      </tr>
      <tr>
        <td>UserMobile</td>
        <td id="dashmobile"></td>
      </tr>
      <tr>
        <td>Gender</td>
        <td id="dashgender"></td>
      </tr>
      <tr>
        <td>UserDob</td>
        <td id="dashBirth"></td>
      </tr>
    </table>

    <div class="weather">
      <h1>Weather Details</h1>
      <hr />
      <img src="" alt="" id="icon" />
      <h2 id="temperature"></h2>
      <h2 id="location"></h2>
      <h2 id="description"></h2>
    </div>

    <div>
      <img src="" class="gif" alt="" id="gif" />
    </div>
    <script src="./dashborad.js"></script>
  </body>
</html>
