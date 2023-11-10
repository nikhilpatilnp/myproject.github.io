
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
        <i class='bx bx-menu' id="btn" ></i>
    </div>
    <ul class="nav-list">
      <li>
          <i class='bx bx-search' ></i>
         <input type="text" placeholder="Search...">
         <span class="tooltip">Search</span>
      </li>
     
    
     <li>
       <a href="read.php">
         <i class='bx bx-pie-chart-alt-2' ></i>
         <span class="links_name">Read</span>
       </a>
       <span class="tooltip">Read</span>
     </li>
    
    
     <li>
       <a href="save.php">
         <i class='bx bx-heart' ></i>
         <span class="links_name">Saved</span>
       </a>
       <span class="tooltip">Saved</span>
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
        <div class="name">Writer</div>

          <div class="job">User</div>
        </div>
      </div>
         <a href="option.php" > <i class='bx bx-log-out' id="log_out" ></i><a>
     </li>
    </ul>
  </div>
  <!--<CONTAINER>-->
  
  <div class="card">
  <h2>Read Article</h2>

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

// Retrieve article by ID from database
if (isset($_GET["id"])) {
    $id = $_GET["id"];
    $sql = "SELECT title, body FROM article WHERE id = $id";
    $result = mysqli_query($conn, $sql);

    if (!$result) {
        printf("Error: %s\n", mysqli_error($conn));
        exit();
    }

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $title = $row["title"];
        $content = $row["body"];

        // Output article content
        ?>

        <h1><?php echo $title; ?></h1>
        <div><?php echo $content; ?></div>

        <form method="POST" action="save.php" onsubmit="return showPopup()">
  <input type="hidden" name="id" value="<?php echo $id; ?>">
  <button type="submit">Save</button>
</form>

<script>
function showPopup() {
  alert("Article saved successfully!");
  return true;
}
</script>

        <?php
    } else {
        echo "Article not found";
    }
}

mysqli_close($conn);

// Redirect to another page after saving the article
if (isset($_POST["id"])) {
    $id = $_POST["id"];
    header("Location: read.php?id=$id");
    exit();
}
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
