<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
		    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1">
        <link rel="shortcut icon" href="images/logo_st.png" />
        <title>GloveIT</title>
        <!-- CSS -->
        <link href="css/main.css" type="text/css" rel="stylesheet" />
        <link href="css/navbar.css" type="text/css" rel="stylesheet" />
        <!-- SCRIPTS -->
        <script src="https://code.jquery.com/jquery-3.2.1.js"></script>
        <script src="js/navbar.js"></script>
    </head>

    <body>
      <!-- NAVITGATION -->
      <div class="navigation-bar">
        <!-- LOGO -->
        <div class="left-nav">
          <div class="logo">
              <img src="images/logo_st.png" alt="logo" id="logo-image">love<sup style="font-size: 14px;">IT</sup>
          </div>
        </div>
        <!-- MENU -->
        <div class="right-nav">
          <nav>
            <ul>
              <li><a href="#home">Home</a></li>
              <!-- <li><a href="#features">Features</a></li> -->
              <li><a href="#team">Team</a></li>
              <li><a href="#social">Social Events</a></li>
              <li><a href="#contacts">Contacts</a></li>
            </ul>
          </nav>
          <div id="nav-icon" onclick="myFunction()">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
          </div>
        </div>
        <a href="#home" id="up-arrow" class="up-arrow"><img src="images/up.png" alt="up-arrow"></a>

      </div>
      <!-- END NAVITGATION -->
      <!-- DROP DOWN -->
      <div class="drop-down">
        <ul>
          <li><a href="#home" onclick="closeMenu()"><div class="drop-link-wrapper">
            Home
          </div></a></li>
          <!-- <li><a href="#features"><div class="drop-link-wrapper">
            Features
          </div></a></li> -->
          <li><a href="#team" onclick="closeMenu()"><div class="drop-link-wrapper">
            Team
          </div></a></li>
          <li><a href="#social" onclick="closeMenu()"><div class="drop-link-wrapper">
            Social Events
          </div></a></li>
          <li><a href="#contacts" onclick="closeMenu()"><div class="drop-link-wrapper">
            Contacts
          </div></a></li>
        </ul>
      </div>
      <!-- END DROP DOWN -->
      <div id="home">
      </div>
      <div class="landing-page" id="landing-page">
        <div class="title">
          <div id="firstline">Imagine an idealistic</div>
          <div id="secondline">new everyday life</div>
          <div id="thirdline">in which. . .</div>
        </div>
        <a href="#main" class="down-arrow"><img src="images/up.png" alt="down-arrow" id="down-arrow"></a>
      </div>
      <!-- MAIN CONTAINER -->
      <div class="main-container"  id="main">
        <!-- WALLET -->
        <div class="section-wrapper">
          <div class="section">
            <div class="left-section">
              <img src="images/wallet.png" alt="wallet" class="f-images">
            </div>
            <div class="right-section">
              <div class="inner-container">
                <p class="content-title">Your wallet</p>
                <p class="content-subtitle">is not a two-pound brick in your pocket</p>
                <div class="learn-more-features">
                  <button type="button" name="button" onclick="nopage(1)" id="button1">Learn more</button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- END WALLET -->
        <div class="section-transition">

        </div>
        <!-- CREDIT CARDS -->
        <div class="section-wrapper">
          <div class="section">
            <div class="right-section">
              <img src="images/cards.png" alt="cards" class="f-images">
            </div>
            <div class="left-section">
              <div class="inner-container" id="cards">
                <p class="content-title">One card</p>
                <p class="content-subtitle">unifies all your</br>
               bank details, transit pass and ID information</p>
               <div class="learn-more-features">
                 <button type="button" name="button" onclick="nopage(2)" id="button2">Learn more</button>
               </div>
              </div>
            </div>
          </div>
        </div>
        <!-- END CARDS -->
        <div class="section-transition">

        </div>
        <!-- GREETING -->
        <div class="section-wrapper">
          <div class="section">
            <div class="left-section">
              <img src="images/greeting.png" alt="greeting" class="f-images">
            </div>
            <div class="right-section">
              <div class="inner-container">
                <p class="content-title">Greeting</p>
                <p class="content-subtitle">is made incredibly intuitive</p>
                   <div class="learn-more-features">
                     <button type="button" name="button" onclick="nopage(3)" id="button3">Learn more</button>
                   </div>
              </div>
            </div>
          </div>
        </div>
        <!-- END GREETING -->
        <div class="section-transition" id="team">

        </div>
        <!-- TEAM -->
        <div class="section-wrapper">
          <div class="section">
            <p class="content-title" id="our-team">Our Team</p>
              <div class="inner-container" id="team-container">
                <div class="first-row">
                  <div class="mastermind">
                    <img src="images/stefan.jpg">
                    <div class="text">
                      <h3>Stefan</h3>
                      <p>This mastermind studies mechatronics at KIT Karlsruhe and is head of the project organisation</p>
                    </div>
                  </div>
                  <div class="mastermind">
                    <img src="images/stan.jpg">
                    <div class="text">
                      <h3>Stan</h3>
                      <p>This mastermind studies informatics at KIT Karlsruhe and is head of the SmartHome department</p>
                    </div>
                  </div>
                  <div class="mastermind">
                    <img src="images/joan.jpg">
          					<div class="text">
          						<h3>Joan</h3>
          						<p>This mastermind studies informatics at KIT Karlsruhe and is part of the SmartHome department</p>
          					</div>
                  </div>
                  <div class="mastermind">
                    <img src="images/sasho.jpg">
                    <div class="text">
                      <h3>Alexander</h3>
                      <p>This mastermind studies electrical engineering at RWTH Aachen and is head of the Hardware department</p>
                    </div>
                  </div>
                </div>
                <div class="second-row">
                  <div class="mastermind">
                    <img src="images/martoLQ.jpg">
          					<div class="text">
          						<h3>Martin</h3>
          						<p>This mastermind studies informatics at KIT Karlsruhe and is head of the GloveIT:Greet<sup>©</sup> department</p>
          					</div>
                  </div>
                  <div class="mastermind">
                    <img src="images/icoLQ.jpg">
          					<div class="text">
          						<h3>Hristo</h3>
          						<p>This mastermind studies informatics at KIT Karlsruhe and is head of GloveIT:ID<sup>©</sup> department</p>
          					</div>
                  </div>
                  <div class="mastermind">
                    <img src="images/ico2.jpg">
          					<div class="text">
          						<h3>Hristo</h3>
          						<p>Studies informatics at TU Illmenau and is a development consultant</p>
          					</div>
                  </div>
                  <div class="mastermind">
                    <img src="images/krisLQ.jpg">
                    <div class="text">
                      <h3>Kris</h3>
                      <p>Studies electrical engineering at KIT Karlsruhe and is part of the Hardware department</p>
                    </div>
                  </div>
                </div>
              </div>
          </div>
        </div>
        <!-- END TEAM -->
        <div class="section-transition" style="height: auto; background-color: #efefef;" id="social">
          <p class="content-title" style="text-align: center; padding: 0;">Social Events</p>
					<p class="content-subtitle">
            We are a developer team made out of students in Europe and we<br />
						have one thing in mind - to shake things up!<br /><br />
						Our first public event will be in January 2019 at the "Digitale Innovationen"
						science fair in Germany.</p>
        </div>
        <!-- SOCIAL EVENTS -->
        <div class="section-wrapper" id="contacts">
          <div class="section subscribe" style="text-align: center">
            <p id="subscribe-launch">Subscribe to be the first to know about our launch.</p>
            <form>
              <div>
                <input name="email" type="email" placeholder="Email Adress" required="required"
                pattern="[a-zA-Z0-9!#$%'*+\/=?^_`{|}~.-]+@[a-zA-Z0-9-]+(\.[a-zA-Z0-9-]+)*">

                <?php

                  include_once "php/class.verifyEmail.php";
                  $vmail = new verifyEmail();
                  $isEmailValid = $vmail->check($_POST['email']);

                ?>

                <button type="submit" id="button" onclick="subscribed()">Subscribe Now</button>
              </div>
            </form>
            <div class="left-section" style="width: 100%;">
              <img src="images/social.png" alt="greeting" class="f-images">
            </div>
          </div>
        </div>
        <!-- END SOCIAL EVENTS -->
        <!-- FOOTER -->
        <footer id="contacts">
          <div class="section">
            <div class="social">
              <a href="https://www.facebook.com/GloveiT-213555956152985/"><img src="images/facebook.png"/></a>
              <a href="https://mobile.twitter.com/glove_it_tech"><img src="images/twitter.png" /></a>
              <!--<a href="https://www.facebook.com/"><img src="images/insta.png" /></a>
              <a href="https://www.facebook.com/"><img src="images/link.png" /></a>-->
            </div>
            <div class="bottom">
              <p>For contact: 0049 1636 404304 / 0049 1577 8227673</p>
              <p>E-mail: gloveit@outlook.com</p>
            </div>
            <div class="copyright">
              <p>© Copyright 2018 GloveIT All Rights Reserved</p>
              <p>Website is in development.</p>
            </div>
          </div>
        </footer>
        <!-- END FOOTER -->
      </div>
    </body>
</html>
