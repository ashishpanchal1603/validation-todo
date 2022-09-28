<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Registration From</title>
    <link rel="stylesheet" href="./style.css" />
  </head>
  <body>
    <div class="container">
      <form action="" class="changeForm">
        <h2 class="title">Registration From</h2>
        <label for="Name">Name</label>
        <input
          type="text"
          class=""
          id="userName"
          placeholder="enter your Name"
          required
        />
        <br />
        <label for="email">Email </label>
        <input
          type="email;"
          class=""
          id="userEmail"
          placeholder="name@example.com"
          required
        />
        <br />
        <label for="mobile" class="">Mobile </label>
        <input
          type="text"
          class=""
          id="mobile"
          placeholder="Enter your Mobile"
          required
        />
        <br />
        <div style="display: flex">
          <div>
            <label for="gender">gender</label>
          </div>
          <div style="margin-left: 20px">
            <input
              class=""
              type="radio"
              name="gender"
              id="male"
              value="option1"
              required
            />
          </div>
          <div>
            <label class="" for="maleGender ">Male</label>
          </div>
          <div style="margin-left: 20px">
            <input
              class=""
              type="radio"
              name="gender"
              id="female"
              value="male"
              required
            />
          </div>
          <div>
            <label class="" for="femaleGender">Female</label>
          </div>
        </div>
        <br />
        <label for="Dob" class="">BirthDate</label>
        <input
          type="date"
          class=""
          id="dob"
          placeholder="Enter your BirthDate "
          required
        />
        <br />
        <label for="password" class="">Password</label>
        <input
          type="password"
          class=""
          id="password"
          placeholder="Enter your password"
          required
        />
        <br />
        <input
          type="button"
          value="Submit"
          class="saveButton"
          onclick="Submit()"
        />

        <h2>
          If you already Registration So go login
          <a href="./login.html" class="loginLink">login</a>
        </h2>
      </form>
    </div>
    <script src="./index.js"></script>
  </body>
</html>
