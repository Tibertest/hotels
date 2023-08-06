<html>
    <head>
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
    <h1 align="center">เข้าสู่ระบบ</h1>
        <form action="chk_login.php" method="POST">
        <div class="row" style="margin-top : 30px">
        <div class="col-sm-2">
            Username :
         </div>
        <div class="col-sm-6">
            <input type="text" class="form-control" name="urname" placeholder="ur name" aria-label="First name">
        </div>
        </div>
        <div class="row" style="margin-top : 30px">
        <div class="col-sm-2">
            password :
         </div>
        <div class="col-sm-6">
            <input type="password" class="form-control" name="pass" placeholder="password" aria-label="First name">
        </div>
        </div>
      
            <div class="row" style="margin-top:30px">
              <div class="col-sm-2">        
                  <input type="submit" class="btn btn-info">
                 </div>
                 <div class="col-sm-2">        
                  <a href="register.php">'register'</a>
                 </div>
            </div>
        
            
</form>

</div>
    </body>
</html>