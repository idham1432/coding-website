<?php include 'auth.php'; ?>

<!DOCTYPE html>
<html>
<head>
  <title>Home Page</title>
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
    .program {
      display: flex;
      align-items: center;
      justify-content: space-between;
      gap: 2rem;
      color: #05192d;
      padding: 30px;
      width: 100%;
      text-align: left;
      font-size: 18px;
      font-weight: bold;
      border: 1px solid black;
    }

    .program img {
      width: 54px;
      height: 89px;
      margin: 0;
    }

    .program span {
      width: 100%;
    } 

    .btn {
      text-decoration: none;
      text-wrap: nowrap;
      background: #05192d;
      color: #fff;
      font-size: 14px;
      padding: 20px 30px;
      border-radius: 10px;
      transition: all 0.15s;
    }

    .btn:hover {
      background:rgb(56, 61, 67);
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

  <!-- <div class="content">
    <h2>Welcome, <?php echo htmlspecialchars($_SESSION['real_name']); ?>!</h2>
    <p>You have successfully logged in.</p>
  </div> -->

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
  
  
  <div class="container">
    <!-- Page path -->
    <div class="page-path">
      <ul>
        <li><a href="home.php">Home</a></li>
        <!-- <div class="triangle-right"></div>
        <li><a href="">Course</a></li>
        <div class="triangle-right"></div>
        <li><a href="">Module</a></li>
        <div class="triangle-right"></div>
        <li><a href="">Lesson</a></li>
        <div class="triangle-right"></div>
        <li><a href="">Task</a></li> -->
      </ul>
    </div>

    <!-- Program -->
    <div class="program">
      <img src="images/program-full-stack.png" alt="">  
      <span>Full Stack</span>
      <a href="course.php" class="btn">View Courses</a>
    </div>
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