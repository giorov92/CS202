<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="CSS/main.css">
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

    <title>About | Bellingham Hotel</title>
</head>

<body>
    <div id="loadingDiv">
        <div class="loader spinner"></div>
    </div>
    
    <?php include('include/header.php'); ?>

    <section class="heroimage">
        <div id="particles-js">
            <div class="heroitems">
                <div class="container">
                    <h1>About Bellingham Hotel</h1>
                    <p>Discover The World’s #1 Five Star Hotel</p>
                </div>
            </div>
        </div>
    </section>
    <div class="clearfix"></div>

    <main>
        <section class="main-padding bg-color bg-color-helper-standard box-flex">
            <div class="container about">
                <div>
                    <h1 class="heading">About Us</h1>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores provident fugiat quod eos
                        possimus aperiam ducimus repellendus dicta eligendi atque, fugit architecto quam illo
                        exercitationem quas iste totam aliquid facere.
                    </p>
                </div>
            </div>
            <div class="container contact">
                <div>
                    <h2 class="heading">Contact Us</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate, veritatis dignissimos! Rem
                        necessitatibus eum aspernatur, mollitia excepturi magnam reprehenderit commodi sed amet vero
                        dolorum, nulla illum porro aperiam! Culpa, fuga!</p>
                    <br>
                    <p><img src="images/img_1.jpg" width="100%" alt="Read More Images"></p>
                </div>
                <div>
                    <form class="contactform" method="post" action="hotelcontact.php" onsubmit="return formValidator()"
                        and autocomplete>
                        <label for="name">Name</label> <br>
                        <input type="text" name="name" id="name"><br>
                        <br>
                        <label for="phone">Phone</label> <br>
                        <input type="text" name="phone" id="phone"><br>
                        <br>
                        <label for="email">Email</label> <br>
                        <input type="email" name="email" id="email"><br>
                        <br>
                        <label for="textarea">Write Message</label> <br>
                        <textarea name="textarea" id="textarea" rows="10" cols="30"></textarea><br>
                        <br>
                        <input class="button" type="submit" value="Send Message">
                    </form>
                </div>
            </div>

        </section>

        <div class='clearfix'></div>

        <?php include('include/subscribe.php'); ?>
    </main>

    <?php include('include/footer.php'); ?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.3.1.js"></script>
    <script src="js/particles.js"></script>
    <script src="js/app.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.0/js/bootstrap.min.js"></script>
    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="js/pageloader.js"></script>
    <script src="js/main.js"></script>
</body>

</html>