


<!DOCTYPE html>
<!-- Created by CodingLab |www.youtube.com/CodingLabYT-->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <!--<title> Responsive Sidebar Menu  | CodingLab </title>-->
    <link rel="stylesheet" href="write.css">
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
<div class="highlight">
  <p>WEL-COME TO WORLD OF THOUGHTS</p>
</div>



<div class="sidebar">
  <div class="logo-details">
    <div class="logo_name">Myarticle.com</div>
    <i class='bx bx-menu' id="btn"></i>
  </div>
  <ul class="nav-list">
    <li>
      <i class='bx bx-search'></i>
      <input type="text" placeholder="Search...">
      <span class="tooltip">Search</span>
    </li>

   <li>
      <a href="read2.php">
        <i class='bx bx-pie-chart-alt-2'></i>
        <span class="links_name">Read</span>
      </a>
      <span class="tooltip">Read</span>
    </li>
   

    <li>
      <a href="save2.php">
        <i class='bx bx-heart'></i>
        <span class="links_name">Saved</span>
      </a>
      <span class="tooltip">Saved</span>
    </li>
  
    <li>
      <a href="setting2.php">
        <i class='bx bx-cog'></i>
        <span class="links_name">Setting</span>
      </a>
      <span class="tooltip">Setting</span>
    </li>
    <li class="profile">
      <div class="profile-details">
        <div class="name_job">
        <div class="name">Writer</div>

          <div class="job">User</div>
        </div>
      </div>
      <a href="option2.php"><i class='bx bx-log-out' id="log_out"></i></a>
    </li>
  </ul>
</div>

  <!--<CONTAINER>-->
  
 

  <div class="card">
  <h2>Change Password</h2>

  <form method="post">
    <label for="email">Email:</label>
    <input type="email" name="email" required><br>

    <label for="current_password">Current Password:</label>
    <input type="password" name="current_password" required><br>

    <label for="new_password">New Password:</label>
    <input type="password" name="new_password" required><br>

    <label for="confirm_password">Confirm Password:</label>
    <input type="password" name="confirm_password" required><br>

    <button type="submit" name="submit">Submit</button>
  </form>
  
 

</div>




  <script>
    
  let sidebar = document.querySelector(".sidebar");
  let closeBtn = document.querySelector("#btn");
  let searchBtn = document.querySelector(".bx-search");

  closeBtn.addEventListener("click", ()=>{
    sidebar.classList.toggle("open");
    menuBtnChange();//calling the function(optional)
  });

  searchBtn.addEventListener("click", ()=>{ // Sidebar open when you click on the search iocn
    sidebar.classList.toggle("open");
    menuBtnChange(); //calling the function(optional)
  });

  // following are the code to change sidebar button(optional)
  function menuBtnChange() {
   if(sidebar.classList.contains("open")){
     closeBtn.classList.replace("bx-menu", "bx-menu-alt-right");//replacing the iocns class
   }else {
     closeBtn.classList.replace("bx-menu-alt-right","bx-menu");//replacing the iocns class
   }
  }
  </script>
</body>
</html>
