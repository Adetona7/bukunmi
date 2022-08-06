<?php 
$connection=new mysqli('localhost','root','','bukunmi');

if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $subject=$_POST['subject'];
    $message=$_POST['message'];

    $query = "insert into `bukunmi` (name,email,subject,message) values('$name','$email','$subject','$message')";
    $result = mysqli_query($connection, $query);
    if($result){
        $_SESSION['status'] = "Successfully submitted";
    }else{
        $_SESSION['status'] = "error";
    }
}

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Fonts and Icons -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@300&display=swap" rel="stylesheet">
        <script src="https://kit.fontawesome.com/9cbe889031.js" crossorigin="anonymous"></script>

        <!-- Bootstrap core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

        <title></title>

        <style>
            body{
                /* color: rgb(1, 43, 1); */
                font-family: 'Kanit', sans-serif;
            }
            a{
                text-decoration: none;
                color: rgb(22, 190, 22);
                font-weight: 100;
            }
            a:hover{
                color: rgb(207, 201, 201);
            }
            hr{
                width: 75%;
                margin: auto;
            }
            u{
                color: green;
            }
        </style>
    </head>
    <body class="bg-light">
        <div class="m-auto text-center pt-4">
            <a class="" href="index.html" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Home" style="text-decoration: none;">
              <i class="fa fa-home fa-lg p-4 text-success rounded-3 me-2" aria-hidden="true" style="background-color:white;"></i>
            </a>
            <a class="active" href="contact.html" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Contact" style="text-decoration: none;">
              <i class="fa-solid fa-address-book text-success fa-lg p-4 rounded-3 me-2 ms-2" aria-hidden="true" style="background-color:white;"></i>
            </a>
            <a class="" href="#" data-bs-toggle="tooltip" data-bs-placement="bottom" title="View Details" style="text-decoration: none;">
              <i class="fa-solid fa-list text-success fa-lg p-4 rounded-3 me-2 ms-2" aria-hidden="true" style="background-color:white;"></i>
            </a>
          </div>

        <section class="container mt-4">
            <p class="display-6 fw-bold text-center"><u>CONTA</u>CT ME</p>
            <p class="text-center">Ready to work with me?</p>

            <div class="row">
                <div class="col-lg-6 text-center">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="bg-white rounded-3 shadow pt-3">
                                <i class="fa-solid fa-phone fa-2x rounded-circle bg-success text-white p-4"></i>
                                <p class="fw-bold mt-1">WHATSAPP / CALL ME</p>
                                <p class="fw-bold">WhatsApp: <a href="tel:+2349071914338" class="">+2349071914338</a></p>
                                <p class="fw-bold">Call: <a href="tel:+2348156396082" class="">+2348156396082</a></p>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="bg-white rounded-3 shadow pt-3">
                                <i class="fa-solid fa-location-dot fa-2x rounded-circle bg-success text-white p-4"></i>
                                <p class="fw-bold mt-1">ADDRESS</p>
                                <p>University of Ibadan.</p>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="bg-white rounded-3 shadow pt-3">
                                <i class="fa-solid fa-envelope fa-2x rounded-circle bg-success text-white p-4"></i>
                                <p class="fw-bold mt-1">E-MAIL ME</p>
                                <p><a href="mailto:adetonabukum@gmail.com">Adetonabukum@gmail.com</a></p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="col-md-12">

                        <?php
                        if(isset($_SESSION['status'])){

                        ?>

                            <div class="alert alert-success alert-dismissible fade show">
                                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                                <strong>Success!</strong> <?php echo $_SESSION['status']; ?>
                            </div>

                        <?php

                            unset($_SESSION['status']);
                        }
                        

                        ?>

                        <div class="bg-white p-4 rounded-3 shadow">
                            <p class="fw-bold">Send me a message</p>
                            <form class="text-center" method="POST">
                                <div class="row">
                                    <div class="col form-group">
                                        <!-- <label>Name:</label> -->
                                        <input type="text" name="name" class="form-control" placeholder="Your name">
                                    </div>
                                    <div class="col form-group">
                                        <!-- <label>Name:</label> -->
                                        <input type="email" name="email" class="form-control" placeholder="Your email">
                                    </div>       
                                    <div class="mt-3 mb-3">
                                        <input type="text" name="subject" class="form-control" placeholder="Subject">
                                    </div> 
                                    <div class="form-group mb-3">
                                        <textarea name="message" class="form-control" rows="5" placeholder="Message"></textarea>                              
                                    </div>
                                    <div>
                                        <button type="submit" name="submit" class="btn btn-success">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </section>
    </body>
</html>