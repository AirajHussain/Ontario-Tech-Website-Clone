<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="Stylesheet" href = "Style.css">
  <title>Login Page</title>
  <script src = "LOGIN.js"> </script>
</head>
<body>
    <div style = "text-align : center; "><h1 class = "bkg">Login Page</h1></div>
    <div class = "AdminForm">
    <form id="myform" action="" method="post">
          <p> Username</p>
          <input class =form-control type="text" name="username" placeholder="Enter name Here" id = "username"><br>
          <p> Password</p>
          <input class =form-control type="password" name="password" placeholder="Enter Password Here" id = "password">

           <button type="submit"name="submit" value="Login" onclick="validate()">Submit</button>

  </form>
</div>

  <script>
  $(document).ready(function(){

  $("#myform").validate({
    rules: {
      username: {
       minlength:5
    },
    password: {
     minlength:5
  },

      },

        messages: {
          username: {
            minlength: "Please enter at least 5 characters"
        },
        password: {
          minlength: "Please enter at least 5 characters"
      },

        },
      });

  });

  </script>

</body>
</html>
