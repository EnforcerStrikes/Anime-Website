<!DOCTYPE html>
<html lang="en">

<head>
  <title>WhatSauce</title>
  <link rel="stylesheet" href="registercs.css" />

  <script>
    function validate() {
      const uname = document.registerpage.username;
      const pass = document.registerpage.password;
      const pass2 = document.registerpage.rpassword;
      const email = document.registerpage.emailid;
      const phno = document.registerpage.phonenumber;
      /* const gender = document.registerpage.gender; */
      const age = document.registerpage.age;

      if (uname.value == "trial") {
        window.alert("thats a very weird name");

        return false;
      }

      if (uname.value == '') {
        alert("Please enter username !");

        return false;
      }

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

      if (age.value == "") {
        alert("Please enter age !");
        return false;
      }

      if (phno.value == "") {
        window.alert("Please enter your Mobile number");
        return false;
      }

      if (pass.value == "") {
        alert("Please enter password !");
        return false;
      }

      if (pass2.value == "") {
        alert("Please re-enter password !");
        return false;
      }

      if (pass2.value != pass.value) {
        alert("Re-entered password is incorrect !");
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
        <li><a href=login.php>Login</a></li>
        <li><a href="about.php">About us</a></li>

      </ul>
    </div>

    <div class="formsbanner">
      <center>
        <h1>Registration</h1>
        <hr />
        <table>
          <form action="connect.php" name="registerpage" id="registerpage" method="post" onsubmit="return validate()">
            <tr>
              <td>
                <label for="username">Username : </label>
              </td>
              <td>
                <input type="text" placeholder="Enter Username" name="username" x />
              </td>
            </tr>

            <tr>
              <td>
                <label for="emailid">Email ID &nbsp&nbsp: </label>
              </td>
              <td>
                <input type="text" placeholder="Enter Email" name="emailid" />
              </td>
            </tr>

            <tr>
              <td>
                <label for="age">Age: </label>
              </td>
              <td>
                <input type="text" placeholder="Enter age" name="age" />
              </td>
            </tr>

            <tr>
              <td>
                <label for="phonenumber">Phone Number: </label>
              </td>
              <td>
                <input type="text" placeholder="Enter Phone No." name="phonenumber" />
              </td>
            </tr>

            <tr>
              <td>
                <label for="password">Password &nbsp: </label>
              </td>
              <td>
                <input type="password" placeholder="Enter Password" name="password" />
              </td>
            </tr>

            <tr>
              <td>
                <label>Re-Enter Password &nbsp: </label>
              </td>
              <td>
                <input type="password" placeholder="Enter Password" name="rpassword" />
              </td>
            </tr>

            <tr>
              <td colspan="2">
                <button type="submit" form="registerpage" class="formbtn">
                  Register
                </button>
              </td>
            </tr>
            <tr>
              <td colspan="2">
                <button type="reset" class="formbtn">Reset</button>
              </td>
            </tr>
          </form>
        </table>
      </center>
    </div>
  </div>

</body>

</html>