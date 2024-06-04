<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>Responsive Navbar</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
</head>

<body>
    <div id="header">
        <div class="container1">
            <nav>
                <img src="images/logo.png" alt="logo" class="logo">
                <ul id="sidemenu">
                    <li><a href="home.php">Home</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#features">Features</a></li>
                    <li><a href="#process">Process</a></li>
                    <li><a href="#reviews">Reviews</a></li>
                    <li><a href="#contact">Contact</a></li>
                    <button><a href="login.php">Sign In</a></button>
                    <i class="fa-solid fa-xmark" onclick="closemenu()"></i>
                </ul>
                <i class="fa-solid fa-bars" onclick="openmenu()"></i>
            </nav>  
            
        </div>
    </div>

    <script>
        var tablinks = document.getElementsByClassName("tab-links");
        var tabcontents = document.getElementsByClassName("tab-contents");

        function opentab(tabname) {
            for (tablink of tablinks) {
                tablink.classList.remove("active-link");
            }
            for (tabcontent of tabcontents) {
                tabcontent.classList.remove("active-tab");
            }
            event.currentTarget.classList.add("active-link");
            document.getElementById(tabname).classList.add("active-tab");
        }


        var sidemenu = document.getElementById("sidemenu");

        function openmenu() {
            sidemenu.style.right = "0"
        }

        function closemenu() {
            sidemenu.style.right = "-200px"
        }
    </script>
</body>

</html>