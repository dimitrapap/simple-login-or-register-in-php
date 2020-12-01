
<html>
<head>
    <title> User Register </title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" 
    href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
   
   <div class="container">
      <div class="login-box">
      <div class="row">
      <div class="col-md-6 login-right">
         <h2> Register Here </h2>
         <form action="registration.php" method="post">
           <div class="form-group">
           <label> Username </label>
           <input type="text" name="user" class="form-control" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
           </div>
           <div class="form-group">
           <label> Password </label>
           <input type="password" name="password" class="form-control" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
           </div>
           <div class="form-group">
           <label> Email </label>
           <input type="email" name="email" class="form-control" pattern="[a-zA-Z\d\._]+@[a-zA-Z\d\._]+\.[a-zA-Z\d]{2,}$"  title="example: characters@characters.com" required>
           </div>
           <div class="form-group">
           <label> Telephone Number </label>
           <input type="text" name="number" class="form-control" pattern="[(][\d]{3}[)][\d]{3}[-][\d]{4}$" title="(xxx)xxx-xxxx" required>
           </div>
           <button type="submit" class="btn btn-primary"> Register </button>
          
      </div>
      </div>
      </div>
      </div>
</body>
</html>