<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Basics</title>
    <link rel="stylesheet" href="css/index.css" />
    <!-- <link
      href="https://fonts.googleapis.com/css?family=Montserrat"
      rel="stylesheet"
    /> -->

    <nav>
      <div class="ctr">
        <a href="index.php" id="n1">HOME</a>
        <a href="basics.php" id="n2">BASICS</a>
        <a href="about.php" id="n3">ABOUT</a>
        <a href="feedback.php" id="n4">FEEDBACK</a>
        <?php if(isset($_COOKIE['user'])) echo '<a href="logout.php" id="n5">LOGOUT</a>'; else echo '<a href="login.php" id="n5">LOGIN</a>'?>
        <!-- <a href="login.html" id="n5">LOGIN</a> -->
        <a href="app.php" id="n6" target="_blank">APP</a>
      </div>
    </nav>


    <!-- <img class="nav-logo" src="assets/nav_logo.png" /> -->
  </head>

  <body style="display: flex; flex-direction: column">
    <div class="slide" id="s1">
      <div class="content">
        <center class="col-flex">
          <h1
            style="font-weight: 900; padding-bottom: 120px"
            class="make-me-blue"
          >
            BASICS
          </h1>
          <center><img id="s1-logo" src="assets/plan.svg" /></center>
          <label class="col-flex">
            <label
              style="
                padding-bottom: 20px;
                font-size: 22px;
                font-weight: 800;
                padding-top: 120px;
              "
              >THE DELIVERY BOY</label
            >
          </label>
        </center>
      </div>
    </div>

    <!-- <div class="slide" id="s2" style="background-color: white">
      <div class="content">
        <img id="s2-img" src="assets/Tree.JPG" />
      </div>
    </div> -->

    <div class="slide" id="s2" style="background-color: white; display: block">
      <div class="content">
        <div class="design">
          <center>
            <span
              id="tree-title"
              class="make-me-blue"
              style="
                padding: 10px 350px;
            
                border: 1px solid grey;
                font-size: 20px;
                z-index: 100;
                background-color: white;
                transform: translateX(-10vw);
              "
              >THE DELIVERY BOY</span
            >
          </center>
          <br />
          
          <span id="comp-1" class="box">MENU</span>
          <span id="comp-2" class="box">GAME MODE</span><br />
          <span id="sub-comp-1" class="box box2">PLAY</span>
          <span id="sub-comp-2" class="box box2">TUTORIAL</span>
          <span id="sub-comp-3" class="box box2">LEADERBOARD</span><br />
          <span style="padding-left: 400px"></span>
          <span id="sub-comp-4" class="box box2">5 LEVELS</span>
          <span id="sub-comp-5" class="box box2">TIMER</span>
          <span id="sub-comp-6" class="box box2">HINT</span>
          <span id="sub-comp-7" class="box box2">RESULT</span>

          <span id="menu-line"></span>
          <span id="gamemode-line"></span>
          <span id="sub-line-1"></span>
          <span id="sub-line-2"></span>

          <span id="dot1"></span>
          <span id="dot2"></span>
          <span id="dot3"></span>
        
        </div>
      </div>
      <link rel="stylesheet" href="css/tree.css" />
    </div>

    <div class="slide" style="background-color: #fffcdc">
      <div class="content">
        <h1 class="make-me-blue" >THE GAME</h1>
        <!---<p style="margin-top: 30px">
         <br />1: PLAY<br />2:
          TUTORIAL<br />3: LEADERBOARD
        </p>-->
        <p style="margin-top: 30px">
          <!---<b class="make-me-blue"> THE GAME.</b><br />-->
          To Start the Game Enter Play!! Just know that there are 5 levels...
          Incase you're one of those people who are interested in knowing more about the workings
          of the game (playing is more fun btw)..
          <a href="#game-mode" class="link-hover">More Details</a>
        </p>
        <!---<p style="margin-top: 30px">
          <b class="make-me-blue">2: TUTORIAL</b><br />
          This will start the tour of the game. Showing all the rules and
          regulations to finish the game.
        </p>
        <p style="margin-top: 30px">
          <b class="make-me-blue">3: LEADERBOARD</b><br />
          This is the players where the players rankings will be showin in
          ascending order.-->
        </p>
      </div>
    </div>

    <div class="slide" style="background-color: white" id="game-mode">
      <div class="content">
        <h1 class="make-me-blue">GAME MODE</h1>
        <!--<p style="margin-top: 30px">
          Our game mode is going to be made up of multiple components like
          levels, timer, hints, results, etc.-->
        </p>
        <p style="margin-top: 30px">
          Hey!! We're Delighted you made it this far.
          <br> <br>
          A few important points about the game:
          <br> <br>
          -> In the first level a sheet will be shown for 14 seconds from which you must remember the details which will contain the address to which the package must be delivered.
          <br>
          -> In Level 2 the sheet will be displayed for an additional 4 seconds.
          <br>

          -> Hints will be displayed at every level , however for each time you make use of a hint 40 points will be deducted.
          <br>

                    
          -> That's it from us. You'll figure out the rest as you keep playing.
          
          <br /><br />
          
          
          <br /><br />
        </p>
      </div>
    </div>
  </body>

  <script></script>
</html>
