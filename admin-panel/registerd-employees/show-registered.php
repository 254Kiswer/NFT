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
              <h5 class="card-title mb-4 d-inline">registered</h5>
              <a href="create-category.html" class="btn btn-primary mb-4 text-center float-right">Create Categories</a>
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Employee name</th>
                    <th scope="col">Employee id</th>
                    <th scope="col">Department</th>
                    <th scope="col">update</th>
                    <th scope="col">delete</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>Ali juma</td>
                    <td>33</td>
                    <td>transport</td>
                    <td><a href="#" class="btn btn-warning text-white text-center ">Update </a></td>
                    <td><a href="#" class="btn btn-danger  text-center ">Delete </a></td>
                  </tr>
                  <tr>
                    <th scope="row">2</th>
                    <td>Diana Mwangi</td>
                    <td>24</td>
                    <td>Front Desk</td>
                    <td><a href="#" class="btn btn-warning text-white text-center">Update </a></td>
                    <td><a href="#" class="btn btn-danger  text-center ">Delete </a></td>
                  </tr>
                  <tr>
                    <th scope="row">3</th>
                    <td>Abdillah Hassan</td>
                    <td>10</td>
                    <td>warehouse</td>
                    <td><a href="#" class="btn btn-warning text-white text-center ">Update </a></td>
                    <td><a href="#" class="btn btn-danger text-center">Delete </a></td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>



    </div>
    <script type="text/javascript">

    </script>
</body>

</html>