<?php require "../panel-includes/header.php"; ?>

<body>
  <div id="wrapper">
    <nav class="navbar header-top fixed-top navbar-expand-lg  navbar-dark bg-dark">
      <div class="container">
        <a class="navbar-brand" href="#">LOGO</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText"
          aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarText">
          <ul class="navbar-nav side-nav">
            <li class="nav-item">
              <a class="nav-link" style="margin-left: 20px;" href="../index.html">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../admins/admins.html" style="margin-left: 20px;">Admins</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../categories-admins/show-categories.html"
                style="margin-left: 20px;">Categories</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../products-admins/show-products.html" style="margin-left: 20px;">Products</a>
            </li>
            <!--  <li class="nav-item">
            <a class="nav-link" href="#" style="margin-left: 20px;">Comments</a>
          </li> -->
          </ul>
          <ul class="navbar-nav ml-md-auto d-md-flex">
            <li class="nav-item">
              <a class="nav-link" href="../index.html">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                username
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Logout</a>

            </li>


          </ul>
        </div>
      </div>
    </nav>
    <div class="container-fluid">
      <div class="row">
        <div class="col">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title mb-5 d-inline">Create Courses</h5>
              <form method="POST" action="" enctype="multipart/form-data">
                <!-- Email input -->
                <div class="form-outline mb-4 mt-4">
                  <label> Course Title</label>

                  <input type="text" name="title" id="form2Example1" class="form-control" placeholder="title" />
                </div>

                <div class="form-outline mb-4 mt-4">
                  <label>Course Instructor</label>

                  <input type="text" name="price" id="form2Example1" class="form-control" placeholder="price" />
                </div>

                <div class="form-group">
                  <label for="exampleFormControlTextarea1">Description</label>
                  <textarea name="description" placeholder="description" class="form-control"
                    id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>

                <div class="form-group">
                  <label for="exampleFormControlSelect1">Select Category</label>
                  <select name="category_id" class="form-control" id="exampleFormControlSelect1">
                    <option>--select category--</option>
                    <option>on-boarding</option>
                    <option>Transport</option>
                    <option>safety</option>
                  </select>
                </div>

                <div class="form-group">
                  <label for="exampleFormControlSelect1">Select Due Date</label>
                  <select name="category_id" class="form-control" id="exampleFormControlSelect1">
                    <option>--select Due Date--</option>
                    <option>2024</option>
                    <option>2025</option>
                    <option>2026</option>

                  </select>
                </div>

                <div class="form-outline mb-4 mt-4">
                  <label>Image</label>

                  <input type="file" name="image" id="form2Example1" class="form-control" placeholder="image" />
                </div>



                <!-- Submit button -->
                <button type="submit" name="submit" class="btn btn-primary  mb-4 text-center">create</button>


              </form>

            </div>
          </div>
        </div>
      </div>
    </div>
    <script type="text/javascript">

    </script>
</body>

</html>