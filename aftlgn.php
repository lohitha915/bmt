<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>afterlogin</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=DM+Serif+Display:ital@0;1&family=Days+One&family=Domine:wght@400;500;600;700&family=Kanit:ital,wght@0,600;1,600&family=Lilita+One&family=Pacifico&family=Poppins:ital,wght@0,300;1,200&family=Satisfy&display=swap"
        rel="stylesheet">

    <style type="text/css">
        @import url('https://fonts.googleapis.com/css2?family=DM+Serif+Display:ital@0;1&family=Days+One&family=Domine:wght@400;500;600;700&family=Kanit:ital,wght@0,600;1,600&family=Lilita+One&family=Poppins:ital,wght@0,300;1,200&family=Satisfy&display=swap');


        body {
            font-family: 'Poppins', sans-serif;
        }

        header {
            width: 100%;
            height: 85vh;

        }



        header .content::before {
            content: "";
            position: absolute;
            width: 100%;
            height: 100%;
            background-color: #000;
            background-repeat: no-repeat;
            background-size: cover;

            z-index: -1;
        }

        header .content {
            content: "";
            position: relative;
            width: 100%;
            height: 93.4%;
            font-size: 8rem;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-content: center;
            text-align: center;
            color: white;



        }

        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        .iconsContainer {
            display: flex;
            align-items: center;



        }

        .icons {
            align-items: center;
            justify-content: center;
            text-align: center;
            vertical-align: auto;

        }

        .icon {

            border: 2px double;
            border-radius: 5%;
            background-color: white;

        }

        i:hover {
            color:#146C94
        }


        .text {
            font-family: 'Domine', serif;
            font-size: small;


        }

        .text1 {
            font-family: 'Kanit', sans-serif;
            font-size: 2rem;
            color: white;

        }

        .text2 {
            font-family: 'Satisfy', cursive;
            color: white;
            font-size: 1rem;
        }

        .maincontainer {
            background-image: url("https://images.unsplash.com/photo-1516747550015-8e234a06e039?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1974&q=80");
            background-repeat: no-repeat;
            background-size:cover;
            width:100%;
        }

        .text3 {
            opacity: 0.6;
            color:white;
         }
         .text3 p{
   
            font-size: 1.3rem;
            text-align: justify;
             }
            

    </style>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
              <a class="navbar-brand" href="#">Book My Trip</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="about.html">About Us</a>
                  </li>

              </div>
            </div>
          </nav>

        <div class="content">
            <h1>
                The Right Destination For You And Your Family
            </h1>
            <h2>
                Travel is the only thing you buy that makes you richer.
            </h2>
        </div>
        <div class="text1  bg-dark container-fluid text-center">
            LIVE THE LIFE U DREAM
            <p class="text2">Pack your bags. We’re going on vacation!</p>
        </div>
        <div class="maincontainer row row cols-md-2">
            <div class="iconsContainer m-md-5 col">
                <div class="icons m-md-5 p-md-5  row row-cols-1 row-cols-md-2 row-cols-lg-3">
                    <div class="text">
                        Flights
                        <div class="icon col m-md-auto"><a href="user1.php" class="text-dark"><i
                                    class="bi bi-airplane-engines-fill fa-4x "></i></a>
                        </div>
                    </div>
                    <div class="text">
                        Buses
                        <div class="icon col m-md-auto"><a href="userbus.php" class="text-dark"><i
                                    class="bi bi-bus-front-fill fa-4x "></i></a>
                        </div>
                    </div>
                    <div class="text">
                        Trains
                        <div class="icon col m-md-auto"><a href="usertrain.php" class="text-dark">
                                <i class="bi bi-train-front-fill fa-4x "></i>
                            </a>
                        </div>
                    </div>
                    <div class="text">
                        Hotels
                        <div class="icon col m-md-auto"><a href="hotels.php" class="text-dark"><i
                                    class="bi bi-buildings-fill fa-4x"></i></a>
                        </div>
                    </div>
                    <div class="text">
                        packages
                        <div class="icon col m-md-auto"><a href="package.php" class="text-dark"><i
                                    class="bi bi-tree-fill fa-4x"></i></a>
                        </div>
                    </div>
                    <div class="text">
                        Activities
                        <div class="icon col m-md-auto"><a href="activities.php" class="text-dark"><i
                                    class="bi bi-bicycle fa-4x"></i></a>
                        </div>
                    </div>

                </div>
            </div>
            <div class="text3 bg-dark col justify-content-md-evenly ">
                <p class="container-fluid text-center mt-md-5">Traveling is a humbling experience. It is merely a superior feeling: to go to another country, and to
                    see people live differently, speak differently, look differently. This is how one comes to
                    understand how big and crazy our world is.

                    Another benefit to traveling is coming to see one’s native country in a different light, in a
                    different way. It is possible through making a comparison of your home and a foreign location. Sure,
                    this is impossible without traveling. Going to unknown places create new perspectives and
                    inspiration.
                </p>
            </div>
        </div>


    </header>
</body>

</html>