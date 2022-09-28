<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <form action="" class="changeForm">
      <h2 >Profile Change</h2>
      <label for="">Name</label>
      <input type="text" id="changeName" /> <br />
      <label for="">Email</label>
      <input type="email" id="changeEmail" /> <br />
      <label for="">Mobile</label>
      <input type="text" id="changeMobile" /> <br />
      <input type="button" value="Save" onclick="changeProfile()" />
    </form>
  </body>
  <script src="./change.js"></script>
</html>
