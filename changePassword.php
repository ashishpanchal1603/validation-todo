<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Change-Password</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <form action="" class="changeForm">
      <h1 class="title">Change Password</h1>
          <br /><br />
          <div class="">
            <label for="old-password" class="lable">Old Password</label>
            </div>
            <div>
            <input
              type="password"
              class=""
              id="oldPassword"
            />
          </div>

          <div class="">
           
            <label for="new-password" class="lable">New Password</label>
          </div>
          <div>
            <input
              type="password"
              class=""
              id="newpassword"
            />
          </div>
          <div class="col-md-12 m-auto">
            <label for="confirm-password" class="lable"
              >Confirm Password</label
            >
          </div>
          <div>
            <input
              type="password"
              class=""
              id="conpassword"
            />
          </div>
          <div class="">
            <input
              type="button"
              value="Save"
              class="saveButton"
              onclick="changePassword()"
            />
          </div>
        </div>
      </div>
    </form>

  </body>
  <script src="./change.js"></script>
</html>
