<!DOCTYPE html>
<html lang="en">

<head>
    <title>WhatSauce</title>
    <link rel="stylesheet" href="stylelog.css">

    <script>
        function validate() {
            const pass = document.loginpage.password;
            const email = document.loginpage.emailid;

            if (email.value == "") {
                alert("Please enter Email-ID !");
                return false;
            }

            if (email.value.indexOf("@", 0) < 0) {
                window.alert("Please enter a valid e-mail address.");
                email.focus();
                return false;
            }

            if (email.value.indexOf(".", 0) < 0) {
                window.alert("Please enter a valid e-mail address.");
                email.focus();
                return false;
            }

            if (pass.value == "") {
                alert("Please enter password !");
                return false;
            }
        }
    </script>
</head>

<body>
    <div class="banner">
        <div class="navbar">
            <span class="logo">
                <h1><a href="main.php">WhatSauce</a></h1>
            </span>
            <ul>
                <li><a href="main.php">Home</a>
                <li><a href="topanime.php">Top Anime</a></li>
                <li><a href="seasonal.php">seasonal Anime</a></li>
               <!--  <ul class="dropdown">
                  <li><a href="topanime.php">Top</a></li>
                  <li><a href="seasonal.php">seasonal</a></li>
                </ul> -->

                </li>
                <li><a href="topmanga.php">Top Manga</a></li>
                  <li><a href="seasonalm.php">Seasonal Manga</a></li>
               <!--  <ul class="dropdown">
                  <li><a href="topmanga.php">Top Manga</a></li>
                  <li><a href="seasonalm.php">Seasonal Manga</a></li>
                </ul> -->
                </li>
                <li><a href="login.php">Login</a></li>
                <li><a href="about.php">About us</a></li>

            </ul>
        </div>

        <!-- <div class="addspace"></div> -->

        <div class="loginbanner">
            <center>
                <h1>Login</h1>
                <hr>
                <form method="post" name="loginpage" id="loginpage" action="loginchk.php" onsubmit="return validate()">
                    <label for="emailid">Email ID &nbsp&nbsp </label> <br>
                    <input type="text" placeholder="Enter Email ID" name="emailid" /> <br><br>

                    <label for="password">Password &nbsp </label> <br>
                    <input type="password" placeholder="Enter Password" name="password" /> <br><br>
                    <button type="submit" form="loginpage" class="formbtn">Submit</button> <br><br>
                    <p class="linkHover"><a href="register.php"> Click here to register !!!</a></p>


                </form>
            </center>
        </div>
</body>

</html>