<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Dashboard</title>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/line-awesome/1.3.0/line-awesome/css/line-awesome.min.css'>
  <link rel="stylesheet" href="./style.css">
  <style>   
        @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap");

        :root {
        --color-main: #f3950d; 
        --main-accent: #333; 
        --bg: #121212; 
        --bg-2: #1e1e1e; 
        --main: #ffffff; 
        --shadow: rgba(0, 0, 0, 0.5) 0px 2px 16px; 
        }

        * {
        padding: 0;
        margin: 0;
        text-decoration: none;
        font-family: "Poppins", sans-serif;
        list-style-type: none;
        box-sizing: border-box;
        }

        body {
        background-color: var(--bg);
        color: var(--main);
        overflow-x: hidden;
        }

        img {
        width: 100%;
        height: auto;
        }

        #menu-toggle {
        display: none;
        }

        #menu-toggle:checked ~ .sidebar {
        left: -345px;
        }

        #menu-toggle:checked ~ .main-content {
        margin-left: 0;
        width: 100vw;
        }

        .overlay {
        position: fixed;
        width: 100%;
        height: 100%;
        left: 0;
        top: 0;
        z-index: 10;
        display: none;
        background-color: rgba(255, 255, 255, 0.5);
        }

        .text-danger {
        color: red;
        }

        .text-success {
        color: #2ec3a3;
        }

        .text-main {
        color: var(--color-main);
        }

        .sidebar {
        width: 345px;
        height: 100%;
        position: fixed;
        top: 0;
        left: 0;
        bottom: 0;
        padding: 1rem 1.2rem;
        transition: left 300ms;
        background-color: var(--main-accent);
        }

        .sidebar-container {
        height: 100%;
        width: 100%;
        background-color: var(--bg-2);
        border-radius: 20px;
        box-shadow: var(--shadow);
        padding: 1.2rem;
        overflow-y: auto;
        }

        .sidebar-container::-webkit-scrollbar {
        width: 5px;
        }

        .sidebar-container::-webkit-scrollbar-track {
        box-shadow: var(--shadow);
        }

        .sidebar-container::-webkit-scrollbar-thumb {
        background-color: var(--color-main);
        outline: 1px solid #ccc;
        border-radius: 2px;
        }

        .brand {
        padding-top: 1rem;
        display: flex;
        align-items: center;
        justify-content: center;
        }

        .brand h3 {
        color: #fff;
        font-size: 3rem;
        }

        .brand h3 span {
        color: var(--color-main);
        font-size: 2.5rem;
        display: inline-block;
        margin-right: 0.5rem;
        }

        .sidebar-menu li {
        margin-bottom: 2rem;
        }

        .sidebar-menu a {
        color: var(--main);
        display: block;
        padding: 0.7rem 0;
        }

        .sidebar-menu a.active {
        background-color: var(--main-accent);
        border-radius: 7px;
        padding: 0.8rem;
        }

        .sidebar-menu a span:first-child {
        display: inline-block;
        margin-right: 0.8rem;
        font-size: 1.5rem;
        color: var(--color-main);
        }

        .sidebar-card {
        background-color: var(--main-accent);
        padding: 1rem;
        margin-top: 2rem;
        box-shadow: var(--shadow);
        text-align: center;
        }

        .side-card-icon span {
        font-size: 8rem;
        color: var(--color-main);
        display: inline-block;
        }

        .side-card-icon {
        margin-bottom: 0.8rem;
        }

        .side-card-icon + div {
        margin-bottom: 1rem;
        }

        .side-card-icon + div p {
        font-size: 0.8rem;
        color: #aaa; 
        }

        .btn {
        padding: 0.7rem 1rem;
        border: none;
        border-radius: 10px;
        display: flex;
        align-items: center;
        transition: background-color 0.3s ease, transform 0.3s ease;
        }

        .btn span {
        font-size: 1.2rem;
        display: inline-block;
        margin-right: 0.7rem;
        }

        .btn-block {
        display: block;
        width: 100%;
        }

        .btn-main {
        background-color: var(--color-main);
        color: #fff;
        }

        .btn-main:hover {
        background-color: #e08c00; 
        transform: scale(1.02);
        }

        /* main */
        .main-content {
        margin-left: 345px;
        width: calc(100vw - 345px);
        padding: 1rem 2rem 1.2rem 1.2rem;
        transition: margin-left 300ms;
        }

        /* Header */
        header {
        display: flex;
        padding-top: 0.5rem;
        justify-content: space-between;
        }

        .header-wrapper {
        display: flex;
        align-items: center;
        }

        .header-wrapper label {
        display: inline-block;
        color: var(--color-main);
        margin-right: 2rem;
        font-size: 1.8rem;
        }

        .header-wrapper label span:hover {
        cursor: pointer;
        }

        .header-title h1 {
        color: var(--main);
        font-weight: 600;
        }

        .header-title p {
        color: #bbb; /* Lighter text for better contrast */
        font-size: 0.9rem;
        }

        .header-title p span {
        color: red;
        font-size: 1.2rem;
        display: inline-block;
        margin-left: 0.5rem;
        }

        /* Right-aligned Navbar */
.right-navbar {
  position: absolute;
  top: 20px;
  right: 20px;
  display: flex;
  gap: 20px;
}

.right-navbar .nav-link {
  color: #fff;
  padding: 8px 15px;
  text-decoration: none;
  font-size: 1.2rem;
  font-weight: 600;
  transition: color 0.3s ease;
}

.right-navbar .nav-link:hover {
  color: #ccc; /* Slight hover effect changing text color to light gray */
}



        main {
        padding: 2.5rem 0;
        }

        .analytics {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        grid-gap: 2.5rem;
        margin-bottom: 3rem;
        }

        .analytic {
        box-shadow: var(--shadow);
        padding: 1.5rem;
        border-radius: 10px;
        display: flex;
        padding-left: 2rem;
        background-color: var(--bg-2); 
        }

        .analytic-info h4 {
        font-weight: 400;
        color: #aaa; 
        font-size: 0.98rem;
        }

        .analytic-info h1 {
        color: var(--main);
        font-weight: 600;
        }

        .analytic-info h1 small {
        font-size: 0.8rem;
        font-weight: 700;
        }

        .analytic:first-child .analytic-icon {
        background-color: #dce5ff;
        color: #6883db;
        }

        .analytic:nth-child(2) .analytic-icon {
        background-color: #ebf7f5;
        color: red;
        }

        .analytic:nth-child(3) .analytic-icon {
        background-color: #ebf7f5;
        color: #2ec3a3;
        }

        .analytic:nth-child(4) .analytic-icon {
        background-color: var(--main-accent);
        color: var(--color-main);
        }

        .analytic-icon {
        width: 40px;
        height: 40px;
        border-radius: 50%;
        display: grid;
        place-items: center;
        margin-right: 0.8rem;
        }

        .section-head {
        font-size: 1.4rem;
        color: var(--main);
        font-weight: 600;
        margin-bottom: 1rem;
        }

        .block-grid {
        display: grid;
        grid-gap: 3rem;
        grid-template-columns: 30% auto;
        }

        .prof-content {
        background-color: #2a2a2a; 
        box-shadow: var(--shadow);
        border-radius: 15px;
        padding: 1rem 2rem;
        text-align: center;
        }

        .prof-content img {
        width: 180px;
        margin: 1.5rem 0;
        border-radius: 50%;
        }

        .prof-info {
        margin-bottom: 1rem;
        }

        .prof-info h3,
        .prof-sum h4 {
        font-weight: 600;
        color: var(--main);
        }

        .prof-info h1,
        .prof-sum h2 {
        font-weight: 400;
        margin-top: 0.4rem;
        color: #bbb;
        }

        .prof-info h1 small {
        font-size: 1rem;
        }

        .prof-sum {
        background-color: var(--main-accent);
        border: 1px solid var(--color-main);
        padding: 1rem;
        border-radius: 10px;
        }

        .profile-card,
        .tasks-card {
        border-radius: 15px;
        box-shadow: var(--shadow);
        background-color: #2a2a2a; 
        padding: 1rem;
        display: flex; 
        flex-direction: column; 
        justify-content: space-between; 
        }

        .prof-content,
        .tasks-content {
        margin-top: 1rem;
        flex-grow: 1; 
        }

        .tasks-header {
        display: flex;
        align-items: center;
        margin-bottom: 1rem;
        }

        .tasks-header input[type="checkbox"] {
        margin-right: 0.5rem;
        }

        .tasks-content ul {
        padding: 0;
        }

        .tasks-content li {
        margin-bottom: 0.5rem;
        font-weight: 400;
        color: #bbb;
        display: flex;
        align-items: center;
        }

        .tasks-content li input[type="checkbox"] {
        margin-right: 0.5rem;
        }

        /* Modal Styles */
        .modal {
        display: none; 
        position: fixed; 
        z-index: 1; 
        left: 0; 
        top: 0; 
        width: 100%; 
        height: 100%; 
        overflow: auto; 
        background-color: rgba(0, 0, 0, 0.5); 
        }

        .modal-content {
        background-color: #fff; 
        margin: auto; 
        padding: 20px; 
        border: 1px solid var(--color-main); 
        border-radius: 10px; 
        width: 80%; 
        max-width: 500px; 
        }

        .modal-header {
        display: flex; 
        justify-content: space-between; 
        align-items: center; 
        }

        .modal-title {
        font-size: 1.5rem; 
        color: var(--color-main); 
        }

        .modal-close {
        background: none; 
        border: none; 
        font-size: 1.5rem; 
        color: var(--color-main); 
        cursor: pointer; 
        }

        .modal-body {
        margin-top: 10px; 
        }

        .modal-footer {
        display: flex; 
        justify-content: flex-end; 
        margin-top: 20px; 
        }

        .modal-footer .btn {
        background-color: var(--color-main); 
        color: #fff; 
        margin-left: 10px; 
        }
    </style> 
</head>
<body>
  <input type="checkbox" name="" id="menu-toggle">
  <div class="overlay"><label for="menu-toggle"></label></div>
  <div class="sidebar">
    <div class="sidebar-container">
      <div class="brand">
        <h3>
          <span class="las la-lightbulb"></span> 
          WebDev
        </h3>
      </div>
      <div class="sidebar-menu">
        <ul>
          <li><a href="#" class="active"><span class="las la-adjust"></span><span>Dashboard</span></a></li>
        </ul>
      </div>
      <div class="sidebar-card">
        <div class="side-card-icon">
          <span class="las la-pencil-alt"></span> 
        </div>
        <div>
          <h4>Add Task</h4>
          <p>Add a new task to your to-do list</p>
        </div>
        <button class="btn btn-main btn-block" id="open-modal-btn">Add Task</button> 
      </div>
    </div>
  </div>
  <div class="main-content">
    <header>
      <div class="header-wrapper">
        <label for="menu-toggle">
          <span class="las la-bars"></span>
        </label>
        <div class="header-title">
          <h1>Welcome to Dashboard</h1>
        </div>
        <!-- Right-aligned Home button inside the new right-navbar -->
        <div class="right-navbar">
            <a href="/welcome" class="nav-link">Home</a>
            <a href="/content" class="nav-link">Content</a>
            <a href="/dashboard" class="nav-link">Dashboard</a>
        </div>

      </div>
    </header>
    <main>
      <section>
        <h3 class="section-head">Overview</h3>
        <div class="analytics">
          <div class="analytic">
            <div class="analytic-icon"><span class="las la-eye"></span></div>
            <div class="analytic-info">
              <h4>Projects</h4>
              <h1>7</h1>
            </div>
          </div>
          <div class="analytic">
            <div class="analytic-icon"><span class="las la-clock"></span></div>
            <div class="analytic-info">
              <h4>Finished Works</h4>
              <h1>3 <small class="text-danger">5%</small></h1>
            </div>
          </div>
          <div class="analytic">
            <div class="analytic-icon"><span class="las la-calendar"></span></div> 
            <div class="analytic-info">
              <h4>Schedule</h4> 
            </div>
          </div>
          <div class="analytic">
            <div class="analytic-icon"><span class="las la-user"></span></div> 
            <div class="analytic-info">
              <h4>Profile</h4>
            </div>
          </div>
        </div>
      </section>
      <section>
        <div class="block-grid">
          <div class="profile-card">
            <h3 class="section-head">Profile</h3>
            <div class="prof-content">
              <img src="https://www.w3schools.com/howto/img_avatar.png" alt="Blank Profile Picture">
              <div class="prof-info">
                <h3>JDM</h3>
                <h1>Student</h1>
              </div>
              <div class="prof-sum">
                <button class="btn btn-main btn-block" id="open-edit-modal-btn">Edit Profile</button>
              </div>
            </div>
          </div>
          <div class="tasks-card">
            <h3 class="section-head">Tasks</h3>
            <div class="tasks-content">
              <ul id="task-list">
                <li><input type="checkbox" id="task1"><label for="task1">Review for Midterms</label></li>
                <li><input type="checkbox" id="task2"><label for="task2">Update website content</label></li>
                <li><input type="checkbox" id="task3"><label for="task3">Networking</label></li>
                <li><input type="checkbox" id="task4"><label for="task4">LITE Long Quiz</label></li>
                <li><input type="checkbox" id="task5"><label for="task5">WebDev Middleware</label></li>
              </ul>
              <h4 class="section-head">Upcoming Tasks</h4>
              <ul>
                <li><input type="checkbox" id="upcoming1"><label for="upcoming1">Plan project</label></li>
                <li><input type="checkbox" id="upcoming2"><label for="upcoming2">Finalize</label></li>
              </ul>
            </div>
          </div>
        </div>
      </section>
    </main>
  </div>
  
  <div id="task-modal" class="modal">
    <div class="modal-content">
      <span class="close" id="close-modal-btn">&times;</span>
      <h2>Add a New Task</h2>
      <input type="text" id="new-task-input" placeholder="Enter a new task" />
      <button id="add-task-btn">Add Task</button>
    </div>
  </div>

  <div id="edit-profile-modal" class="modal">
    <div class="modal-content">
      <span class="close" id="close-edit-modal-btn">&times;</span>
      <h2>Edit Profile</h2>
      <input type="text" id="edit-name-input" placeholder="Enter your name" value="JDM" />
      <input type="text" id="edit-role-input" placeholder="Enter your role" value="Student" />
      <button id="save-profile-btn">Save Changes</button>
    </div>
  </div>

  <script>
    document.getElementById('open-modal-btn').onclick = function() {
      document.getElementById('task-modal').style.display = 'flex'; 
    }

    document.getElementById('close-modal-btn').onclick = function() {
      document.getElementById('task-modal').style.display = 'none';
    }

    document.getElementById('add-task-btn').addEventListener('click', function() {
      const taskInput = document.getElementById('new-task-input');
      const taskText = taskInput.value.trim();
      
      if (taskText) {
        const newTask = document.createElement('li');
        newTask.innerHTML = `
          <input type="checkbox" class="upcoming-task-checkbox">
          <label>${taskText}</label>
        `;
        document.getElementById('task-list').appendChild(newTask);
        taskInput.value = ''; 
        document.getElementById('task-modal').style.display = 'none'; 
      }
    });

    document.getElementById('task-list').addEventListener('change', function(event) {
      if (event.target.classList.contains('upcoming-task-checkbox') && event.target.checked) {
        event.target.parentElement.remove(); 
      }
    });

    document.getElementById('open-edit-modal-btn').onclick = function() {
      document.getElementById('edit-profile-modal').style.display = 'flex'; 
    }

    document.getElementById('close-edit-modal-btn').onclick = function() {
      document.getElementById('edit-profile-modal').style.display = 'none';
    }

    document.getElementById('save-profile-btn').onclick = function() {
      const nameInput = document.getElementById('edit-name-input');
      const roleInput = document.getElementById('edit-role-input');
      
      console.log(Name: ${nameInput.value}, Role: ${roleInput.value});
      document.getElementById('edit-profile-modal').style.display = 'none';
    };

    window.onclick = function(event) {
      const taskModal = document.getElementById('task-modal');
      const editModal = document.getElementById('edit-profile-modal');
      
      if (event.target == taskModal) {
        taskModal.style.display = 'none';
      }
      if (event.target == editModal) {
        editModal.style.display = 'none';
      }
    };
  </script>
</body>
</html>
