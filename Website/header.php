<header class="header_section">
      <div class="container">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
          <a class="navbar-brand" href="index.php">
            <span>
              Vaccination System
            </span>
          </a>

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class=""> </span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav">
              <!-- <li class="nav-item active">
                <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
              </li> -->
              <!-- <li class="nav-item">
                <a class="nav-link" href="about.html"> About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#Our_Hospitals">Hospital</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="doctors.html">Contact Us</a>
              </li> -->
              <div class="dropdown">
  <i class="fa fa-angle-down" style="font-size:28px; color:white" data-toggle="dropdown"></i>

  <div class="dropdown-menu">
    <?php
      if(isset($_SESSION['patient_session']))
      {
        echo 
        "<a class='dropdown-item' href='profile.php'>$_SESSION[patient_name]</a>
        <a class='dropdown-item' href='logout.php'><i class='fa fa-sign-out' style='font-size: 22px;'></i> Logout</a>";
      }
      else
      {
        echo 
        '<a class="dropdown-item" href="login.php"><i class="fa fa-user" style="font-size: 22px;"></i> Patient Login</a>
        <a class="dropdown-item" href="../admin/login.php"><i class="fa fa-user" style="font-size: 22px;"></i> Admin Login</a>
        <a class="dropdown-item" href="../hospital/login.php"><i class="fa fa-user" style="font-size: 22px;"></i> Hospital Login</a>';
      }
    ?>
  </div>
</div>

              
            </ul>
          </div>
        </nav>
      </div>
    </header>