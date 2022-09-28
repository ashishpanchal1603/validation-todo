<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./style.css" />
    
    <title>Login</title>
  </head>
  <body>
   
      <form action="" class="changeForm">
        <h1 class="title">Login Form</h1>
        
          <label for="email" class="">Email </label>
          <input
            type="email"
            class="form-control inputtype"
            id="loginEmail"
            placeholder="name@gmail.com"
          />
        
        
          <label for="password" class="form-label labeltype">Password</label>
          <input
            type="password"
            class="form-control inputtype"
            id="loginPassword"
            placeholder="Enter your Mobile"
          />
        <input type="button" value="Submit" onclick="login()"> 
        <h3>If you Have not Registration <a  href="./index.php" class="loginLink">Back to Registration</h6>
      </form>
    </div>
    <script src="./index.js"></script>
  </body>
</html>
