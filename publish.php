

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
    <i class='bx bx-menu' id="btn"></i>
  </div>
  <ul class="nav-list">
    <li>
      <i class='bx bx-search'></i>
      <input type="text" placeholder="Search...">
      <span class="tooltip">Search</span>
    </li>

    <li>
      <a href="write.php">
        <i class='bx bx-chat'></i>
        <span class="links_name">Write</span>
      </a>
      <span class="tooltip">Write</span>
    </li>
    <li>
      <a href="read.php">
        <i class='bx bx-pie-chart-alt-2'></i>
        <span class="links_name">Read</span>
      </a>
      <span class="tooltip">Read</span>
    </li>
    <li>
      <a href="history.php">
        <i class='bx bx-folder'></i>
        <span class="links_name">History</span>
      </a>
      <span class="tooltip">History</span>
    </li>

    <li>
      <a href="save.php">
        <i class='bx bx-heart'></i>
        <span class="links_name">Saved</span>
      </a>
      <span class="tooltip">Saved</span>
    </li>
    <li>
      <a href="#">
        <i class='bx bx-upload'></i>
        <span class="links_name">Publish</span>
      </a>
      <span class="tooltip">Publish</span>
    </li>
    <li>
      <a href="setting.php">
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
      <a href="option.php"><i class='bx bx-log-out' id="log_out"></i></a>
    </li>
  </ul>
</div>

  <!--<CONTAINER>-->
  
  <?php
// Replace the placeholders with your database information
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "userdb";
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check if the connection was successful
if (!$conn) {
  die('Could not connect to database: ' . mysqli_connect_error());
}

$name = isset($_POST['name']) ? $_POST['name'] : '';
$title = isset($_POST['title']) ? $_POST['title'] : '';
$body = isset($_POST['body']) ? $_POST['body'] : '';

if ($name && $title && $body) {
  // Insert the article into the database
  $query = "INSERT INTO article (name, title, body) VALUES ('$name', '$title', '$body')";
  $result = mysqli_query($conn, $query);
  if (!$result) {
    echo 'Error inserting article: ' . mysqli_error($conn);
  }
  
}

?>

<div class="card">
  <h2>Publish Article</h2>

  <form method="post">
   
  <?php if ($name && $title && $body): ?>
    <div class="article">
      <h3><?php echo $title; ?></h3>
      <h3><?php echo $name; ?></h3>
      <p><?php echo $body; ?></p>
    </div>
  <?php else: ?>
    <p>No articles to display</p>
  <?php endif; ?>
    <button type="submit" name="publish" onclick="return showMessageBefore() && showMessageAfter()">Publish</button>
    
  </form>


  <!-- Move the button below the </div> tag of the article -->
  <script>
    function showMessageBefore() {
      return confirm("Are you sure you want to publish this article?");
    }
    function showMessageAfter() {
      alert("Article published successfully!");
    }
  </script>

</div>

<?php
// Close the database connection
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
