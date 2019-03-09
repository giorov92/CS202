<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="CSS/main.css">
    <link rel="stylesheet" href="CSS/rooms.css">
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

    <title>Rooms | Bellingham Hotel</title>
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
                    <h1>Our Rooms</h1>
                    <p>Discover The World's #1 Five Star Hotel</p>
                </div>
            </div>
        </div>
    </section>
    <div class="clearfix"></div>

    <main>
        <section class="main-padding bg-color">
            <div class="container">
                <div class="rooms">
                    <div class="rooms-pic-1">
                        <figure>
                            <img src="images/img_3.jpg" alt="" class="img">
                        </figure>
                        <div class="rooms-body">
                            <h3 class="rooms-heading">Luxury Executive Lounge</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi Corporis</p>
                            <p><a href="contact.php" class="button" data-toggle="modal" data-target="#RoomForm">Book
                                    Now</a></p>
                        </div>
                    </div>
                    <div class="rooms-pic-1">
                        <figure>
                            <img src="images/img_1.jpg" alt="" class="img">
                        </figure>
                        <div class="rooms-body">
                            <h3 class="rooms-heading">Exquisite Presidential Suite</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi Corporis</p>
                            <p><a href="contact.php" class="button" data-toggle="modal" data-target="#RoomForm2">Book
                                    Now</a></p>
                        </div>
                    </div>
                    <div class="rooms-pic-1">
                        <figure>
                            <img src="images/img_16.jpg" alt="" class="img">
                        </figure>
                        <div class="rooms-body">
                            <h3 class="rooms-heading">Executive Club Room</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi Corporis</p>
                            <p><a href="contact.php" class="button" data-toggle="modal" data-target="#RoomForm3">Book
                                    Now</a></p>
                        </div>
                    </div>
                    <div class="rooms-pic-1">
                        <figure>
                            <img src="images/img_11.jpg" alt="" class="img">
                        </figure>
                        <div class="rooms-body">
                            <h3 class="rooms-heading">Bellingham Mini Suite</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi Corporis</p>
                            <p><a href="contact.php" class="button" data-toggle="modal" data-target="#RoomForm4">Book
                                    Now</a></p>
                        </div>
                    </div>
                    <div class="rooms-pic-1">
                        <figure>
                            <img src="images/img_12.jpg" alt="" class="img">
                        </figure>
                        <div class="rooms-body">
                            <h3 class="rooms-heading">The Murphy Room</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi Corporis</p>
                            <p><a href="contact.php" class="button" data-toggle="modal" data-target="#RoomForm5">Book
                                    Now</a></p>
                        </div>
                    </div>
                    <div class="rooms-pic-1">
                        <figure>
                            <img src="images/img_14.jpg" alt="" class="img">
                        </figure>
                        <div class="rooms-body">
                            <h3 class="rooms-heading">Deluxe Suite</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi Corporis</p>
                            <p><a href="contact.php" class="button" data-toggle="modal" data-target="#RoomForm6">Book
                                    Now</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class='clearfix'></div>

        <?php include('include/subscribe.php'); ?>
    </main>

    <?php include('include/footer.php'); ?>

    <!-- Modal HTML Markup -->
    <!-- Exec Lng Selected Modal -->
    <div id="RoomForm" class="modal fade">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title">Reservation Form</h1>
                </div>
                <div class="modal-body">
                    <form role="form" method="POST" action="booknow.php" onsubmit="return bookNow()" autocomplete>
                        <input type="hidden" name="_token" value="">
                        <div class="form-row">
                            <div class="form-group col-md-6"> <label class="control-label">Arrival Date</label> <input
                                    type="date" class="form-control" id="bookDate" name="arrivedate"> </div>
                            <div class="form-group col-md-6"> <label class="control-label">Departure Date</label>
                                <input type="date" class="form-control" id="bookDated" name="departdate"> </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="control-label">Luxury Executive Lounge</label>
                                    <select id="luxury_executive_lounge" name="luxury_executive_lounge" class="form-control">
                                        <option>0 Rooms</option>
                                        <option selected>1 Room</option>
                                        <option>2 Rooms</option>
                                        <option>3 Rooms</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3"> <label class="control-label">Guests per Room</label>
                                <div class="form-group">
                                    <select value="" id="lel_guests" name="lel_guests" class="form-control">
                                        <option>0 Guests</option>
                                        <option selected>1 Guest</option>
                                        <option>2 Guests</option>
                                        <option>3 Guests</option>
                                        <option>4 Guests</option>
                                        <option>5+ Guests</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="control-label">Exquisite Presidential Suite</label>
                                    <select id="exquisite_presidential_suite" name="exquisite_presidential_suite" class="form-control">
                                        <option selected>0 Rooms</option>
                                        <option>1 Room</option>
                                        <option>2 Rooms</option>
                                        <option>3 Rooms</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="control-label">Guests per Room</label>
                                    <select value=""  id="eps_guests" name="eps_guests" class="form-control">
                                        <option selected>0 Guests</option>
                                        <option>1 Guest</option>
                                        <option>2 Guests</option>
                                        <option>3 Guests</option>
                                        <option>4 Guests</option>
                                        <option>5+ Guests</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="control-label">Executive Club Room</label>
                                    <select id="executive_club_room" name="executive_club_room" class="form-control">
                                        <option selected>0 Rooms</option>
                                        <option>1 Room</option>
                                        <option>2 Rooms</option>
                                        <option>3 Rooms</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="control-label">Guests per Room</label>
                                    <select value=""  id="ecr_guests" name="ecr_guests" class="form-control">
                                        <option selected>0 Guests</option>
                                        <option>1 Guest</option>
                                        <option>2 Guests</option>
                                        <option>3 Guests</option>
                                        <option>4 Guests</option>
                                        <option>5+ Guests</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="control-label">Bellingham Mini Suite</label>
                                    <select id="bellingham_mini_suite" name="bellingham_mini_suite" class="form-control">
                                        <option selected>0 Rooms</option>
                                        <option>1 Room</option>
                                        <option>2 Rooms</option>
                                        <option>3 Rooms</option>
                                        <option>4 Rooms</option>
                                        <option>5 Rooms</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="control-label">Guests per Room</label>
                                    <select value="" id="bms_guests" name="bms_guests" class="form-control">
                                        <option selected>0 Guests</option>
                                        <option>1 Guest</option>
                                        <option>2 Guests</option>
                                        <option>3 Guests</option>
                                        <option>4 Guests</option>
                                        <option>5+ Guests</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="control-label">The Murphy Room</label>
                                    <select id="the_murphy_room" name="the_murphy_room" class="form-control">
                                        <option selected>0 Rooms</option>
                                        <option>1 Room</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="control-label">Guests per Room</label>
                                    <select value="" id="tmr_guests" name="tmr_guests" class="form-control">
                                        <option selected>0 Guests</option>
                                        <option>1 Guest</option>
                                        <option>2 Guests</option>
                                        <option>3 Guests</option>
                                        <option>4 Guests</option>
                                        <option>5+ Guests</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="control-label">Deluxe Suite</label>
                                    <select id="deluxe_suite" name="deluxe_suite" class="form-control">

                                        <option selected>0 Rooms</option>
                                        <option>1 Room</option>
                                        <option>2 Rooms</option>
                                        <option>3 Rooms</option>
                                        <option>4 Rooms</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="control-label">Guests per Room</label>
                                    <select value=""  id="ds_guests" name="ds_guests" class="form-control">
                                        <option selected>0 Guests</option>
                                        <option>1 Guest</option>
                                        <option>2 Guests</option>
                                        <option>3 Guests</option>
                                        <option>4 Guests</option>
                                        <option>5+ Guests</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group"> <label class="control-label">Email</label>
                            <div> <input type="email" class="form-control" id="bookEmail" name="email" value="">
                            </div>
                        </div>
                        <div class="form-group"> <label class="control-label" for="message">Write a Note</label>
                            <textarea class="form-control" id="bookMessage" name="message" rows="3" cols="6"></textarea>
                        </div>
                        <div class="form-group">
                            <div> <button type="submit" class="btn button">RESERVE NOW</button> </div>
                        </div>
                    </form>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
    <div id="RoomForm2" class="modal fade">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title">Reservation Form</h1>
                </div>
                <div class="modal-body">
                    <form role="form" method="POST" action="booknow.php" onsubmit="return bookNow()" autocomplete>
                        <input type="hidden" name="_token" value="">
                        <div class="form-row">
                            <div class="form-group col-md-6"> <label class="control-label">Arrival Date</label> <input
                                    type="date" class="form-control" id="bookDate" name="arrivedate"> </div>
                            <div class="form-group col-md-6"> <label class="control-label">Departure Date</label>
                                <input type="date" class="form-control" id="bookDated" name="departdate"> </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="control-label">Luxury Executive Lounge</label>
                                    <select id="luxury_executive_lounge" name="luxury_executive_lounge" class="form-control">
                                        <option selected>0 Rooms</option>
                                        <option>1 Room</option>
                                        <option>2 Rooms</option>
                                        <option>3 Rooms</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3"> <label class="control-label">Guests per Room</label>
                                <div class="form-group">
                                    <select value="" id="lel_guests" name="lel_guests" class="form-control">
                                        <option selected>0 Guests</option>
                                        <option>1 Guest</option>
                                        <option>2 Guests</option>
                                        <option>3 Guests</option>
                                        <option>4 Guests</option>
                                        <option>5+ Guests</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="control-label">Exquisite Presidential Suite</label>
                                    <select id="exquisite_presidential_suite" name="exquisite_presidential_suite" class="form-control">
                                        <option>0 Rooms</option>
                                        <option selected>1 Room</option>
                                        <option>2 Rooms</option>
                                        <option>3 Rooms</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="control-label">Guests per Room</label>
                                    <select value=""  id="eps_guests" name="eps_guests" class="form-control">
                                        <option>0 Guests</option>
                                        <option selected>1 Guest</option>
                                        <option>2 Guests</option>
                                        <option>3 Guests</option>
                                        <option>4 Guests</option>
                                        <option>5+ Guests</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="control-label">Executive Club Room</label>
                                    <select id="executive_club_room" name="executive_club_room" class="form-control">
                                        <option selected>0 Rooms</option>
                                        <option>1 Room</option>
                                        <option>2 Rooms</option>
                                        <option>3 Rooms</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="control-label">Guests per Room</label>
                                    <select value=""  id="ecr_guests" name="ecr_guests" class="form-control">
                                        <option selected>0 Guests</option>
                                        <option>1 Guest</option>
                                        <option>2 Guests</option>
                                        <option>3 Guests</option>
                                        <option>4 Guests</option>
                                        <option>5+ Guests</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="control-label">Bellingham Mini Suite</label>
                                    <select id="bellingham_mini_suite" name="bellingham_mini_suite" class="form-control">
                                        <option selected>0 Rooms</option>
                                        <option>1 Room</option>
                                        <option>2 Rooms</option>
                                        <option>3 Rooms</option>
                                        <option>4 Rooms</option>
                                        <option>5 Rooms</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="control-label">Guests per Room</label>
                                    <select value="" id="bms_guests" name="bms_guests" class="form-control">
                                        <option selected>0 Guests</option>
                                        <option>1 Guest</option>
                                        <option>2 Guests</option>
                                        <option>3 Guests</option>
                                        <option>4 Guests</option>
                                        <option>5+ Guests</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="control-label">The Murphy Room</label>
                                    <select id="the_murphy_room" name="the_murphy_room" class="form-control">
                                        <option selected>0 Rooms</option>
                                        <option>1 Room</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="control-label">Guests per Room</label>
                                    <select value="" id="tmr_guests" name="tmr_guests" class="form-control">
                                        <option selected>0 Guests</option>
                                        <option>1 Guest</option>
                                        <option>2 Guests</option>
                                        <option>3 Guests</option>
                                        <option>4 Guests</option>
                                        <option>5+ Guests</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="control-label">Deluxe Suite</label>
                                    <select id="deluxe_suite" name="deluxe_suite" class="form-control">

                                        <option selected>0 Rooms</option>
                                        <option>1 Room</option>
                                        <option>2 Rooms</option>
                                        <option>3 Rooms</option>
                                        <option>4 Rooms</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="control-label">Guests per Room</label>
                                    <select value=""  id="ds_guests" name="ds_guests" class="form-control">
                                        <option selected>0 Guests</option>
                                        <option>1 Guest</option>
                                        <option>2 Guests</option>
                                        <option>3 Guests</option>
                                        <option>4 Guests</option>
                                        <option>5+ Guests</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group"> <label class="control-label">Email</label>
                            <div> <input type="email" class="form-control" id="bookEmail" name="email" value="">
                            </div>
                        </div>
                        <div class="form-group"> <label class="control-label" for="message">Write a Note</label>
                            <textarea class="form-control" id="bookMessage" name="message" rows="3" cols="6"></textarea>
                        </div>
                        <div class="form-group">
                            <div> <button type="submit" class="btn button">RESERVE NOW</button> </div>
                        </div>
                    </form>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
    <div id="RoomForm3" class="modal fade">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title">Reservation Form</h1>
                </div>
                <div class="modal-body">
                    <form role="form" method="POST" action="booknow.php" onsubmit="return bookNow()" autocomplete>
                        <input type="hidden" name="_token" value="">
                        <div class="form-row">
                            <div class="form-group col-md-6"> <label class="control-label">Arrival Date</label> <input
                                    type="date" class="form-control" id="bookDate" name="arrivedate"> </div>
                            <div class="form-group col-md-6"> <label class="control-label">Departure Date</label>
                                <input type="date" class="form-control" id="bookDated" name="departdate"> </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="control-label">Luxury Executive Lounge</label>
                                    <select id="luxury_executive_lounge" name="luxury_executive_lounge" class="form-control">
                                        <option>0 Rooms</option>
                                        <option>1 Room</option>
                                        <option>2 Rooms</option>
                                        <option>3 Rooms</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3"> <label class="control-label">Guests per Room</label>
                                <div class="form-group">
                                    <select value="" id="lel_guests" name="lel_guests" class="form-control">
                                        <option>0 Guests</option>
                                        <option>1 Guest</option>
                                        <option>2 Guests</option>
                                        <option>3 Guests</option>
                                        <option>4 Guests</option>
                                        <option>5+ Guests</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="control-label">Exquisite Presidential Suite</label>
                                    <select id="exquisite_presidential_suite" name="exquisite_presidential_suite" class="form-control">
                                        <option selected>0 Rooms</option>
                                        <option>1 Room</option>
                                        <option>2 Rooms</option>
                                        <option>3 Rooms</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="control-label">Guests per Room</label>
                                    <select value=""  id="eps_guests" name="eps_guests" class="form-control">
                                        <option selected>0 Guests</option>
                                        <option>1 Guest</option>
                                        <option>2 Guests</option>
                                        <option>3 Guests</option>
                                        <option>4 Guests</option>
                                        <option>5+ Guests</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="control-label">Executive Club Room</label>
                                    <select id="executive_club_room" name="executive_club_room" class="form-control">
                                        <option>0 Rooms</option>
                                        <option selected>1 Room</option>
                                        <option>2 Rooms</option>
                                        <option>3 Rooms</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="control-label">Guests per Room</label>
                                    <select value=""  id="ecr_guests" name="ecr_guests" class="form-control">
                                        <option>0 Guests</option>
                                        <option selected>1 Guest</option>
                                        <option>2 Guests</option>
                                        <option>3 Guests</option>
                                        <option>4 Guests</option>
                                        <option>5+ Guests</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="control-label">Bellingham Mini Suite</label>
                                    <select id="bellingham_mini_suite" name="bellingham_mini_suite" class="form-control">
                                        <option selected>0 Rooms</option>
                                        <option>1 Room</option>
                                        <option>2 Rooms</option>
                                        <option>3 Rooms</option>
                                        <option>4 Rooms</option>
                                        <option>5 Rooms</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="control-label">Guests per Room</label>
                                    <select value="" id="bms_guests" name="bms_guests" class="form-control">
                                        <option selected>0 Guests</option>
                                        <option>1 Guest</option>
                                        <option>2 Guests</option>
                                        <option>3 Guests</option>
                                        <option>4 Guests</option>
                                        <option>5+ Guests</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="control-label">The Murphy Room</label>
                                    <select id="the_murphy_room" name="the_murphy_room" class="form-control">
                                        <option selected>0 Rooms</option>
                                        <option>1 Room</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="control-label">Guests per Room</label>
                                    <select value="" id="tmr_guests" name="tmr_guests" class="form-control">
                                        <option selected>0 Guests</option>
                                        <option>1 Guest</option>
                                        <option>2 Guests</option>
                                        <option>3 Guests</option>
                                        <option>4 Guests</option>
                                        <option>5+ Guests</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="control-label">Deluxe Suite</label>
                                    <select id="deluxe_suite" name="deluxe_suite" class="form-control">

                                        <option selected>0 Rooms</option>
                                        <option>1 Room</option>
                                        <option>2 Rooms</option>
                                        <option>3 Rooms</option>
                                        <option>4 Rooms</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="control-label">Guests per Room</label>
                                    <select value=""  id="ds_guests" name="ds_guests" class="form-control">
                                        <option selected>0 Guests</option>
                                        <option>1 Guest</option>
                                        <option>2 Guests</option>
                                        <option>3 Guests</option>
                                        <option>4 Guests</option>
                                        <option>5+ Guests</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group"> <label class="control-label">Email</label>
                            <div> <input type="email" class="form-control" id="bookEmail" name="email" value="">
                            </div>
                        </div>
                        <div class="form-group"> <label class="control-label" for="message">Write a Note</label>
                            <textarea class="form-control" id="bookMessage" name="message" rows="3" cols="6"></textarea>
                        </div>
                        <div class="form-group">
                            <div> <button type="submit" class="btn button">RESERVE NOW</button> </div>
                        </div>
                    </form>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
    <div id="RoomForm4" class="modal fade">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title">Reservation Form</h1>
                </div>
                <div class="modal-body">
                    <form role="form" method="POST" action="booknow.php" onsubmit="return bookNow()" autocomplete>
                        <input type="hidden" name="_token" value="">
                        <div class="form-row">
                            <div class="form-group col-md-6"> <label class="control-label">Arrival Date</label> <input
                                    type="date" class="form-control" id="bookDate" name="arrivedate"> </div>
                            <div class="form-group col-md-6"> <label class="control-label">Departure Date</label>
                                <input type="date" class="form-control" id="bookDated" name="departdate"> </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="control-label">Luxury Executive Lounge</label>
                                    <select id="luxury_executive_lounge" name="luxury_executive_lounge" class="form-control">
                                        <option>0 Rooms</option>
                                        <option>1 Room</option>
                                        <option>2 Rooms</option>
                                        <option>3 Rooms</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3"> <label class="control-label">Guests per Room</label>
                                <div class="form-group">
                                    <select value="" id="lel_guests" name="lel_guests" class="form-control">
                                        <option>0 Guests</option>
                                        <option>1 Guest</option>
                                        <option>2 Guests</option>
                                        <option>3 Guests</option>
                                        <option>4 Guests</option>
                                        <option>5+ Guests</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="control-label">Exquisite Presidential Suite</label>
                                    <select id="exquisite_presidential_suite" name="exquisite_presidential_suite" class="form-control">
                                        <option selected>0 Rooms</option>
                                        <option>1 Room</option>
                                        <option>2 Rooms</option>
                                        <option>3 Rooms</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="control-label">Guests per Room</label>
                                    <select value=""  id="eps_guests" name="eps_guests" class="form-control">
                                        <option selected>0 Guests</option>
                                        <option>1 Guest</option>
                                        <option>2 Guests</option>
                                        <option>3 Guests</option>
                                        <option>4 Guests</option>
                                        <option>5+ Guests</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="control-label">Executive Club Room</label>
                                    <select id="executive_club_room" name="executive_club_room" class="form-control">
                                        <option selected>0 Rooms</option>
                                        <option>1 Room</option>
                                        <option>2 Rooms</option>
                                        <option>3 Rooms</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="control-label">Guests per Room</label>
                                    <select value=""  id="ecr_guests" name="ecr_guests" class="form-control">
                                        <option selected>0 Guests</option>
                                        <option>1 Guest</option>
                                        <option>2 Guests</option>
                                        <option>3 Guests</option>
                                        <option>4 Guests</option>
                                        <option>5+ Guests</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="control-label">Bellingham Mini Suite</label>
                                    <select id="bellingham_mini_suite" name="bellingham_mini_suite" class="form-control">
                                        <option>0 Rooms</option>
                                        <option selected>1 Room</option>
                                        <option>2 Rooms</option>
                                        <option>3 Rooms</option>
                                        <option>4 Rooms</option>
                                        <option>5 Rooms</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="control-label">Guests per Room</label>
                                    <select value="" id="bms_guests" name="bms_guests" class="form-control">
                                        <option>0 Guests</option>
                                        <option selected>1 Guest</option>
                                        <option>2 Guests</option>
                                        <option>3 Guests</option>
                                        <option>4 Guests</option>
                                        <option>5+ Guests</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="control-label">The Murphy Room</label>
                                    <select id="the_murphy_room" name="the_murphy_room" class="form-control">
                                        <option selected>0 Rooms</option>
                                        <option>1 Room</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="control-label">Guests per Room</label>
                                    <select value="" id="tmr_guests" name="tmr_guests" class="form-control">
                                        <option selected>0 Guests</option>
                                        <option>1 Guest</option>
                                        <option>2 Guests</option>
                                        <option>3 Guests</option>
                                        <option>4 Guests</option>
                                        <option>5+ Guests</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="control-label">Deluxe Suite</label>
                                    <select id="deluxe_suite" name="deluxe_suite" class="form-control">

                                        <option selected>0 Rooms</option>
                                        <option>1 Room</option>
                                        <option>2 Rooms</option>
                                        <option>3 Rooms</option>
                                        <option>4 Rooms</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="control-label">Guests per Room</label>
                                    <select value=""  id="ds_guests" name="ds_guests" class="form-control">
                                        <option selected>0 Guests</option>
                                        <option>1 Guest</option>
                                        <option>2 Guests</option>
                                        <option>3 Guests</option>
                                        <option>4 Guests</option>
                                        <option>5+ Guests</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group"> <label class="control-label">Email</label>
                            <div> <input type="email" class="form-control" id="bookEmail" name="email" value="">
                            </div>
                        </div>
                        <div class="form-group"> <label class="control-label" for="message">Write a Note</label>
                            <textarea class="form-control" id="bookMessage" name="message" rows="3" cols="6"></textarea>
                        </div>
                        <div class="form-group">
                            <div> <button type="submit" class="btn button">RESERVE NOW</button> </div>
                        </div>
                    </form>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
    <div id="RoomForm5" class="modal fade">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title">Reservation Form</h1>
                </div>
                <div class="modal-body">
                    <form role="form" method="POST" action="booknow.php" onsubmit="return bookNow()" autocomplete>
                        <input type="hidden" name="_token" value="">
                        <div class="form-row">
                            <div class="form-group col-md-6"> <label class="control-label">Arrival Date</label> <input
                                    type="date" class="form-control" id="bookDate" name="arrivedate"> </div>
                            <div class="form-group col-md-6"> <label class="control-label">Departure Date</label>
                                <input type="date" class="form-control" id="bookDated" name="departdate"> </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="control-label">Luxury Executive Lounge</label>
                                    <select id="luxury_executive_lounge" name="luxury_executive_lounge" class="form-control">
                                        <option>0 Rooms</option>
                                        <option>1 Room</option>
                                        <option>2 Rooms</option>
                                        <option>3 Rooms</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3"> <label class="control-label">Guests per Room</label>
                                <div class="form-group">
                                    <select value="" id="lel_guests" name="lel_guests" class="form-control">
                                        <option>0 Guests</option>
                                        <option>1 Guest</option>
                                        <option>2 Guests</option>
                                        <option>3 Guests</option>
                                        <option>4 Guests</option>
                                        <option>5+ Guests</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="control-label">Exquisite Presidential Suite</label>
                                    <select id="exquisite_presidential_suite" name="exquisite_presidential_suite" class="form-control">
                                        <option selected>0 Rooms</option>
                                        <option>1 Room</option>
                                        <option>2 Rooms</option>
                                        <option>3 Rooms</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="control-label">Guests per Room</label>
                                    <select value=""  id="eps_guests" name="eps_guests" class="form-control">
                                        <option selected>0 Guests</option>
                                        <option>1 Guest</option>
                                        <option>2 Guests</option>
                                        <option>3 Guests</option>
                                        <option>4 Guests</option>
                                        <option>5+ Guests</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="control-label">Executive Club Room</label>
                                    <select id="executive_club_room" name="executive_club_room" class="form-control">
                                        <option selected>0 Rooms</option>
                                        <option>1 Room</option>
                                        <option>2 Rooms</option>
                                        <option>3 Rooms</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="control-label">Guests per Room</label>
                                    <select value=""  id="ecr_guests" name="ecr_guests" class="form-control">
                                        <option selected>0 Guests</option>
                                        <option>1 Guest</option>
                                        <option>2 Guests</option>
                                        <option>3 Guests</option>
                                        <option>4 Guests</option>
                                        <option>5+ Guests</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="control-label">Bellingham Mini Suite</label>
                                    <select id="bellingham_mini_suite" name="bellingham_mini_suite" class="form-control">
                                        <option selected>0 Rooms</option>
                                        <option>1 Room</option>
                                        <option>2 Rooms</option>
                                        <option>3 Rooms</option>
                                        <option>4 Rooms</option>
                                        <option>5 Rooms</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="control-label">Guests per Room</label>
                                    <select value="" id="bms_guests" name="bms_guests" class="form-control">
                                        <option selected>0 Guests</option>
                                        <option>1 Guest</option>
                                        <option>2 Guests</option>
                                        <option>3 Guests</option>
                                        <option>4 Guests</option>
                                        <option>5+ Guests</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="control-label">The Murphy Room</label>
                                    <select id="the_murphy_room" name="the_murphy_room" class="form-control">
                                        <option>0 Rooms</option>
                                        <option selected>1 Room</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="control-label">Guests per Room</label>
                                    <select value="" id="tmr_guests" name="tmr_guests" class="form-control">
                                        <option>0 Guests</option>
                                        <option selected>1 Guest</option>
                                        <option>2 Guests</option>
                                        <option>3 Guests</option>
                                        <option>4 Guests</option>
                                        <option>5+ Guests</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="control-label">Deluxe Suite</label>
                                    <select id="deluxe_suite" name="deluxe_suite" class="form-control">

                                        <option selected>0 Rooms</option>
                                        <option>1 Room</option>
                                        <option>2 Rooms</option>
                                        <option>3 Rooms</option>
                                        <option>4 Rooms</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="control-label">Guests per Room</label>
                                    <select value=""  id="ds_guests" name="ds_guests" class="form-control">
                                        <option selected>0 Guests</option>
                                        <option>1 Guest</option>
                                        <option>2 Guests</option>
                                        <option>3 Guests</option>
                                        <option>4 Guests</option>
                                        <option>5+ Guests</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group"> <label class="control-label">Email</label>
                            <div> <input type="email" class="form-control" id="bookEmail" name="email" value="">
                            </div>
                        </div>
                        <div class="form-group"> <label class="control-label" for="message">Write a Note</label>
                            <textarea class="form-control" id="bookMessage" name="message" rows="3" cols="6"></textarea>
                        </div>
                        <div class="form-group">
                            <div> <button type="submit" class="btn button">RESERVE NOW</button> </div>
                        </div>
                    </form>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
    <div id="RoomForm6" class="modal fade">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title">Reservation Form</h1>
                </div>
                <div class="modal-body">
                    <form role="form" method="POST" action="booknow.php" onsubmit="return bookNow()" autocomplete>
                        <input type="hidden" name="_token" value="">
                        <div class="form-row">
                            <div class="form-group col-md-6"> <label class="control-label">Arrival Date</label> <input
                                    type="date" class="form-control" id="bookDate" name="arrivedate"> </div>
                            <div class="form-group col-md-6"> <label class="control-label">Departure Date</label>
                                <input type="date" class="form-control" id="bookDated" name="departdate"> </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="control-label">Luxury Executive Lounge</label>
                                    <select id="luxury_executive_lounge" name="luxury_executive_lounge" class="form-control">
                                        <option>0 Rooms</option>
                                        <option>1 Room</option>
                                        <option>2 Rooms</option>
                                        <option>3 Rooms</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3"> <label class="control-label">Guests per Room</label>
                                <div class="form-group">
                                    <select value="" id="lel_guests" name="lel_guests" class="form-control">
                                        <option>0 Guests</option>
                                        <option>1 Guest</option>
                                        <option>2 Guests</option>
                                        <option>3 Guests</option>
                                        <option>4 Guests</option>
                                        <option>5+ Guests</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="control-label">Exquisite Presidential Suite</label>
                                    <select id="exquisite_presidential_suite" name="exquisite_presidential_suite" class="form-control">
                                        <option selected>0 Rooms</option>
                                        <option>1 Room</option>
                                        <option>2 Rooms</option>
                                        <option>3 Rooms</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="control-label">Guests per Room</label>
                                    <select value=""  id="eps_guests" name="eps_guests" class="form-control">
                                        <option selected>0 Guests</option>
                                        <option>1 Guest</option>
                                        <option>2 Guests</option>
                                        <option>3 Guests</option>
                                        <option>4 Guests</option>
                                        <option>5+ Guests</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="control-label">Executive Club Room</label>
                                    <select id="executive_club_room" name="executive_club_room" class="form-control">
                                        <option selected>0 Rooms</option>
                                        <option>1 Room</option>
                                        <option>2 Rooms</option>
                                        <option>3 Rooms</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="control-label">Guests per Room</label>
                                    <select value=""  id="ecr_guests" name="ecr_guests" class="form-control">
                                        <option selected>0 Guests</option>
                                        <option>1 Guest</option>
                                        <option>2 Guests</option>
                                        <option>3 Guests</option>
                                        <option>4 Guests</option>
                                        <option>5+ Guests</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="control-label">Bellingham Mini Suite</label>
                                    <select id="bellingham_mini_suite" name="bellingham_mini_suite" class="form-control">
                                        <option selected>0 Rooms</option>
                                        <option>1 Room</option>
                                        <option>2 Rooms</option>
                                        <option>3 Rooms</option>
                                        <option>4 Rooms</option>
                                        <option>5 Rooms</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="control-label">Guests per Room</label>
                                    <select value="" id="bms_guests" name="bms_guests" class="form-control">
                                        <option selected>0 Guests</option>
                                        <option>1 Guest</option>
                                        <option>2 Guests</option>
                                        <option>3 Guests</option>
                                        <option>4 Guests</option>
                                        <option>5+ Guests</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="control-label">The Murphy Room</label>
                                    <select id="the_murphy_room" name="the_murphy_room" class="form-control">
                                        <option selected>0 Rooms</option>
                                        <option>1 Room</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="control-label">Guests per Room</label>
                                    <select value="" id="tmr_guests" name="tmr_guests" class="form-control">
                                        <option selected>0 Guests</option>
                                        <option>1 Guest</option>
                                        <option>2 Guests</option>
                                        <option>3 Guests</option>
                                        <option>4 Guests</option>
                                        <option>5+ Guests</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="control-label">Deluxe Suite</label>
                                    <select id="deluxe_suite" name="deluxe_suite" class="form-control">

                                        <option>0 Rooms</option>
                                        <option selected>1 Room</option>
                                        <option>2 Rooms</option>
                                        <option>3 Rooms</option>
                                        <option>4 Rooms</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="control-label">Guests per Room</label>
                                    <select value=""  id="ds_guests" name="ds_guests" class="form-control">
                                        <option>0 Guests</option>
                                        <option selected>1 Guest</option>
                                        <option>2 Guests</option>
                                        <option>3 Guests</option>
                                        <option>4 Guests</option>
                                        <option>5+ Guests</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group"> <label class="control-label">Email</label>
                            <div> <input type="email" class="form-control" id="bookEmail" name="email" value="">
                            </div>
                        </div>
                        <div class="form-group"> <label class="control-label" for="message">Write a Note</label>
                            <textarea class="form-control" id="bookMessage" name="message" rows="3" cols="6"></textarea>
                        </div>
                        <div class="form-group">
                            <div> <button type="submit" class="btn button">RESERVE NOW</button> </div>
                        </div>
                    </form>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

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