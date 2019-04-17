<?php
include('session.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>FaxPos :: Dashboard</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="./css/bootstrap.min.css" >

    <!-- Custom style -->
    <link rel="stylesheet" href="./css/dashboard_style.css">
</head>
<body>
    
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand fax-header-font">FaxPos</a>

      <!-- Za alignament, nevidljivi button -->
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link disabled"><span class="sr-only">(current)</span></a>
        </li>
      </ul>

      <!-- Prijava button -->
      <ul class="navbar-nav">
        <li class="nav-item dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i id="welcome">Welcome </i><b><?php echo $login_session; ?></b>
              </button>

           
          <div class="dropdown-menu dropdown-menu-right">

            <span id="logout"><a href="logout.php" class="text-right">Log Out</a></span>
          </div>
        </li>
      </ul>
    </nav>

    <div class="container-fluid">
     <div class="row">
       <nav class="col-sm-3 col-md-2 d-none d-sm-block bg-light sidebar">
         <ul class="nav nav-pills flex-column">
           <li class="nav-item">
             <a class="nav-link active" href="#">Overview <span class="sr-only">(current)</span></a>
           </li>
           <li class="nav-item">
             <a class="nav-link" href="#">Reports</a>
           </li>
           <li class="nav-item">
             <a class="nav-link" href="#">Analytics</a>
           </li>
           <li class="nav-item">
             <a class="nav-link" href="#">Export</a>
           </li>
         </ul>

         <ul class="nav nav-pills flex-column">
           <li class="nav-item">
             <a class="nav-link" href="#">Nav item</a>
           </li>
           <li class="nav-item">
             <a class="nav-link" href="#">Nav item again</a>
           </li>
           <li class="nav-item">
             <a class="nav-link" href="#">One more nav</a>
           </li>
           <li class="nav-item">
             <a class="nav-link" href="#">Another nav item</a>
           </li>
         </ul>

         <ul class="nav nav-pills flex-column">
           <li class="nav-item">
             <a class="nav-link" href="#">Nav item again</a>
           </li>
           <li class="nav-item">
             <a class="nav-link" href="#">One more nav</a>
           </li>
           <li class="nav-item">
             <a class="nav-link" href="#">Another nav item</a>
           </li>
         </ul>
       </nav>

    <main role="main" class="col-sm-9 ml-sm-auto col-md-10 pt-3">
             <h1>Dashboard</h1>

             <section class="row text-center placeholders">
               <div class="col-6 col-sm-3 placeholder">
                 <img src="data:image/gif;base64,R0lGODlhAQABAIABAAJ12AAAACwAAAAAAQABAAACAkQBADs=" width="200" height="200" class="img-fluid rounded-circle" alt="Generic placeholder thumbnail">
                 <h4>Label</h4>
                 <div class="text-muted">Something else</div>
               </div>
               <div class="col-6 col-sm-3 placeholder">
                 <img src="data:image/gif;base64,R0lGODlhAQABAIABAADcgwAAACwAAAAAAQABAAACAkQBADs=" width="200" height="200" class="img-fluid rounded-circle" alt="Generic placeholder thumbnail">
                 <h4>Label</h4>
                 <span class="text-muted">Something else</span>
               </div>
               <div class="col-6 col-sm-3 placeholder">
                 <img src="data:image/gif;base64,R0lGODlhAQABAIABAAJ12AAAACwAAAAAAQABAAACAkQBADs=" width="200" height="200" class="img-fluid rounded-circle" alt="Generic placeholder thumbnail">
                 <h4>Label</h4>
                 <span class="text-muted">Something else</span>
               </div>
               <div class="col-6 col-sm-3 placeholder">
                 <img src="data:image/gif;base64,R0lGODlhAQABAIABAADcgwAAACwAAAAAAQABAAACAkQBADs=" width="200" height="200" class="img-fluid rounded-circle" alt="Generic placeholder thumbnail">
                 <h4>Label</h4>
                 <span class="text-muted">Something else</span>
               </div>
             </section>

             <section class="row text-center placeholders">
               <div class="col-6 col-sm-3 placeholder">
                 <img src="data:image/gif;base64,R0lGODlhAQABAIABAAJ12AAAACwAAAAAAQABAAACAkQBADs=" width="200" height="200" class="img-fluid rounded-circle" alt="Generic placeholder thumbnail">
                 <h4>Label</h4>
                 <div class="text-muted">Something else</div>
               </div>
               <div class="col-6 col-sm-3 placeholder">
                 <img src="data:image/gif;base64,R0lGODlhAQABAIABAADcgwAAACwAAAAAAQABAAACAkQBADs=" width="200" height="200" class="img-fluid rounded-circle" alt="Generic placeholder thumbnail">
                 <h4>Label</h4>
                 <span class="text-muted">Something else</span>
               </div>
               <div class="col-6 col-sm-3 placeholder">
                 <img src="data:image/gif;base64,R0lGODlhAQABAIABAAJ12AAAACwAAAAAAQABAAACAkQBADs=" width="200" height="200" class="img-fluid rounded-circle" alt="Generic placeholder thumbnail">
                 <h4>Label</h4>
                 <span class="text-muted">Something else</span>
               </div>
               <div class="col-6 col-sm-3 placeholder">
                 <img src="data:image/gif;base64,R0lGODlhAQABAIABAADcgwAAACwAAAAAAQABAAACAkQBADs=" width="200" height="200" class="img-fluid rounded-circle" alt="Generic placeholder thumbnail">
                 <h4>Label</h4>
                 <span class="text-muted">Something else</span>
               </div>
             </section>

             
        </div>
    </div>

    <!-- <b id="welcome">Welcome : <i><?php echo $login_session; ?></i></b>
    <b id="logout"><a href="logout.php">Log Out</a></b> -->

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>

</body>
</html>
