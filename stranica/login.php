<!doctype html>
<?php session_start(); ?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ljekarne Hauska</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/sign-in/">
    <!-- Bootstrap core CSS -->
    <!--<link href="/docs/5.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="include/css.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <meta name="theme-color" content="#7952b3">
    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>  
    <!-- Custom styles for this template -->
  </head>
  <body class="text-center"> 
        <main class="form-signin">
        <?php 
          include "spoj.php";
          $msg='';

              if(isset($_POST['login']) && !empty($_POST['email']) && !empty($_POST['password'])){
                  $sql="SELECT * FROM zaposlenik";
                  $q=mysqli_query($conn,$sql);

                  while($redak=mysqli_fetch_array($q,MYSQLI_ASSOC)){
                      if($_POST['email'] == $redak["email"] && md5($_POST['password']) == $redak['lozinka']) {
                          $_SESSION['aktivan'] = true;
                          $_SESSION['timeout'] = time();
                          $_SESSION['email'] = $_POST['email'];
                          $_SESSION['ime'] = $redak['ime'];
                          $_SESSION['prezime'] = $redak['prezime'];
                          $_SESSION['uloga'] = $redak['uloga'];
                          $_SESSION['lozinka'] = $_POST['password'];
                          if($redak['uloga']=="admin")
                              header("Location: nadzornaPloca.php");
                          else
                              header("Location: profil.php");
                      }else {
                          $msg='Krivi email ili lozinka';
                      }
                  }
              }
        ?>
        <form action="" method="post">
          <h4><?php echo $msg; ?></h4>
          <br>
          <br>
          <br>
            <img class="mb-4" src="img/Logo.png" alt="" width="100" height="70">
            <h1 class="h3 mb-3 fw-normal">Please sign in</h1>

            <div class="form-floating" id="formFloating" id="loggin">
            <input type="email" class="form-control" id="floatingInput" name="email" placeholder="name@example.com" required autofocus>
            <label for="floatingInput">Email address</label>
            </div>
            <div class="form-floating" id="formFloating" id="loggin">
            <input type="password" class="form-control" id="floatingPassword" name="password" placeholder="Password" required><button type="button" id="showPassword" name="showPassword" class="btn btn-outline-dark">Show Password</button>
            <label for="floatingPassword">Lozinka</label>     
            </div>
            
            <div class="form-floating" id="formFloating">
            <button class="w-50 btn btn-lg btn-primary" type="submit" name="login" value="login" id="buton">Sign in</button>     
            <input type="button" class="w-50 btn btn-lg btn-secondary" id="buton" onclick="location.href='../index.php'" value="Povratak" />    
            </div>  
            
            <p class="mt-5 mb-3 text-muted">&copy; <?php echo date("Y")?> Ljekarne Hauska</p>
        </form>
        </main> 
        <script>
          $(document).ready(function(){  
            $('#showPassword').on('click', function(){  
              var passwordField = $('#floatingPassword');  
              var passwordFieldType = passwordField.attr('type');
              if(passwordField.val() != '')
              {
              if(passwordFieldType == 'password')  
              {  
                passwordField.attr('type', 'text');  
                $(this).text('Hide Password');  
              }  
              else  
              {  
                passwordField.attr('type', 'password');  
                $(this).text('Show Password');  
              }
              }
              else
              {
              alert("Please Enter Password");
              }
            });  
          });  
        </script>
  </body>
</html>
