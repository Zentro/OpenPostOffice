<?php
define('IN_APP', 1);

ob_start();
session_start();

require_once 'globals.include.php';

?>
<!DOCTYPE html>
<html>

<head>
    <title>Contact Us</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <?php include 'navbar.include.php'; ?>
    <body background="img/Houston-Road-Map.png" style="background-repeat: no-repeat; background-size: cover; background-position-y: -550px;">
    <section class="vh-100">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col">
          <div class="card card-stepper shadow" style="border-radius: 10px;">
            <div class="card-body p-4">
  
                <div class="d-flex justify-content-center align-items-center">
                    <form action="#">
                        <label for="tracknum">Enter Tracking Number : </label>
                        <input type="text" id="tracknum" name="tracknum" required>
                        <button class="btn bg-primary text-white" type="button">Track order details</button>
                    </form>
                </div>
              
                <hr class="my-4">
                <table>

                    <div class="d-flex flex-row justify-content-between align-items-center align-content-center" id="puttrackhere">
                    <tr>
                        <td>Tracking Number : </td>
                    </tr>
                    <tr>

                    </tr>
                    </div>

                    <div class="d-flex flex-row justify-content-between align-items-center" id="status">
                        <tr>
                            <td>Status : </td>
                        </tr>
                    </div>

                </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>