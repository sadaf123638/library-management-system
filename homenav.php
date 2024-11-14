<div class="container-background" style="border-bottom: 3px solid #00008B;">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#" style="color: #0a4275; font-weight: bold; ">Library Management System</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="home.php" style="color: black; font-family: Roboto Condensed, sans-serif; ">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#about" style="color: black; font-family: Roboto Condensed, sans-serif;">About Us</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color: black; font-family: Roboto Condensed, sans-serif;">
            Books
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="userissue.php" style="color: black; font-family: Roboto Condensed, sans-serif;">Issue Books</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color: black; font-family: Roboto Condensed, sans-serif;">
            Profile
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="edit.php" style="color: black; font-family: Roboto Condensed, sans-serif;">Edit Profile</a></li>
            <!--<li><a class="dropdown-item" href="" style="color: black; font-family: Roboto Condensed, sans-serif;">Change Password</a></li><--->
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="logout.php" style="color: black; font-family: Roboto Condensed, sans-serif;">Logout</a>
        </li>
        
      </ul>
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        
        <li class="nav-item">
        <i class="fa-solid fa-user" style="color: #0a4275;"></i> <i style="font-size: 17px; font-family: Roboto Condensed, sans-serif; color: #0a4275;"><?php echo $_SESSION['email']; ?></i>
        </li>
    </ul>
    </div>
  </div>
  
      
</nav>
    </div>