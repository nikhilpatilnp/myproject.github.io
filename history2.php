<?php
session_start();
?>

<!DOCTYPE html>
<!-- Created by CodingLab |www.youtube.com/CodingLabYT-->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <!--<title> Responsive Sidebar Menu  | CodingLab </title>-->
    <link rel="stylesheet" href="write.css">
    <link rel="stylesheet" href="history.css">
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>


  <div class="sidebar">
    <div class="logo-details">
      
        <div class="logo_name">Myarticle.com</div>
        <i class='bx bx-menu' id="btn" ></i>
    </div>
    <ul class="nav-list">
      <li>
          <i class='bx bx-search' ></i>
         <input type="text" placeholder="Search...">
         <span class="tooltip">Search</span>
      </li>
      
     
  
     <li>
       <a href="write.php">
         <i class='bx bx-chat' ></i>
         <span class="links_name">Write</span>
       </a>
       <span class="tooltip">Write</span>
     </li>
     <li>
       <a href="read.php">
         <i class='bx bx-pie-chart-alt-2' ></i>
         <span class="links_name">Read</span>
       </a>
       <span class="tooltip">Read</span>
     </li>
     <li>
       <a href="history.php">
         <i class='bx bx-folder' ></i>
         <span class="links_name">Article Book</span>
       </a>
       <span class="tooltip">Article Book</span>
     </li>
    
     <li>
       <a href="save.php">
         <i class='bx bx-heart' ></i>
         <span class="links_name">Saved</span>
       </a>
       <span class="tooltip">Saved</span>
     </li>
     <li>
       <a href="publish.php">
         <i class='bx bx-upload' ></i>
         <span class="links_name">Publish</span>
       </a>
       <span class="tooltip">Publish</span>
     </li>
     <li>
       <a href="#">
         <i class='bx bx-cog' ></i>
         <span class="links_name">Setting</span>
       </a>
       <span class="tooltip">Setting</span>
     </li>
     <li class="profile">
      <div class="profile-details">
        <div class="name_job">
        <div class="name">Nikhil</div>

          <div class="job">User</div>
        </div>
      </div>
         <a href="option2.php" > <i class='bx bx-log-out' id="log_out" ></i><a>
     </li>
    </ul>
  </div>
  <!--<CONTAINER>-->
  <?php
// Connect to database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "userdb";
$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Retrieve article data from database
$sql = "SELECT title, id FROM articles ORDER BY id DESC";
$result = mysqli_query($conn, $sql);

if (!$result) {
    printf("Error: %s\n", mysqli_error($conn));
    exit();
}

if (mysqli_num_rows($result) > 0) {
    // Output data of each row
    $i = 1; // Initialize counter variable
    while($row = mysqli_fetch_assoc($result)) {
        $title = $row["title"];
        $id = $row["id"];
        ?>

        <!-- HTML code for card -->
        <div class="card">
            <div class="card-header">
                <h3 class="title"><?php echo $title; ?></h3>
                <p class="date">Write Name</p>
                <p class="number">SR.N : <?php echo $i; ?></p>
                <a href="complete2.php?id=<?php echo $id; ?>" class="read-more">Read More</a>
            </div>
        </div>

        <?php
        $i++; // Increment counter variable
    }
} else {
    echo "No results found";
}

mysqli_close($conn);
?>




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
