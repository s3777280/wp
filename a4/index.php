<?php include 'tools.php';

session_start();
if (isset($_POST['session-reset'])) {
  $reset_flag = session_destroy();
  if ($reset_flag) {
      unset($_POST['session-reset']);
      header("Location: index.php#");
  } else exit("Session failed to reset");
}
// if ($_SERVER["REQUEST_METHOD"] == "POST"){

// $chosenMov = $_POST['movie']['id'];

// if (!empty($_POST['movie']['day']))
//     $_SESSION['movie'] = $_POST['movie'];
// else
//     $generalErr = "Please choose a time and date";

// if ($_POST['total'] != 0) {
//     $total = $_POST['total'];
//     $_SESSION['total'] = $total;
//     $_SESSION['seats'] = $_POST['seats'];
// } else
//     $generalErr = "At least 1 ticket is required";

// }
?>

<!DOCTYPE html>
<html lang='en'>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title> Assignment 4 - Cinemax </title>
  <!-- Keep wireframe.css for debugging, add your css to style.css -->
  <link id='wireframecss' type="text/css" rel="stylesheet" href="../wireframe.css" disabled>
  <link id='stylecss' type="text/css" rel="stylesheet" href="./style.css">
  <script async defer src='script.js'></script>
  <script src='../wireframe.js'></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
    integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
    integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
    crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js"></script>
</head>
<body onLoad="populateYearSelect()">
  <!-- Navigation bar  -->
  <main>
    <img id="logo" src="media2/logo-op.png" />
    <span id="quote">More than just a cinematic experience</span>
    <nav id="navigtion" class="sticky">
      <ul>
        <li><a class="nav-item nav-link" href="#About-us">About Us</a></li>
        <li><a class="nav-item nav-link" href="#Prices">Prices</a></li>
        <li><a class="nav-item nav-link" href="#now-showing">Now Showing</a></li>
      </ul>
    </nav>
    <!-- We apply parallax effect scrolling into our website to make it more appealing.  -->
    <!-- Promotion slide -->
    <div class="parallax1"></div>
    <div id="Promotion" style="background-color:whitesmoke ">
      <h3 class="section-heading" style="color: #E25B45;">Promotion</h3>
      <div class="Sectionquote">We are running this speacial new openning promotion. Limited time only! </div>
      <div class="list-innovation">
        <ul>
          <li> Buy 1 get 1 free - Free popcorn and coke </li>
          <li> Event cinemax - Discount on special occasion </li>
          <li> Free snack pack with purchase of one General Admision </li>
        </ul>
      </div>
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="media2/p1.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="media2/p2.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="media2/p3.png" class="d-block w-100" alt="...">
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
    <!-- About us section -->
    <div class="parallax2"></div>
    <section>
      <div id="About-us" style="background-color: whitesmoke ">
        <h3 class="section-heading" style="color: #E25B45;">About Us</h3>
        <div class="Sectionquote1">Our cinema has gone under extensive improvement and renovations so that we could
          not
          just bring you the best cinematic experience but also fantastic way to enjoy it. We have renovated the
          standard
          seats and even add in a first class option for customer who seek a more private and luxury experience. All
          of
          the projection and sound systems are now upgraded with 3D Dolby Vision projection and Dolby Atmos sound to
          bring
          customer the best cinematic experience they have ever seen. </div>
        <li class="auh" style="text-align:left;  font-size: 280%; color: #E25B45; padding-left:2%; opacity: 0.7;
        ">New seats</li>
        <div>
          <img class="aup3" src="media2/cine1.jpg" alt="">
          <img class="aup4" src="media2/cine2.jpg" alt="">
          <p class="aud" style="padding-bottom: 3%;">We have greatly upgraded the <span
              style="color: darkslateblue; font-size: 24px;"><b>
                standard </b></span>seats so that our customer can have the most relaxing experience while watching
            their favourite movie. The new seats are now <span> <i> 25% larger</i> </span> and made with extra soft
            material to please all the customer. </p>
          <img class="aup1" src="media2/cine3.jpg" alt="">
          <img class="aup2" src="media2/cine4.jpeg" alt="">
          <p class="aud">We have also added the <span style="color: brown; font-size: 24px;"> <b> first class
              </b></span> seats if you want a more premium experience. Every seat on every
            row in our first class theater has been expertly designed so you can relax and recline during your film.
            With less seats and more personal space, you'll have a more immersive experience with every visit. Now
            every
            seat
            is
            the best in the house, it’s time to experience films the way they were meant to be, the film becomes
            breathtakingly real. Cinemax first class offers you a wide range of treats for all tastes, so why not try
            our
            selection of fine wines and beers, which sit perfectly alongside our irresistible menu of hot and chilled
            food.
            Plus with your own table built into your seat, you can enjoy your delicious cinema snacks in maximum
            comfort.
          </p>
        </div>
        <li class="auh"
          style="text-align:left; font-size: 300%; color: #E25B45; padding-bottom: 2%; padding-left: 2%; opacity: 0.7;">
          New
          Projection and Sound System
        </li>
        <div>
          <img class="aup5" src="media2/cine5.jpg" alt="" style="padding-left: 0.5%;">
          <img class="aup6" src="media2/cine7.jpg" alt="">
        </div>
        <div>
          <p class="aud" style="padding-top: 2%;"> Floor-to-ceiling and wall-to-wall – our 3D Dolby vision screens are
            huge; the perfect canvas
            for
            our state-of-the-art 4K digital projectors. Four times the resolution of standard projectors, they deliver
            almost nine million pixels for an even brighter, clearer and more detailed picture. Dolby® Atmos™
            introduces
            a
            powerful new listening experience to cinema goers. With sound that truly envelops you and allows you to
            hear
            the
            whole picture, Dolby® Atmos™ heightens the realism and impact of every scene bringing you closer to the
            film.
          </p>
        </div>
      </div>
    </section>
    <!-- End of About us section  -->
    <!-- Price section  -->
    <div class="parallax3">
      <section>
        <div id="Prices"> Prices </div>
        <div style="overflow-x:auto;">
          <table>
            <tr>
              <th>Seat Type</th>
              <th>Seat Code</th>
              <th>All day Monday and Wednesday AND 12pm on Weekdays</th>
              <th>All other times</th>
            </tr>
            <tr>
              <td>Standard Adult</td>
              <td>STA</td>
              <td>14.00</td>
              <td>19.80</td>
            </tr>
            <tr>
              <td>Standard Concession</td>
              <td>STP</td>
              <td>12.50</td>
              <td>17.50</td>
            </tr>
            <tr>
              <td>Standard Child</td>
              <td>STC</td>
              <td>11.00</td>
              <td>15.30</td>
            </tr>
            <tr>
              <td>First Class Adult</td>
              <td>FCA</td>
              <td>24.00</td>
              <td>30.00</td>
            </tr>
            <tr>
              <td>First Class Concession</td>
              <td>FCP</td>
              <td>22.50</td>
              <td>27.00</td>
            </tr>
            <tr>
              <td>First Class Child</td>
              <td>FCC</td>
              <td>21.00</td>
              <td>24.00</td>
            </tr>
          </table>
        </div>
      </section>
    </div>
    <!-- End Price Section -->
    <!-- Now showing section  -->
    <div class=" parallax2"></div>
    <div style="background-color: whitesmoke ;font-size:36px" id="nowshowing">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12" style="height: 90px;">
            <h3 class="showing" id="now-showing">Now
              Showing</h3>
          </div>
        </div>
      </div>
      </br>
      <section class="container-fluid" style="background-color: whitesmoke;">
        <div class="col-sm-12" style="padding-top: 8px; padding-bottom: 8px;">
          <div class=" d-flex row justify-content-center my-3"><a href="#content1"></a>
            <div class="col-xs-5 col-md-5 col-sm-12 mx-2 " id="moviePanelACT"
              style="background-color: #F3DBCF; padding-top: 8px;padding-bottom: 8px;">
              <div class="row px-1">
                <div class="col-sm-6">
                  <img src="media2/now-showing-1.jpg"
                    style="max-width: 100%;height: auto; border:white 2px solid; object-fit: cover;">
                </div>
                <div class="col-sm-6">
                  <div class="name">
                    <h4 style="font-size:30px; color: rgb(206, 120, 107)"> <b> Avengers: Endgame </b><span
                        style="text-align: center; color: rgb(224, 90, 49); font-size: 27px;"> ( R ) </span></h4>
                  </div>
                  <div class="movie-schedule" style="font-size: 20px"> <b> Showing timetable in this week </b>
                  </div>
                  <div class="movie-info" style="font-size: 18px" ;>
                    <p>
                      <br /> <b> Wednesday </b>: 9pm (T21)
                      <br /> <b> Thursday </b>: 9pm (T21)
                      <br /> <b> Friday </b>: 9pm (T21)
                      <br /> <b> Saturday </b>: 6pm (T18)
                      <br /> <b> Sunday </b>: 6pm (T18)
                    </p>
                    <!-- Modal 1 -->
                  </div>
                </div>
              </div>
              </a>
            </div>
            <div class="col-xs-5 col-md-5 col-sm-12 mx-2 " id="moviePanelRMC"
              style="background-color: #F3DBCF;padding-top: 8px;padding-bottom: 8px;"> <a href="#content2"></a>
              <div class="row px-1">
                <div class="col-sm-6">
                  <img src="media2/now-showing-2.jpg"
                    style="max-width: 100%;height: auto;border:white 2px solid; object-fit: cover;">
                </div>
                <div class="col-sm-6">
                  <div class="name">
                    <h4 style="font-size:30px; color: rgb(206, 120, 107)"> <b> Top End Wedding </b><span
                        style="text-align: center;color: rgb(224, 90, 49);font-size: 27px">( MA )</span></h4>
                  </div>
                  <div class="movie-schedule" style="font-size: 20px"> <b> Showing timetable in this week </b>
                  </div>
                  <div class="movie-info" style="font-size: 18px" ;>
                    <p>
                      <br /> <b> Monday </b>: 6pm (T18)
                      <br /> <b> Tuesday </b>: 6pm (T18)
                      <br /> <b> Saturday </b>: 3pm (T15)
                      <br /> <b> Sunday </b>: 3pm (T15)
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- end Panel 2 -->
          <!-- panel 3 -->
          <div style=" margin-top:7.5px;">
            <div class=" d-flex row justify-content-center my-3">
              <div class="col-xs-5 col-md-5 col-sm-12 mx-2 " id="moviePanelANM"
                style="background-color: #F3DBCF;padding-top: 8px;padding-bottom: 8px;">
                <div class="row px-1">
                  <div class="col-sm-6">
                    <img src="media2/now-showing-3.jpg"
                      style="max-width: 100%;height: auto; border:white 2px solid; object-fit: cover;">
                  </div>
                  <div class="col-sm-6">
                    <div class="name">
                      <h4 style="font-size:30px; color: rgb(206, 120, 107)"> <b> Dumbo </b> <span
                          style="text-align: center;color: rgb(224, 90, 49);font-size: 27px"> ( MA ) </span></h4>
                    </div>
                    <div class="movie-schedule" style="font-size: 20px"> <b> Showing timetable in this week </b>
                    </div>
                    <div class="movie-info" style="font-size: 18px" ;>
                      <p>
                        <br /> <b> Monday </b>: 12pm (T12)
                        <br /> <b> Tuesday </b>: 12pm (T12)
                        <br /> <b> Wednesday </b>: 6pm (T18)
                        <br /> <b> Thursday </b>: 6pm (T18)
                        <br /> <b> Friday </b>: 6pm (T18)
                        <br /> <b> Saturday </b>: 12pm (T12)
                        <br /> <b> Sunday </b>: 12pm (T12)
                      </p>
                    </div>
                  </div>
                </div>
              </div>
              <!-- end panel 3 -->
              <div class="col-xs-5 col-md-5 col-sm-12 mx-2 " id="moviePanelAHF"
                style="background-color: #F3DBCF;padding-top: 8px; padding-bottom: 8px;"> <a href="#content4"></a>
                <div class="row px-1">
                  <div class="col-sm-6">
                    <img src="media2/now-showing4.jpg"
                      style="max-width: 100%;height:auto; border:white 2px solid; object-fit: cover;">
                  </div>
                  <div class="col-sm-6">
                    <div class="name">
                      <h4 style="font-size:30px; color: rgb(206, 120, 107)"> <b> Happy Prince </b> <span
                          style="text-align: center;color: rgb(224, 90, 49);font-size: 27px"> </br>( PG )</span>
                      </h4>
                    </div>
                    <div class="movie-schedule" style="font-size: 20px"> <b>Showing timetable in
                        this week </b></div>
                    <div class="movie-info" style="font-size: 18px;">
                      <p>
                        <br /> <b> Wednesday </b>: 12pm (T12)
                        <br /> <b> Thursday </b>: 12pm (T12)
                        <br /> <b> Friday </b>: 12pm (T12)
                        <br /> <b> Saturday </b>: 9pm (T21)
                        <br /> <b> Sunday </b>: 9pm (T21)
                      </p>
                      <!-- Modal 4 -->
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
      </section>
    </div>
    <!-- End of now showing section  -->
    <!-- content1 -->
    <div id="sypnosisACT" class="content1">
      <div>
        <div style="background-color: #FFDECD; background-size: cover; ">
          <div class="row">
            <div class="col-sm-9">
              <h5
                style="font-size: 40px; padding-left: 60px; padding-top: 50px; font-family:'Franklin Gothic Medium'; text-decoration: underline;">
                Avengers: Endgame <span style="margin-left: 250px;">Rated: PG-13</span></h5>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-5" style="padding-top: 4%; padding-bottom: 4%; padding-left: 2%;">
              <h7 style="font-size: 32px; padding-left: 5%; font-family:'Franklin Gothic Medium';">
                Plot Description
              </h7>
              <p style="text-align: left; margin-left: 10px; font-size: 18px;">
                The grave course of events set in motion by
                Thanos that wiped out half the universe and fractured
                the Avengers ranks compels the remaining Avengers to take one
                final stand in Marvel Studios' grand conclusion to twenty-two films, "Avengers: Endgame."
              </p>
            </div>
            <div class="col-sm-7" class="container-iframe">
              <iframe class="responsive-iframe" src="https://www.youtube.com/embed/TcMBFSGVi1c" frameborder="0"
                allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen></iframe>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-3">
              <label style="margin: 4% 0 0 0; font-size: 20px;  padding-left: 4%;">
                <b>Make a
                  booking: </b> </label>
            </div>
            <div class="col-sm-9" style="color:grey;">
              <button type="button" class="btn btn-outline-warning" id="myBtn"> Wednesday: 9pm
                (T21)</button>
              <button type="button" class="btn btn-outline-info" id="myBtn4"> Thursday: 9pm
                (T21)</button>
              <button type="button" class="btn btn-outline-danger" id="myBtn1"> Friday: 9pm (T21)</button>
              <button type="button" class="btn btn-outline-dark" id="myBtn2"> Saturday: 6pm (T18)</button>
              <button type="button" class="btn btn-outline-info" id="myBtn3"> Sunday: 6pm (T18)</button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- end of content1 -->
    <!-- content 2 -->
    <div id="sypnosisRMC" class="content">
      <div id="content-2">
        <div style="background-color: #FFDECD; background-size: cover; ">
          <div class="row">
            <div class="col-sm-9">
              <h5 style=" font-size: 40px; padding-left: 60px; padding-top: 50px; font-family:'Franklin Gothic Medium'; text-decoration:
            underline;">
                Top End Wedding <span style="margin-left:15%;">Rated: MA</span></h5>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-5" style="padding-top: 4%; padding-bottom: 4%; padding-left: 2%;">
              <h7 style="font-size: 32px; padding-left: 5%; font-family:'Franklin Gothic Medium';">
                Plot Description
              </h7>
              <p style="text-align: left; margin-left: 20px; font-size: 18px;">
                Lauren and Ned are engaged, they are in love,
                and they have just ten days to find Lauren's mother who
                has gone AWOL somewhere in the remote far north of Australia, reunite
                her parents and pull off their dream wedding. </p>
            </div>
            <div class="col-sm-7" class="container-iframe">
              <iframe class="responsive-iframe" src="https://www.youtube.com/embed/uoDBvGF9pPU" frameborder="0"
                allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen></iframe>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-3">
              <label style="margin: 4% 0 0 0; font-size: 20px;  padding-left: 4%;">
                <b>Make a
                  booking: </b> </label>
            </div>
            <div class="col-sm-9" style="color:grey;">
              <button type="button" class="btn btn-outline-warning" id="myBtna"> Monday: 6pm (T18)</button>
              <button type="button" class="btn btn-outline-danger" id="myBtn1a"> Tuesday: 6pm
                (T18)</button>
              <button type="button" class="btn btn-outline-dark" id="myBtn2a"> Saturday: 3pm (T15)</button>
              <button type="button" class="btn btn-outline-info" id="myBtn3a"> Sunday: 3pm (T15)</button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- end of content2 -->
    <!-- content3 -->
    <div id="sypnosisANM" class="content">
      <div>
        <div style="background-color: #FFDECD; background-size: cover; ">
          <div class="row">
            <div class="col-sm-9">
              <h5 class="modal-title" id="exampleModalLabel"
                style="font-size: 40px; padding-left: 60px; padding-top: 50px; font-family:'Franklin Gothic Medium'; text-decoration: underline;">
                Dumbo <span style="margin-left: 50%;">Rated: MA</span></h5>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-5" style="padding-top: 4%; padding-bottom: 4%; padding-left: 2%;">
              <h7 style="font-size: 32px; padding-left: 5%; font-family:'Franklin Gothic Medium';">
                Plot Description
              </h7>
              <p style="text-align: left; margin-left: 10px; font-size: 18px;">
                Struggling circus owner Max Medici enlists former star
                Holt Farrier and his children Milly and Joe to care for Dumbo,
                a baby elephant whose oversized ears make him the circus' laughing stock.
                But when they discover that Dumbo can fly, the circus makes an incredible comeback,
                attracting persuasive entrepreneur V.A. </p>
            </div>
            <div class="col-sm-7" class="container-iframe">
              <iframe class="responsive-iframe" src="https://www.youtube.com/embed/ocWpGdITSR4" frameborder="0"
                allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen></iframe>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-3">
              <label style="margin: 4% 0 0 0; font-size: 20px;  padding-left: 4%;">
                <b>Make a
                  booking: </b> </label>
            </div>
            <div class="col-sm-9" style="color:grey;">
              <button type="button" class="btn btn-outline-warning" id="myBtnb"> Monday: 12pm
                (T12)</button>
              <button type="button" class="btn btn-outline-danger" id="myBtn1b"> Tuesday: 12pm
                (T12)</button>
              <button type="button" class="btn btn-outline-warning" id="myBtn2b"> Wednesday: 6pm
                (T18)</button>
              <button type="button" class="btn btn-outline-info" id="myBtn6b"> Thursday: 6pm
                (T18)</button>
              <button type="button" class="btn btn-outline-danger" id="myBtn3b"> Friday: 6pm
                (T18)</button>
              <button type="button" class="btn btn-outline-dark" id="myBtn4b"> Saturday: 12pm
                (T12)</button>
              <button type="button" class="btn btn-outline-info" id="myBtn5b"> Sunday: 12pm
                (T12)</button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- end of content 3 -->
    <!-- content 4 -->
    <div id="sypnosisAHF" class="content">
      <div>
        <div style="background-color: #FFDECD; background-size: cover; ">
          <div class="row">
            <div class="col-sm-9">
              <h5
                style="font-size: 40px; padding-left: 60px; padding-top: 50px; font-family:'Franklin Gothic Medium'; text-decoration: underline;">
                Happy Prince <span style="margin-left: 260px;">Rated: PG</span></h5>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-5" style="padding-top: 4%; padding-bottom: 4%; padding-left: 2%;">
              <h7 style="font-size: 32px; padding-left: 5%; font-family:'Franklin Gothic Medium';">
                Plot Description
              </h7>
              <p style="text-align: left; margin-left: 10px; font-size: 18px;">
                The Happy
                Prince by
                Oscar Wilde is the story of a statue, the Happy Prince, covered with gold and
                many fine
                jewels. It sits overlooking the city. One day, a swallow passing through seeks
                shelter
                under the statue and discovers the prince is not happy, but sad </p>
            </div>
            <div class="col-sm-7" class="container-iframe">
              <iframe class="responsive-iframe" src="https://www.youtube.com/embed/4HmN9r1Fcr8" frameborder="0"
                allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen></iframe>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-3">
              <label style="margin: 4% 0 0 0; font-size: 20px;  padding-left: 4%;">
                <b>Make a
                  booking: </b> </label>
            </div>
            <div class="col-sm-9" style="color:grey;">
              <button type="button" class="btn btn-outline-warning" id="myBtnc" target="_blank">
                Wednesday: 12pm (T12)</button>
              <button type="button" class="btn btn-outline-info" id="myBtn4c" target="_blank">
                Thursday: 12pm (T12)</button>
              <button type="button" class="btn btn-outline-danger" id="myBtn1c" target="_blank"> Friday:
                12pm (T12)</button>
              <button type="button" class="btn btn-outline-dark" id="myBtn2c" target="_blank">
                Saturday:
                9pm (T21)</button>
              <button type="button" class="btn btn-outline-info" id="myBtn3c" target="_blank"> Sunday:
                9pm (T21)</button>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Booking area section -->
    <form id="booking" class="booking" method="POST" action="index.php">
      <div class="container-fluid">
        <div style="text-align: center;">
          <span style="font-size:xx-large; font-weight: bold;" id="formTitle"></span>
          <span style="font-size:xx-large; font-weight: bold;" id="space"> </span>
          <span style="font-size:xx-large; font-weight: bold;" id="formDay"> </span>
          <span style="font-size:xx-large; font-weight: bold;" id="space1"> </span>
          <span style="font-size:xx-large; font-weight: bold;" id="formTime"> </span>
          <span style="font-size:xx-large; font-weight: bold;" id="formID"> </span>
          <input type="hidden" name="movie[name]" id="movie-name" value="">
          <input type="hidden" name="movie[id]" id="movie-id" value="">
          <input type="hidden" name="movie[day]" id='movie-day' value="">
          <input type="hidden" name="movie[hour]" id='movie-hour' value="">
        </div>
        <!-- <form action="" method="GET"> -->
          <div class="row">
            <div class="col-lg-6">
              <fieldset class="standard">
                <legend class="legend">Standard </legend>
                <label for="seats-STA">Adults </label>
                <select class="select" name="seats[STA]" id="seats-STA" onchange="totalPrice()">
                  <option value=""> Please select </option>
                  <option value="0">0</option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                  <option value="6">6</option>
                  <option value="7">7</option>
                  <option value="8">8</option>
                  <option value="9">9</option>
                  <option value="10">10</option>
                </select>
                <br>
                <label for="seats-STP">Concessions </label>
                <select class="select" name="seats[STP]" id="seats-STP" onchange="totalPrice()">
                  <option value="">Please select</option>
                  <option value="0">0</option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                  <option value="6">6</option>
                  <option value="7">7</option>
                  <option value="8">8</option>
                  <option value="9">9</option>
                  <option value="10">10</option>
                </select>
                <br>
                <label for="seats-STC">Children </label>
                <select class="select" name="seats[STC]" id="seats-STC" onchange="totalPrice()">
                  <option value="">Please select</option>
                  <option value="0">0</option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                  <option value="6">6</option>
                  <option value="7">7</option>
                  <option value="8">8</option>
                  <option value="9">9</option>
                  <option value="10">10</option>
                </select>
              </fieldset>
              <fieldset class="first-class">
                <legend class="legend">First class </legend>
                <label for="seats-FCA">Adults </label>
                <select class="select" name="seats[FCA]" id="seats-FCA" onchange="totalPrice()">
                  <option value="">Please select</option>
                  <option value="0">0</option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                  <option value="6">6</option>
                  <option value="7">7</option>
                  <option value="8">8</option>
                  <option value="9">9</option>
                  <option value="10">10</option>
                </select>
                <br>
                <label for="seats-FCP">Concessions </label>
                <select class="select" name="seats[FCP]" id="seats-FCP" onchange="totalPrice()">
                  <option value="">Please select</option>
                  <option value="0">0</option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                  <option value="6">6</option>
                  <option value="7">7</option>
                  <option value="8">8</option>
                  <option value="9">9</option>
                  <option value="10">10</option>
                </select>
                <br>
                <label for="seats-FCC">Children </label>
                <select class="select" name="seats[FCC]" id="seats-FCC" onchange="totalPrice()">
                  <option value="">Please select</option>
                  <option value="0">0</option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                  <option value="6">6</option>
                  <option value="7">7</option>
                  <option value="8">8</option>
                  <option value="9">9</option>
                  <option value="10">10</option>
                </select>
              </fieldset>
              <div class="total" id="price"> Total </div>
              <div class="total-price">
                <div  class="card-body" id="total" name="total" >
                </div>
              </div>
            </div>
      
            
            <div class="col-lg-6">
              <fieldset class="customer-info">
                </br>
                <label for="cust-name"> Name </label>
                <input type="text" name="cust[name]" id="cust-name" value="<?php if (!preg_match("/^[a-zA-Z \-.']{1,100}$/", $name)){echo $_POST["custname"];} ?>" >
                  <!-- pattern="^[a-zA-Z \-.']{1,100}$" title="Western name only" required -->
                  <span class="text-danger">* <?php echo $nameErr; ?></span>
                <br>
                <label for="cust-mail">Email </label><input   name="cust[email]" id="cust-mail" value = "<?php if(!filter_var($mail, FILTER_VALIDATE_EMAIL)) { echo $_POST["custemail"];} ?>" >
                 <span class="text-danger">* <?php echo $mailErr; ?></span>
                 <!-- Include type email when done -->
                <br>
                <label for="cust-mobile">Mobile </label><input type="tel" name="cust[mobile]" value="<?php if (!preg_match("/^(\(04\)|04|\+614)( ?[0-9]){8}$/", $mobile)){echo $_POST["mobilenumber"];} ?>" >
                  <!-- pattern="^(\s\(04\)|\s04|\s\+614)( ?[0-9]){8}$" id="cust-mobile" title="Australian number only"
                  required -->
                  <span class="text-danger">* <?php echo $mobileErr; ?></span>
                <br>
                <label for="cust-credit">Creditcard </label><input type="text" name="cust[card]" value="<?php if (!preg_match("/^( ?\d){14,19}$/", $card)){echo $_POST["creditcard"];} ?>" >
                  <!-- pattern="^( ?\d){14,19}" id="cust-credit" required -->
                  <span class="text-danger">* <?php echo $cardErr; ?></span>
                <br>
                <label for="">Expiry</label>
                <select id="cust-Expiry-month" name="cust[expiryMonth]" required></select>
                <select id="cust-Expiry-year" name="cust[expiryYear]" required></select>
                <br>
                <button class="order-btn" type="submit" name="submit" id="order">
                  Order
                  <i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
              </button>
              </fieldset>
            </div>
        <!-- </form> -->
      </div>
      </div>
    </form>
    <!-- End of booking section  -->
  </main>
  <!-- Footer  -->
  <footer id="footer">
    <div>&copy;
      <script>
        document.write(new Date().getFullYear());
      </script> Web programming - Assignment 4
      <div> <b> Group </b>: Group 12
        <br>
        <b> Student name 1 </b> : Le Nguyen Minh Huy - s3777280
        <br>
        <b> Student name 2 </b> : Nguyen Quoc Thang - s3806617 </div>
    </div>
    <div>Disclaimer: This website is not a real website and is being developed as part of a School of Science Web
      Programming course at RMIT University in Melbourne, Australia.</div>
    <div><button id='toggleWireframeCSS' onclick='toggleWireframe()'>Toggle Wireframe CSS</button>
    <form method="POST">
                <input type="submit" value="Reset current session" name='session-reset'>
            </form></div>
  </footer>
  <?php 
  preShow($_GET);
  preShow($_POST);    
  preShow($_SESSION);
  printMyCode();
  processing();   

  

  ?>
</body>
</html>