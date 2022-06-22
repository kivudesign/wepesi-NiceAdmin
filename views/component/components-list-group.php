<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Components / List Group - NiceAdmin Bootstrap Template</title>
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

  <?php include 'views/shares/sidebar_menu.php' ?>

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>List Group</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="../../index.php">Home</a></li>
          <li class="breadcrumb-item">Components</li>
          <li class="breadcrumb-item active">List Group</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-6">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Default List Group</h5>

              <!-- Default List group -->
              <ul class="list-group">
                <li class="list-group-item">An item</li>
                <li class="list-group-item">A second item</li>
                <li class="list-group-item">A third item</li>
                <li class="list-group-item">A fourth item</li>
                <li class="list-group-item">And a fifth one</li>
              </ul><!-- End Default List group -->

            </div>
          </div>

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Links and buttons</h5>

              <!-- List group with Links and buttons -->
              <div class="list-group">
                <button type="button" class="list-group-item list-group-item-action active" aria-current="true">
                  The current button
                </button>
                <button type="button" class="list-group-item list-group-item-action">A second item</button>
                <button type="button" class="list-group-item list-group-item-action">A third button item</button>
                <button type="button" class="list-group-item list-group-item-action">A fourth button item</button>
                <button type="button" class="list-group-item list-group-item-action" disabled>A disabled button item</button>
              </div><!-- End List group with Links and buttons -->

            </div>
          </div>

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">With Icons</h5>

              <!-- List group With Icons -->
              <ul class="list-group">
                <li class="list-group-item"><i class="bi bi-star me-1 text-success"></i> An item</li>
                <li class="list-group-item"><i class="bi bi-collection me-1 text-primary"></i> A second item</li>
                <li class="list-group-item"><i class="bi bi-check-circle me-1 text-danger"></i> A third item</li>
                <li class="list-group-item"><i class="bi bi-exclamation-octagon me-1 text-warning"></i> A fourth item</li>
              </ul><!-- End List group With Icons -->

            </div>
          </div>

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Numbered</h5>

              <!-- List group Numbered -->
              <ol class="list-group list-group-numbered">
                <li class="list-group-item">Cras justo odio</li>
                <li class="list-group-item">Cras justo odio</li>
                <li class="list-group-item">Cras justo odio</li>
              </ol><!-- End List group Numbered -->

            </div>
          </div>

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">With badges</h5>

              <!-- List group With badges -->
              <ul class="list-group">
                <li class="list-group-item d-flex justify-content-between align-items-center">
                  A list item
                  <span class="badge bg-primary rounded-pill">14</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                  A second list item
                  <span class="badge bg-primary rounded-pill">2</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                  A third list item
                  <span class="badge bg-primary rounded-pill">1</span>
                </li>
              </ul><!-- End List With badges -->

            </div>
          </div>

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">With Contextual Classes</h5>

              <!-- List group With Contextual classes -->
              <ul class="list-group">
                <li class="list-group-item">A simple default list group item</li>

                <li class="list-group-item list-group-item-primary">A simple primary list group item</li>
                <li class="list-group-item list-group-item-secondary">A simple secondary list group item</li>
                <li class="list-group-item list-group-item-success">A simple success list group item</li>
                <li class="list-group-item list-group-item-danger">A simple danger list group item</li>
                <li class="list-group-item list-group-item-warning">A simple warning list group item</li>
                <li class="list-group-item list-group-item-info">A simple info list group item</li>
                <li class="list-group-item list-group-item-light">A simple light list group item</li>
                <li class="list-group-item list-group-item-dark">A simple dark list group item</li>
              </ul><!-- End List Group With Contextual classes -->

            </div>
          </div>

        </div>

        <div class="col-lg-6">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">With active and disabled items</h5>

              <!-- List group with active and disabled items -->
              <ul class="list-group">
                <li class="list-group-item active" aria-current="true">An active item</li>
                <li class="list-group-item">A second item</li>
                <li class="list-group-item">A third item</li>
                <li class="list-group-item">A fourth item</li>
                <li class="list-group-item disabled" aria-disabled="true">A disabled item</li>
              </ul><!-- End ist group with active and disabled items -->

            </div>
          </div>

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Clean list group</h5>
              <p>Add <code>.list-group-flush</code> to remove some borders and rounded corners to render list group items edge-to-edge in a parent container (e.g., cards).</p>

              <!-- List group with active and disabled items -->
              <ul class="list-group list-group-flush">
                <li class="list-group-item">An item</li>
                <li class="list-group-item">A second item</li>
                <li class="list-group-item">A third item</li>
                <li class="list-group-item">A fourth item</li>
                <li class="list-group-item disabled" aria-disabled="true">A disabled item</li>
              </ul><!-- End Clean list group -->

            </div>
          </div>

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">With custom content</h5>

              <!-- List group with custom content -->
              <ol class="list-group list-group-numbered">
                <li class="list-group-item d-flex justify-content-between align-items-start">
                  <div class="ms-2 me-auto">
                    <div class="fw-bold">Subheading</div>
                    Cras justo odio
                  </div>
                  <span class="badge bg-primary rounded-pill">14</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-start">
                  <div class="ms-2 me-auto">
                    <div class="fw-bold">Subheading</div>
                    Cras justo odio
                  </div>
                  <span class="badge bg-primary rounded-pill">14</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-start">
                  <div class="ms-2 me-auto">
                    <div class="fw-bold">Subheading</div>
                    Cras justo odio
                  </div>
                  <span class="badge bg-primary rounded-pill">14</span>
                </li>
              </ol><!-- End with custom content -->

            </div>
          </div>

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Advanced Content</h5>

              <!-- List group with Advanced Contents -->
              <div class="list-group">
                <a href="#" class="list-group-item list-group-item-action active" aria-current="true">
                  <div class="d-flex w-100 justify-content-between">
                    <h5 class="mb-1">List group item heading</h5>
                    <small>3 days ago</small>
                  </div>
                  <p class="mb-1">Some placeholder content in a paragraph.</p>
                  <small>And some small print.</small>
                </a>
                <a href="#" class="list-group-item list-group-item-action">
                  <div class="d-flex w-100 justify-content-between">
                    <h5 class="mb-1">List group item heading</h5>
                    <small class="text-muted">3 days ago</small>
                  </div>
                  <p class="mb-1">Some placeholder content in a paragraph.</p>
                  <small class="text-muted">And some muted small print.</small>
                </a>
                <a href="#" class="list-group-item list-group-item-action">
                  <div class="d-flex w-100 justify-content-between">
                    <h5 class="mb-1">List group item heading</h5>
                    <small class="text-muted">3 days ago</small>
                  </div>
                  <p class="mb-1">Some placeholder content in a paragraph.</p>
                  <small class="text-muted">And some muted small print.</small>
                </a>
              </div><!-- End List group Advanced Content -->

            </div>
          </div>

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">With Checkboxes and radios</h5>

              <!-- List group With Checkboxes and radios -->
              <ul class="list-group">
                <li class="list-group-item">
                  <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
                  First checkbox
                </li>
                <li class="list-group-item">
                  <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
                  Second checkbox
                </li>
                <li class="list-group-item">
                  <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
                  Third checkbox
                </li>
                <li class="list-group-item">
                  <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
                  Fourth checkbox
                </li>
                <li class="list-group-item">
                  <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
                  Fifth checkbox
                </li>
              </ul><!-- End List Checkboxes and radios -->

            </div>
          </div>

        </div>

      </div>
    </section>

  </main><!-- End #main -->

  <?php include "views/shares/footer.php"?>

</body>

</html>