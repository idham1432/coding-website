<?php include 'auth.php'; ?>

<!DOCTYPE html>
<html>
<head>
  <title>Course</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <link rel="stylesheet" href="page-template.css">
  <link rel="stylesheet" href="lesson.css">
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

  <div class="container">
    <!-- Page path -->
    <div class="page-path">
      <ul>
        <li><a href="home.php">Home</a></li>
        <div class="triangle-right"></div>
        <li><a href="course.php">Course</a></li>
        <div class="triangle-right"></div>
        <li><a href="module.php">Module</a></li>
        <div class="triangle-right"></div>
        <li><a href="lesson.php">Lesson</a></li>
        <!-- <div class="triangle-right"></div>
        <li><a href="">Task</a></li> -->
      </ul>
    </div>

    <!-- Generate accordions dynamically -->
    <div id="accordion-container"></div>
  </div>

  <!-- Ace Editor CDN -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/ace/1.31.1/ace.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/ace/1.31.1/ext-language_tools.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/ace/1.31.1/snippets/html.min.js"></script>

  <!-- Main Script -->
  <script>
    const tasks = [
      { id: "task1", title: "Task 1: Task title", question: "Task description." },
      { id: "task2", title: "Task 2: Task title", question: "Task description." },
      { id: "task3", title: "Task 3: Task title", question: "Task description." },
      { id: "task4", title: "Task 4: Task title", question: "Task description." },
      { id: "task5", title: "Task 5: Task title", question: "Task description." },
      { id: "task6", title: "Task 6: Task title", question: "Task description." },
      { id: "task7", title: "Task 7: Task title", question: "Task description." },
      { id: "task8", title: "Task 8: Task title", question: "Task description." },
      { id: "task9", title: "Task 9: Task title", question: "Task description." },
      { id: "task10", title: "Task 10: Task title", question: "Task description." },
    ];

    ace.require("ace/ext/language_tools");

    const container = document.getElementById("accordion-container");

    tasks.forEach(task => {
      const accordion = document.createElement("div");
      accordion.className = "accordion-item";
      accordion.innerHTML = `
        <div class="accordion-header">${task.title}</div>
        <div class="accordion-content" style="display: none;">
          <p>${task.question}</p>
          <div class="editor-wrapper" data-task="${task.id}">
            <div class="editor-left">
              <div class="tab-links">
                <button class="tablink active" data-tab="html">index.html</button>
                <button class="tablink" data-tab="css">style.css</button>
                <button class="tablink" data-tab="js">app.js</button>
              </div>
              <div class="editor-tabs">
                <div id="${task.id}-html" class="editor active"></div>
                <div id="${task.id}-css" class="editor"></div>
                <div id="${task.id}-js" class="editor"></div>
              </div>
              <div class="editor-buttons">
                <button class="run-btn">Run</button>
                <button class="reset-btn">Reset</button>
              </div>
            </div>
            <div class="editor-right">
              <iframe></iframe>
            </div>
          </div>
        </div>
      `;
      container.appendChild(accordion);
    });

    document.querySelectorAll('.accordion-header').forEach(header => {
      header.addEventListener('click', () => {
        const content = header.nextElementSibling;
        content.style.display = content.style.display === 'block' ? 'none' : 'block';
      });
    });

    const editorWrappers = document.querySelectorAll('.editor-wrapper');
    editorWrappers.forEach(wrapper => {
      const taskId = wrapper.dataset.task;

      const editors = {
        html: ace.edit(`${taskId}-html`),
        css: ace.edit(`${taskId}-css`),
        js: ace.edit(`${taskId}-js`)
      };

      editors.html.session.setMode("ace/mode/html");
      editors.css.session.setMode("ace/mode/css");
      editors.js.session.setMode("ace/mode/javascript");

      Object.values(editors).forEach(editor => {
        editor.setTheme("ace/theme/github");
        editor.setOptions({
          fontSize: "14px",
          useSoftTabs: true,
          enableBasicAutocompletion: true,
          enableLiveAutocompletion: true,
          enableSnippets: true
        });
        editor.resize();
      });

      const tabButtons = wrapper.querySelectorAll(".tablink");
      tabButtons.forEach(btn => {
        btn.addEventListener("click", () => {
          tabButtons.forEach(b => b.classList.remove("active"));
          wrapper.querySelectorAll(".editor").forEach(e => e.classList.remove("active"));

          btn.classList.add("active");
          const tab = btn.dataset.tab;
          wrapper.querySelector(`#${taskId}-${tab}`).classList.add("active");

          setTimeout(() => editors[tab].resize(), 0);
        });
      });

      wrapper.querySelector(".run-btn").addEventListener("click", () => {
        const html = editors.html.getValue();
        const css = `<style>${editors.css.getValue()}</style>`;
        const js = `<script>${editors.js.getValue()}<\/script>`;
        const iframe = wrapper.querySelector("iframe");
        iframe.srcdoc = `${html}\n${css}\n${js}`;
      });

      wrapper.querySelector(".reset-btn").addEventListener("click", () => {
        editors.html.setValue("");
        editors.css.setValue("");
        editors.js.setValue("");
      });
    });
  </script>
</body>
</html>