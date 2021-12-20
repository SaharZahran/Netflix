<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Netflix</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script defer src="https://use.fontawesome.com/releases/v5.1.0/js/all.js" integrity="sha384-3LK/3kTpDE/Pkp8gTNp2gR/2gOiwQ6QaO7Td0zV76UFJVhqLl4Vl3KL1We6q6wR9" crossorigin="anonymous"></script>

    <script src="main.js"></script>
    <link rel="stylesheet" href="css/theme.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="wrapper">

        <!-- HEADER -->
        <header>
            <div class="netflixLogo">
                <a id="logo" href="#home"><img src="https://github.com/carlosavilae/Netflix-Clone/blob/master/img/logo.PNG?raw=true" alt="Logo Image"></a>
            </div>
            <nav class="main-nav">
                <a href="#home">Home</a>
                <a href="#tvShows">TV Shows</a>
                <a href="#movies">Movies</a>
                <a href="#originals">Originals</a>
                <a href="#">Recently Added</a>
            </nav>
            <nav class="sub-nav">
                <a href="#"><i class="fas fa-search sub-nav-logo"></i></a>
                <a href="#"><i class="fas fa-bell sub-nav-logo"></i></a>
                <a href="#">Account</a>
            </nav>
        </header>
        <!-- END OF HEADER -->

        <!-- MAIN CONTAINER -->
        <section class="main-container">
            <div class="location" id="home">
                <h1 id="home">Popular on Netflix</h1>
                <a href="/movies.create" class="add-btn">Add New Movie</a>
                <div class="box" id="movies">
                    @foreach($movies as $movie)
                    <div>

                        <td><a href="/delete.{{$movie->id}}"><i class="fas fa-trash-alt"></i></a></td>
                        <td><a href="/movies.{{$movie->id}}.edit"><i class="fas fa-edit"></i></a></td>
                        <img src="{{$movie->movie_img}}" alt="">
                        <h2>{{$movie->movie_name}}</h2>
                        <h4>{{$movie->movie_desc}}</h4>
                        <p>{{$movie->movie_gener}}</p>
                    </div>
                    @endforeach
                </div>
            </div>

            <!-- END OF MAIN CONTAINER -->

            <!-- LINKS -->
            <section class="link">
                <div class="logos">
                    <a href="#"><i class="fab fa-facebook-square fa-2x logo"></i></a>
                    <a href="#"><i class="fab fa-instagram fa-2x logo"></i></a>
                    <a href="#"><i class="fab fa-twitter fa-2x logo"></i></a>
                    <a href="#"><i class="fab fa-youtube fa-2x logo"></i></a>
                </div>
                <div class="sub-links">
                    <ul>
                        <li><a href="#">Audio and Subtitles</a></li>
                        <li><a href="#">Audio Description</a></li>
                        <li><a href="#">Help Center</a></li>
                        <li><a href="#">Gift Cards</a></li>
                        <li><a href="#">Media Center</a></li>
                        <li><a href="#">Investor Relations</a></li>
                        <li><a href="#">Jobs</a></li>
                        <li><a href="#">Terms of Use</a></li>
                        <li><a href="#">Privacy</a></li>
                        <li><a href="#">Legal Notices</a></li>
                        <li><a href="#">Corporate Information</a></li>
                        <li><a href="#">Contact Us</a></li>
                    </ul>
                </div>
            </section>
            <!-- END OF LINKS -->

            <!-- FOOTER -->
            <footer>
                <p>&copy 1997-2018 Netflix, Inc.</p>
                <p>Carlos Avila &copy 2018</p>
            </footer>
    </div>
</body>

</html>