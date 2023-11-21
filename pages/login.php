
<?php

session_start();
if(isset($_SESSION['user'])){
  ?>
  <script>
    // window.history.back();
    location.replace("./user-profile.php")
  </script>
  <?php
}
?>
<!DOCTYPE html>

<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css"
    />
    <title>Web Store | Login Page</title>
    <style>
      @import url("https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap");
      * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: "Quicksand", sans-serif;
      }
      body {
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
        background: #000;
      }
      section {
        position: absolute;
        width: 100vw;
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
        gap: 2px;
        flex-wrap: wrap;
        overflow: hidden;
      }
      section::before {
        content: "";
        position: absolute;
        width: 100%;
        height: 100%;
        background: linear-gradient(#000, #0f0, #000);
        animation: animate 5s linear infinite;
      }
      @keyframes animate {
        0% {
          transform: translateY(-100%);
        }
        100% {
          transform: translateY(100%);
        }
      }
      section span {
        position: relative;
        display: block;
        width: calc(6.25vw - 2px);
        height: calc(6.25vw - 2px);
        background: #181818;
        z-index: 2;
        transition: 1.5s;
      }
      section span:hover {
        background: #0f0;
        transition: 0s;
      }

      section #userAuthForm {
        position: absolute;
        width: 400px;
        z-index: 5;
      }

      section .signin {
        background: #222222c3;
        display: flex;
        width: 100%;
        justify-content: center;
        align-items: center;
        padding: 40px;
        border-radius: 4px;
        box-shadow: 0 15px 35px rgba(0, 0, 0, 9);
        transition: all 1s ease-out;
      }
      section #register {
        padding: 10px 40px;
        transform: rotateY(90deg);
        top: -10%;
        position: absolute;
      }
      section .signin .content {
        position: relative;
        width: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        gap: 10px;
      }
      section .signin .content h2 {
        font-size: 2em;
        color: #0f0;
        text-transform: uppercase;
      }
      section .signin .content .form {
        width: 100%;
        display: flex;
        flex-direction: column;
        gap: 25px;
      }
      section .signin .content .form .inputBox {
        position: relative;
        width: 100%;
      }
      .SelectBox{
        display: flex;
        flex-direction: column;
        color: #fff;
      }
      .SelectBox select{
        background-color: #333;
        color: #fff;
        padding: 10px;
        border: 0;
        margin-top: .5rem;
      }
      section .signin .content .form .inputBox input {
        position: relative;
        width: 100%;
        background: #333;
        border: none;
        outline: none;
        border-radius: 4px;
        padding: 25px 10px 7.5px;
        color: #fff;
        font-weight: 500;
        font-size: 1em;
      }
      section #register input {
        padding: 15px 5px 7.5px;
      }
      section #register .inputBox i {
        padding: 5px 10px;
      }
      section .signin .content .form .inputBox i {
        position: absolute;
        padding: 15px 10px;
        left: 0;
        font-style: normal;
        color: #aaa;
        transition: 0.5s;
        pointer-events: none;
      }
      .signin .content .form .inputBox input:focus ~ i,
      .signin .content .form .inputBox input:valid ~ i {
        transform: translateY(-7.5px);
        font-size: 0.8em;
        color: #fff;
      }
      .signin .content .form .links {
        position: relative;
        width: 100%;
        display: flex;
        justify-content: space-between;
      }
      .signin .content .form .links a {
        color: #fff;
        text-decoration: none;
      }
      .signin .content .form .links a:nth-child(2) {
        color: #0f0;
        font-weight: 600;
      }
      .signin .content .form .inputBox input[type="submit"] {
        padding: 5px;
        background: #0f0;
        color: #000;
        font-weight: 600;
        font-size: 1.35em;
        letter-spacing: 0.05em;
        cursor: pointer;
      }
      section #register .content .form .inputBox input[type="submit"] {
        padding: 5px 10px;
      }
      input[type="submit"]:active {
        opacity: 0.6;
      }
      @media (max-width: 900px) {
        section span {
          width: calc(10vw - 2px);
          height: calc(10vw - 2px);
        }
      }
      @media (max-width: 600px) {
        section span {
          width: calc(20vw - 2px);
          height: calc(20vw - 2px);
        }
      }
    </style>
    <link rel="stylesheet" href="../css/common.css" />
  </head>

  <body>
    <!-- partial:index.partial.html -->

    <section>
      <span></span> <span></span> <span></span> <span></span> <span></span>
      <span></span> <span></span> <span></span> <span></span> <span></span>
      <span></span> <span></span> <span></span> <span></span> <span></span>
      <span></span> <span></span> <span></span> <span></span> <span></span>
      <span></span> <span></span> <span></span> <span></span> <span></span>
      <span></span> <span></span> <span></span> <span></span> <span></span>
      <span></span> <span></span> <span></span> <span></span> <span></span>
      <span></span> <span></span> <span></span> <span></span> <span></span>
      <span></span> <span></span> <span></span> <span></span> <span></span>
      <span></span> <span></span> <span></span> <span></span> <span></span>
      <span></span> <span></span> <span></span> <span></span> <span></span>
      <span></span> <span></span> <span></span> <span></span> <span></span>
      <span></span> <span></span> <span></span> <span></span> <span></span>
      <span></span> <span></span> <span></span> <span></span> <span></span>
      <span></span> <span></span> <span></span> <span></span> <span></span>
      <span></span> <span></span> <span></span> <span></span> <span></span>
      <span></span> <span></span> <span></span> <span></span> <span></span>
      <span></span> <span></span> <span></span> <span></span> <span></span>
      <span></span> <span></span> <span></span> <span></span> <span></span>
      <span></span> <span></span> <span></span> <span></span> <span></span>
      <span></span> <span></span> <span></span> <span></span> <span></span>
      <span></span> <span></span> <span></span> <span></span> <span></span>
      <span></span> <span></span> <span></span> <span></span> <span></span>
      <span></span> <span></span> <span></span> <span></span> <span></span>
      <span></span> <span></span> <span></span> <span></span> <span></span>
      <span></span> <span></span> <span></span> <span></span> <span></span>
      <span></span> <span></span> <span></span> <span></span> <span></span>
      <span></span> <span></span> <span></span> <span></span> <span></span>
      <span></span> <span></span> <span></span> <span></span> <span></span>
      <span></span> <span></span> <span></span> <span></span> <span></span>
      <span></span> <span></span> <span></span> <span></span> <span></span>
      <span></span> <span></span> <span></span> <span></span> <span></span>
      <span></span> <span></span> <span></span> <span></span> <span></span>
      <span></span> <span></span> <span></span> <span></span> <span></span>
      <span></span> <span></span> <span></span> <span></span> <span></span>
      <span></span> <span></span> <span></span> <span></span> <span></span>
      <span></span> <span></span> <span></span> <span></span> <span></span>
      <span></span> <span></span> <span></span> <span></span> <span></span>
      <span></span> <span></span> <span></span> <span></span> <span></span>
      <span></span> <span></span> <span></span> <span></span> <span></span>
      <span></span> <span></span> <span></span> <span></span> <span></span>
      <span></span> <span></span> <span></span> <span></span> <span></span>
      <span></span> <span></span> <span></span> <span></span> <span></span>
      <span></span> <span></span> <span></span> <span></span> <span></span>
      <span></span> <span></span> <span></span> <span></span> <span></span>
      <span></span> <span></span> <span></span> <span></span> <span></span>
      <span></span> <span></span> <span></span> <span></span> <span></span>
      <span></span> <span></span> <span></span> <span></span> <span></span>
      <span></span> <span></span> <span></span> <span></span> <span></span>
      <span></span> <span></span> <span></span> <span></span> <span></span>
      <span></span> <span></span> <span></span> <span></span> <span></span>
      <span></span> <span></span> <span></span> <span></span> <span></span>

      <div id="userAuthForm">
        <div class="signin" id="login">
          <div class="absolute goBack">
            <a href="../"><i class="bi bi-chevron-left"></i> go to home</a>
          </div>
          <div class="content">
            <h2>Sign In</h2>
            <form action="../backend/userController.php" method="post" class="form" id="loginForm">
            <div class="SelectBox" >
              <label for="">Login As</label>
                <select name="" id="">
                  <option value="">Select Your Type</option>
                  <option value="1">Student</option>
                  <option value="2">Institute</option>
                  <option value="3">Sponser</option>
                  <option value="4">Teacher</option>
                </select> 
              </div>
              <div class="inputBox">
                <input type="text" name="emailMobile" /> <i>email</i>
              </div>
              
              <div class="inputBox">
                <input type="password" name="password" /> <i>Password</i>
              </div>

              <div class="links">
                <a href="#">Forgot Password</a>
                <a href="#" id="goSignUp">Signup</a>
              </div>

              <div class="inputBox">
                <input type="submit" value="Login" />
              </div>
            </form>
          </div>
        </div>
        <div class="signin register" id="register">
          <div class="absolute goBack">
            <a href="../"><i class="bi bi-chevron-left"></i> go to home</a>
          </div>
          <div class="content">
            <h2>Sign Up</h2>
            <form
              action="../backend/userController.php"
              class="form"
              method="post"
            >
              <div class="inputBox">
                <input type="text" name="email" /> <i>Email</i>
              </div>
              <div class="inputBox">
                <input type="text" name="mobile" maxlength="10" /> <i>Mobile Number</i>
              </div>
              <div class="inputBox">
                <input type="password" name="password" /> <i>Password</i>
              </div>
              <div class="inputBox">
                <input type="password" name="confirmPassword" />
                <i>Confirm Password</i>
              </div>

              <div class="links">
                <a href="#"></a> <a href="#" id="goSignIn">Sign In</a>
              </div>

              <div class="inputBox">
                <input type="submit" name="register" value="Sign Up" />
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
    <!-- partial -->
    <script>
      const userAuthForm = document.getElementById("userAuthForm");

      const handleForms = (e, state = false) => {
        e.preventDefault();
        if (!state) {
          userAuthForm.querySelector("#register").style.transform =
            "rotateY(90deg)";
          userAuthForm.querySelector("#login").style.transform =
            "rotateY(0deg)";
        } else {
          userAuthForm.querySelector("#login").style.transform =
            "rotateY(90deg)";
          userAuthForm.querySelector("#register").style.transform =
            "rotateY(0deg)";
          // userAuthForm.querySelector("#register").style.visibility = "visible";
        }
      };
      userAuthForm
        .querySelector("#goSignUp")
        .addEventListener("click", (e) => handleForms(e, true));
      userAuthForm
        .querySelector("#goSignIn")
        .addEventListener("click", handleForms);
        
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js"></script>
    <script src="../js/validation.js"></script>
  </body>
</html>
