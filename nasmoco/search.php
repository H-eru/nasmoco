<!DOCTYPE html>
<html>

<head>
    <title>Nasmoco - Cari Mobil</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/main1.css">
    <link rel="stylesheet" type="text/css" href="css/cari.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <!-- Including jQuery is required. -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
    <!-- Including our scripting file. -->
    <script type="text/javascript" src="script.js"></script>
    <!-- Including CSS file. -->
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <span class="position-absolute trigger">
        <!-- hidden trigger to apply 'stuck' styles --></span>
    <nav class="navbar navbar-expand-sm sticky-top navbar-dark">
        <div class="container">
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbar1">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbar1">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link active text-dark" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark" href="cari.html">Cabang Service</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark" href="search.php">Pencarian</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark" href="about.php">About us</a>
                    </li>
                </ul>
            </div>
        </div>
        <!--container end-->
    </nav>
    <!-- Search box. -->
    <div class="text-center"><br>
        <div class="search-box ">
            <input type="text" id="search" placeholder="No Polisi" /><span></span>
        </div>
    </div>
    <br>
    <!-- Suggestions will be displayed in below div. -->

    <div id="display"></div>


    <!-- Footer Links -->

    <!-- Copyright -->
    <div class="text-center text-black-50 py-3 fixed-bottom" style="background-color: #9cafa3;">© 2019 Copyright: Udinus Kerja Praktek
    </div>
    <!-- Copyright -->

    </footer>

    <script>
        var searchBox = document.querySelectorAll('.search-box input[type="text"] + span');
        searchBox.forEach((elm) => {
            elm.addEventListener('click', () => {
                elm.previousElementSibling.value = '';
            });
        });
    </script>



</body>

</html>