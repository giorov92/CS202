<?php 



?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="CSS/main.css">
    <link rel="stylesheet" href="CSS/gallery.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:300,400,700">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

    <!-- Favicon -->
    <link rel="shortcut icon" href="favicon/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" sizes="57x57" href="favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
    <link rel="manifest" href="favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <title>Reservation | Bellingham Hotel</title>
</head>

<body>

    <?php include('include/header.php'); ?>

    <section class="heroimage">
        <div>
            <div class="heroitems">
                <div class="container">
                    <h1>Reservation</h1>
                    <p>Discover our world's #1 Luxury Room For VIPs</p>
                </div>
            </div>
        </div>
    </section>
    <div class="clearfix"></div>

    <main>
        <div class="clearfix"></div>
        <section class="main-padding bg-color bg-color-helper-index">
            <div class="container resconfirm">
                <div>
                    <h4>Get Inspiration For Your Next Trip</h4>
                    <img src="images/gallery (1).jpeg" alt="Inspired Yet?" width="100%">
                </div>
                <div class="">
                    <!-- START PHP -->
                    <?php 
                        include('include/config.php');

                        $arrivedate = $_POST['arrivedate'];
                        $departdate = $_POST['departdate'];
                        $luxury_executive_lounge = $_POST['luxury_executive_lounge'];
                        $lel_guests = $_POST['lel_guests'];
                        $exquisite_presidential_suite = $_POST['exquisite_presidential_suite'];
                        $eps_guests = $_POST['eps_guests'];
                        $executive_club_room = $_POST['executive_club_room'];
                        $ecr_guests = $_POST['ecr_guests'];
                        $bellingham_mini_suite = $_POST['bellingham_mini_suite'];
                        $bms_guests = $_POST['bms_guests'];
                        $the_murphy_room = $_POST['the_murphy_room'];
                        $tmr_guests = $_POST['tmr_guests'];
                        $deluxe_suite = $_POST['deluxe_suite'];
                        $ds_guests = $_POST['ds_guests'];
                        $email = $_POST['email'];
                        $message = $_POST['message'];

                        $sql = "INSERT INTO reserve(`arrivedate`,`departdate`,`luxury_executive_lounge`,`lel_guests`,`exquisite_presidential_suite`,`eps_guests`,`executive_club_room`,`ecr_guests`,`bellingham_mini_suite`,`bms_guests`,`the_murphy_room`,`tmr_guests`,`deluxe_suite`,`ds_guests`,`email`,`message`) VALUES ('$arrivedate','$departdate','$luxury_executive_lounge','$lel_guests','$exquisite_presidential_suite','$eps_guests','$executive_club_room','$ecr_guests','$bellingham_mini_suite','$bms_guests','$the_murphy_room','$tmr_guests','$deluxe_suite','$ds_guests','$email','$message')";

                            if(!mysqli_query($con,$sql)){

                                echo "New Reservation Not Made";
                            }
                            else{
                                echo "<script> alert('Reservation Request Sent. Thank You!')</script>";
                            }
                    
                            //troubleshooter
                            // $result = mysqli_query($con,$sql);
                            // if (!$result) {
                            // die(mysqli_error($con));
                            // }
                    ?>
                    <!-- END PHP -->
                    <h2 class="">Check <?php echo "$email"; ?> for Details</h2>
                    <p>Be sure to check your junk or spam folder if you can't see it after a few minutes and refreshing
                        your email client.</p>
                </div>

            </div>

        </section>

        <?php include('include/subscribe.php'); ?>
    </main>

    <?php include('include/footer.php'); ?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>