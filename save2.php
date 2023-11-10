<?php
session_start();
?>

<!DOCTYPE html>
<!-- Created by CodingLab |www.youtube.com/CodingLabYT-->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <!--<title> Responsive Sidebar Menu  | CodingLab </title>-->
    <link rel="stylesheet" href="style.css">
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
<div class="highlight">
  <p>SAVED ARTICLES</p>
</div>

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
       <a href="read2.php">
         <i class='bx bx-pie-chart-alt-2' ></i>
         <span class="links_name">Read</span>
       </a>
       <span class="tooltip">Read</span>
     </li>
    
    
     <li>
       <a href="save2.php">
         <i class='bx bx-heart' ></i>
         <span class="links_name">Saved</span>
       </a>
       <span class="tooltip">Saved</span>
     </li>
    
     <li>
       <a href="setting2.php">
         <i class='bx bx-cog' ></i>
         <span class="links_name">Setting</span>
       </a>
       <span class="tooltip">Setting</span>
     </li>
     <li class="profile">
      <div class="profile-details">
        <div class="name_job">
        <div class="name">Reader</div>

          <div class="job">User</div>
        </div>
      </div>
         <a href="option2.php" > <i class='bx bx-log-out' id="log_out" ></i><a>
     </li>
    </ul>
  </div>
   <!--<Cards >-->


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

// Retrieve latest 10 articles from database
$sql = "SELECT id, title, body FROM article ORDER BY id DESC LIMIT 10";
$result = mysqli_query($conn, $sql);

if (!$result) {
    printf("Error: %s\n", mysqli_error($conn));
    exit();
}

// Initialize counter
$i = 1;

if (mysqli_num_rows($result) > 0) {
    // Output each article as a card
    while ($row = mysqli_fetch_assoc($result)) {
        $id = $row["id"];
        $title = $row["title"];
        $body = $row["body"];
        ?>

        <div class="card">
            <img src="2.jpg" alt="Article Thumbnail">
            <div class="card-content">
                <h3><?php echo $title; ?></h3>
                <p class="number">SR.N : <?php echo $i; ?></p>
                <a href="complete.php?id=<?php echo $id; ?>" class="read-more">Read More</a>
            </div>
        </div>

        <?php
        // Increment counter
        $i++;
    }
} else {
    echo "No articles found";
}

mysqli_close($conn);
?>


 <!--<Cards >-->
 
 

 <!--<java >-->
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
