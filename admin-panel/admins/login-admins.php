<?php require "../panel-includes/header.php"; ?>
<?php require "../../config/config.php"; ?>
<?php require "../../assets/logics/logicAdmin.php"; ?>
<?php 

   
?>


      <div class="row">
        <div class="col">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title mt-5">Login</h5>
              <form method="POST" class="p-auto" action="login-admins.php">
                  <!-- Email input -->
                  <div class="form-outline mb-4">
                    <input type="email" name="email" id="form2Example1" class="form-control" placeholder="Email" pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}"/>
                   
                  </div>

                  
                  <!-- Password input -->
                  <div class="form-outline mb-4">
                    <input type="password" name="password" id="form2Example2" placeholder="Password" class="form-control" pattern="(?=.*[!@#$%^&*])(?=.*[a-zA-Z0-9]).{8,}" title="Password must contain at least 8 characters and at least one special character"/>
                    
                  </div>



                  <!-- Submit button -->
                  <button type="submit" name="submit" class="btn btn-primary  mb-4 text-center">Login</button>

                 
                </form>

            </div>
       </div>
     </div>
    </div>
</div>