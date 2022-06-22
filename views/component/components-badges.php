<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Components / Badges - NiceAdmin Bootstrap Template</title>
  <?php include "views/shares/header.php"?>
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="../../index.php" class="logo d-flex align-items-center">
        <img src="../../assets/img/logo.png" alt="">
        <span class="d-none d-lg-block">NiceAdmin</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <div class="search-bar">
      <form class="search-form d-flex align-items-center" method="POST" action="#">
        <input type="text" name="query" placeholder="Search" title="Enter search keyword">
        <button type="submit" title="Search"><i class="bi bi-search"></i></button>
      </form>
    </div><!-- End Search Bar -->

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item d-block d-lg-none">
          <a class="nav-link nav-icon search-bar-toggle " href="#">
            <i class="bi bi-search"></i>
          </a>
        </li><!-- End Search Icon-->

        <li class="nav-item dropdown">

          <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
            <i class="bi bi-bell"></i>
            <span class="badge bg-primary badge-number">4</span>
          </a><!-- End Notification Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications">
            <li class="dropdown-header">
              You have 4 new notifications
              <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-exclamation-circle text-warning"></i>
              <div>
                <h4>Lorem Ipsum</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>30 min. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-x-circle text-danger"></i>
              <div>
                <h4>Atque rerum nesciunt</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>1 hr. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-check-circle text-success"></i>
              <div>
                <h4>Sit rerum fuga</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>2 hrs. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-info-circle text-primary"></i>
              <div>
                <h4>Dicta reprehenderit</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>4 hrs. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>
            <li class="dropdown-footer">
              <a href="#">Show all notifications</a>
            </li>

          </ul><!-- End Notification Dropdown Items -->

        </li><!-- End Notification Nav -->

        <li class="nav-item dropdown">

          <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
            <i class="bi bi-chat-left-text"></i>
            <span class="badge bg-success badge-number">3</span>
          </a><!-- End Messages Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow messages">
            <li class="dropdown-header">
              You have 3 new messages
              <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="message-item">
              <a href="#">
                <img src="../../assets/img/messages-1.jpg" alt="" class="rounded-circle">
                <div>
                  <h4>Maria Hudson</h4>
                  <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                  <p>4 hrs. ago</p>
                </div>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="message-item">
              <a href="#">
                <img src="../../assets/img/messages-2.jpg" alt="" class="rounded-circle">
                <div>
                  <h4>Anna Nelson</h4>
                  <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                  <p>6 hrs. ago</p>
                </div>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="message-item">
              <a href="#">
                <img src="../../assets/img/messages-3.jpg" alt="" class="rounded-circle">
                <div>
                  <h4>David Muldon</h4>
                  <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                  <p>8 hrs. ago</p>
                </div>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="dropdown-footer">
              <a href="#">Show all messages</a>
            </li>

          </ul><!-- End Messages Dropdown Items -->

        </li><!-- End Messages Nav -->

        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <img src="../../assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">
            <span class="d-none d-md-block dropdown-toggle ps-2">K. Anderson</span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6>Kevin Anderson</h6>
              <span>Web Designer</span>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="../users-profile.php">
                <i class="bi bi-person"></i>
                <span>My Profile</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="../users-profile.php">
                <i class="bi bi-gear"></i>
                <span>Account Settings</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="../pages-faq.php">
                <i class="bi bi-question-circle"></i>
                <span>Need Help?</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="#">
                <i class="bi bi-box-arrow-right"></i>
                <span>Sign Out</span>
              </a>
            </li>

          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

  <?php include "views/shares/sidebar_menu.php"?>

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Badges</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="../../index.php">Home</a></li>
          <li class="breadcrumb-item">Components</li>
          <li class="breadcrumb-item active">Badges</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">

        <div class="col-lg-6">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Default Badges</h5>

              <span class="badge bg-primary">Primary</span>
              <span class="badge bg-secondary">Secondary</span>
              <span class="badge bg-success">Success</span>
              <span class="badge bg-danger">Danger</span>
              <span class="badge bg-warning text-dark">Warning</span>
              <span class="badge bg-info text-dark">Info</span>
              <span class="badge bg-light text-dark">Light</span>
              <span class="badge bg-dark">Dark</span>
            </div>
          </div><!-- End Default Badges -->

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Pill Badges</h5>
              <span class="badge rounded-pill bg-primary">Primary</span>
              <span class="badge rounded-pill bg-secondary">Secondary</span>
              <span class="badge rounded-pill bg-success">Success</span>
              <span class="badge rounded-pill bg-danger">Danger</span>
              <span class="badge rounded-pill bg-warning text-dark">Warning</span>
              <span class="badge rounded-pill bg-info text-dark">Info</span>
              <span class="badge rounded-pill bg-light text-dark">Light</span>
              <span class="badge rounded-pill bg-dark">Dark</span>
            </div>
          </div><!-- End Pill Badges -->

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Icon Badges</h5>
              <span class="badge bg-primary"><i class="bi bi-star me-1"></i> Primary</span>
              <span class="badge bg-secondary"><i class="bi bi-collection me-1"></i> Secondary</span>
              <span class="badge bg-success"><i class="bi bi-check-circle me-1"></i> Success</span>
              <span class="badge bg-danger"><i class="bi bi-exclamation-octagon me-1"></i> Danger</span>
              <span class="badge bg-warning text-dark"><i class="bi bi-exclamation-triangle me-1"></i> Warning</span>
              <span class="badge bg-info text-dark"><i class="bi bi-info-circle me-1"></i> Info</span>
              <span class="badge bg-light text-dark"><i class="bi bi-star me-1"></i> Light</span>
              <span class="badge bg-dark"><i class="bi bi-folder me-1"></i> Dark</span>
            </div>
          </div><!-- End Icon Badges -->

        </div>

        <div class="col-lg-6">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Border Badges</h5>
              <span class="badge border-primary border-1 text-primary">Primary</span>
              <span class="badge border-secondary border-1 text-secondary">Secondary</span>
              <span class="badge border-success border-1 text-success">Success</span>
              <span class="badge border-danger border-1 text-danger">Danger</span>
              <span class="badge border-warning border-1 text-warning">Warning</span>
              <span class="badge border-info border-1 text-info">Info</span>
              <span class="badge border-light border-1 text-black-50">Light</span>
              <span class="badge border-dark border-1 text-dark">Dark</span>
            </div>
          </div><!-- End Border Badges -->

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Button Badges</h5>

              <button type="button" class="btn btn-primary mb-2">
                Primary <span class="badge bg-white text-primary">4</span>
              </button>
              <button type="button" class="btn btn-secondary mb-2">
                Secondary <span class="badge bg-white text-secondary">4</span>
              </button>
              <button type="button" class="btn btn-success mb-2">
                Success <span class="badge bg-white text-success">4</span>
              </button>
              <button type="button" class="btn btn-danger mb-2">
                Danger <span class="badge bg-white text-danger">4</span>
              </button>
              <button type="button" class="btn btn-warning mb-2">
                Warning <span class="badge bg-white text-warning">4</span>
              </button>
              <button type="button" class="btn btn-info mb-2">
                Info <span class="badge bg-white text-info">4</span>
              </button>
              <button type="button" class="btn btn-light mb-2">
                Light <span class="badge bg-secondary text-light">4</span>
              </button>
              <button type="button" class="btn btn-dark mb-2">
                Dark <span class="badge bg-white text-dark">4</span>
              </button>
            </div>
          </div><!-- End Button Badges -->

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Heading Badges</h5>

              <h1>Example h1 heading <span class="badge bg-primary">Primary</span></h1>
              <h2>Example h2 heading <span class="badge bg-secondary">Secondary</span></h2>
              <h3>Example h3 heading <span class="badge bg-success">Success</span></h3>
              <h4>Example h4 heading <span class="badge bg-danger">Danger</span></h4>
              <h5>Example h5 heading <span class="badge bg-warning">Warning</span></h5>
              <h6>Example h6 heading <span class="badge bg-info">Info</span></h6>
            </div>
          </div><!-- End Heading Badges -->

        </div>

      </div>
    </section>

  </main><!-- End #main -->

  <?php include "views/shares/footer.php"?>

</body>

</html>