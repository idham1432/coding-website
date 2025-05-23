<?php include 'auth.php'; ?>

<!DOCTYPE html>
<html>
<head>
  <title>Course</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <link rel="stylesheet" href="page-template.css">
  <style>
    /* content */
    /* .content {
      background-color: #373c3f;
      color: #f9f9f9;
      width: 100%;
      height: 100%;
      display: flex;
      align-items: center;
      justify-content: center;
    } */

    .container {
      width: 100%;
    }

    /* Page path */
    .page-path {
      margin-bottom: 10px;
      padding: 0 13px;
    }

    .triangle-right {
      display: inline-block;
      width: 0;
      height: 0;
      border-top: 5px solid transparent;
      border-left: 6px solid #767676;
      border-bottom: 5px solid transparent;
      margin: 0 2px;
    }

    .page-path ul li {
      list-style: none;
      display: inline-block;
      font-size: 18px;
      font-weight: bold;
      margin-right: 12px;
    }

    .page-path ul li:hover {
      background: none;
    }
    .page-path ul li a {
      text-decoration: none;
      color: #05192d;
      position: relative;
    }
    .page-path ul li a::after {
      content: '';
      width: 0;
      height: 1px;
      background: #05192d;;
      position: absolute;
      left: 0;
      bottom: -2px;
      transition: 0.15s;
    }
    .page-path ul li a:hover::after {
      width: 100%;
    }

    /* Style the buttons that are used to open and close the accordion panel */
    .accordion {
      display: flex;
      align-items: center;
      justify-content: space-between;
      gap: 2rem;
      color: #444;
      cursor: pointer;
      padding: 18px;
      width: 100%;
      text-align: left;
      font-size: 18px;
      font-weight: bold;
      border-top: 1px solid black;
      border-right: 1px solid black;
      border-bottom: 1px solid transparent;
      border-left: 1px solid black;
      outline: none;
    }

    .accordion img {
      width: 100px;
      margin: 0;
    }

    .accordion span {
      width: 100%;
    }

    /* Add a background color to the button if it is clicked on (add the .active class with JS), and when you move the mouse over it (hover) */
    .accordion:hover {
      background-color: #ccc;
    }

    /* Style the accordion panel. Note: hidden by default */
    .panel {
      padding: 0;
      background-color: white;
      border-top: 1px solid rgba(10, 10, 10, 0.2);
      border-right: 1px solid black;
      border-bottom: 1px solid black;
      border-left: 1px solid black;
      margin-bottom: 10px;
    }

    ul a {
      text-decoration: none;
      color: #444;
    }

    ul a li {
      list-style: none;
      padding: 15px 25px;
      font-size: 14px;
      font-weight: bold;
      cursor: pointer;
    }

    ul li:hover {
      background-color: #ccc;
    }
  </style>
</head>
<body>
  <div class="navbar">
    <a href="home.php"><i class="fa-solid fa-house"></i></a> <!-- Home -->
    <a href="course.php"><i class="fa-solid fa-graduation-cap"></i></a> <!-- Course -->
    <a href="profile.php"><i class="fa-solid fa-sliders"></i></a> <!-- Profile -->
    <a href="#"><i class="fa-solid fa-moon"></i></a> <!-- Theme -->
    <a href="logout.php"><i class="fa-solid fa-arrow-right-from-bracket"></i></a> <!-- Logout -->
  </div>

  <!-- Sidebar -->
  <div class="user-info">
    <div class="profile">
      <h2>Profile</h2>
    </div>
    <div class="user-image">
      <img src="user/<?php echo htmlspecialchars($_SESSION['username']); ?>.png" alt="User Profile">
      <h2 class="username"><?php echo htmlspecialchars($_SESSION['real_name']); ?></h2>
      <p><?php echo htmlspecialchars($_SESSION['username']); ?></p>
    </div>

    <div class="progress">
      <div class="progress-row">
        <div class="progress-icon">
          <img src="sidebar/rank-megabit.svg" alt="">
        </div>
        <div class="progress-text">
          <p class="progress-text-muted">Rank</p>
          <p class="progress-text-bold">Megabit</p>
        </div>
      </div>
      <div class="progress-row">
        <div class="progress-icon">
          <img src="sidebar/bit.svg" alt="">
        </div>
        <div class="progress-text">
          <p class="progress-text-muted">Bits</p>
          <p class="progress-text-bold">0 bit</p>
        </div>
      </div>
      <div class="progress-row">
        <div class="progress-icon">
          <img src="sidebar/coin.svg" alt="">
        </div>
        <div class="progress-text">
          <p class="progress-text-muted">Coins</p>
          <p class="progress-text-bold">0</p>
        </div>
      </div>
      <div class="progress-row">
        <div class="progress-icon">
          <img src="sidebar/speed.svg" alt="">
        </div>
        <div class="progress-text">
          <p class="progress-text-muted">Speed</p>
          <p class="progress-text-bold">0 Hz</p>
        </div>
      </div>
      <div class="progress-row-task">
        <div class="progress-icon">
          <img src="sidebar/tasks.svg" alt="">
        </div>
        <div class="progress-text">
          <p class="progress-text-muted">Tasks</p>
          <p class="progress-text-bold">0</p>
        </div>
      </div>
    </div>

    <div class="badges">
      <h2>Badges</h2>
      <div class="badges-row">
        <img class="badges-icon" src="sidebar/badge-course.svg" alt="">
        <img class="badges-icon" src="sidebar/badge-module-finished.svg" alt="">
        <img class="badges-icon" src="sidebar/badge-lesson-finished.svg" alt="">
        <img class="badges-icon" src="sidebar/badge-course-finished.svg" alt="">
      </div>
      <div class="badges-row">
        <img class="badges-icon" src="sidebar/badge-module.svg" alt="">
        <img class="badges-icon" src="sidebar/badge-lesson.svg" alt="">
        <img class="badges-icon" src="sidebar/badge-question.svg" alt="">
        <img class="badges-icon" src="sidebar/badge-bug.svg" alt="">
      </div>
      <p>See more</p>
    </div>

    
    <!-- Add the HTML div where the info will go -->
    <!-- <div id="user-info" style="margin-top: 30px;"></div> -->
  </div>
  
  <!-- Content goes here -->

  <!-- Accordion -->
  <div class="container">
    <!-- Page path -->
    <div class="page-path">
      <ul>
        <li><a href="home.php">Home</a></li>
        <div class="triangle-right"></div>
        <li><a href="course.php">Course</a></li>
        <div class="triangle-right"></div>
        <li><a href="module.php">Module</a></li>
        <!-- <div class="triangle-right"></div>
        <li><a href="">Lesson</a></li> -->
        <!-- <div class="triangle-right"></div>
        <li><a href="">Task</a></li> -->
      </ul>
    </div>

    <!-- Course header -->
    <div class="accordion">
      <img src="images/course-default.png" alt="">  
      <span>Module 1</span>
    </div>
    
    <div class="panel">
      <ul>
        <a href="lesson.php"><li>Lesson 1</li></a>
        <a href="lesson.php"><li>Lesson 2</li></a>
        <a href="lesson.php"><li>Lesson 3</li></a>
        <a href="lesson.php"><li>Lesson 4</li></a>
        <a href="lesson.php"><li>Lesson 5</li></a>
        <a href="lesson.php"><li>Lesson 6</li></a>
      </ul>
    </div>

  <script>
    const loggedInUsername = "<?php echo htmlspecialchars($_SESSION['username']); ?>";
  </script>
  <script src="users.js"></script>
  <script>
    displayUserInfo(loggedInUsername);
  </script>
</body>
</html>