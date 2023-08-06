<html>
    <head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <style>
        #grad {
  background-image: linear-gradient(to );
}
    </style>
</head>

    <body id="grad">
    <div class="container" style="padding: 50px">
    <h1 align="center">สมัครสมาชิก</h1>
        <form action="chk_register.php" method="POST">
        <div class="row">
        <div class="col">
            <input type="text" class="form-control" name="fname" placeholder="First name" aria-label="First name">
        </div>
        <div class="col">
            <input type="text" class="form-control" placeholder="Last name" aria-label="Last name" name="lname">
        </div>
        </div>
  <div class="row" style="margin-top:30px">
    <div class="col">
        <input type="text" class="form-control" placeholder="tel." aria-label="tel." name="tel">
    </div>
    </div>
  <div class="row" style="margin-top:30px">
  <div class="col">
    <input type="text" class="form-control" placeholder="ur name" aria-label="ur name" name="urname">
  </div>
  <div class="col">
    <input type="password" class="form-control" placeholder="password" aria-label="password" name="password">
  </div>
</div>
  <div class="row" style="margin-top:30px">
  <input type="submit" class="btn btn-info">
</div>
</form>
<a href="login.php"><----back</a>
</div>
    </body>
</html>