<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Customer | Register</title>
  </head>
  <body class = "bg-light">
      <h1 style = "text-align: center"> Register Customer</h1>
    <form action="/customer/signup" method="POST" style="position: relative; left : 1%;">
        <div class="form-group col-md-6">
            <label for="inputEmail4">Name</label>
            <input type="text" class="form-control" id="inputEmail4" placeholder="Username" name = "name">
        </div>
        <div class="form-group col-md-6">
            <label for="inputPassword4">Address</label>
            <input type="text" class="form-control" id="inputPassword4" placeholder="Address" name = "address">
        </div>
        <div class="form-group col-md-6">
                <label for="inputAddress"> Email</label>
                <input type="email" class="form-control" id="inputAddress" placeholder="Example: user@gmail.com" name = "email">
        </div>
        <div class="form-group col-md-6">
                <label for="inputCity">Password</label>
                <input type="password" class="form-control" id="inputCity" name = "password">
        </div>
        <button type="submit" class="btn btn-primary" style="position: relative; left: 1%">Sign in</button>
      </form>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>
