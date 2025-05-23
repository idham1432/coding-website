<?php include 'auth.php'; ?>

<!DOCTYPE html>
<html>
<head>
  <title>Profile</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <link rel="stylesheet" href="page-template.css">
  <style>
    /* content */
    .content {
      background-color: #373c3f;
      color: #f9f9f9;
      width: 100%;
      height: 100%;
      display: flex;
      align-items: center;
      justify-content: center;
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
  <div class="content">
    <h2>Profile page.</h2>
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