<!DOCTYPE html>
<html>
<head>
    <link href="style.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.3.1.js"
        integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous">
    </script>
    <script>
        $(function () {
            $("#header").load("header.html");
            $(".footer-dark").load("footer.html")
        });
    </script>
    <div id="header"></div>
    <div class= "footer-dark"></div>
</head>
<h1>Jinsang Oh
    <dl id = "navLinks">
        <li><a href="profile.html"> Profile</a></li>
        <li><a href="photos.html"> Photos</a></li>
        <li><a href="rashi.html"> Rashi</a></li>
        <li><a href="games.html"> Games</a></li>
        <li><a href="algorithm.html"> Algorithm</a></li>
        <li><a href="aboutPage.html"> about</a></li>
    </dl>
</h1>

<body>
    <div id=grid>
    </div>
    
</body>
</html>