<formRegister class="mx-1 mx-md-4" method="POST" action="register.php">

   <div class="d-flex flex-row align-items-center mb-4">
       <i class="fas fa-user fa-lg me-3 fa-fw"></i>
            <div class="form-outline flex-fill mb-0">
                 <input type="varchar" name="employee_no" id="employee_no" class="form-control" required="" placeholder="Employee No." />
                                                    
            </div>
            </div>

    <div class="d-flex flex-row align-items-center mb-4">
        <i class="fas fa-user fa-lg me-3 fa-fw"></i>
             <div class="form-outline flex-fill mb-0">
                 <input type="text" name="firstname" id="firstname" required="" class="form-control" placeholder="First Name"/>                                    
            </div>
            </div>

    <div class="d-flex flex-row align-items-center mb-4">
        <i class="fas fa-user fa-lg me-3 fa-fw"></i>
             <div class="form-outline flex-fill mb-0">
                 <input type="text" name="lastname" id="lastname" required="" class="form-control" placeholder="last Name"/>
            </div>
            </div>

    <div class="d-flex flex-row align-items-center mb-4">
        <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
            <div class="form-outline flex-fill mb-0">
                 <input type="text" name="username" id="username" class="form-control" required="" placeholder="Username" />
            </div>
            </div>

     <div class="d-flex flex-row align-items-center mb-4">
         <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
            <div class="form-outline flex-fill mb-0">
                 <input type="email" name="email" id="email" class="form-control" required="" placeholder="Email"  pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}"/>
                                                    
            </div>
            </div>

    <div class="d-flex flex-row align-items-center mb-4">
            <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                <div class="form-outline flex-fill mb-0">
                    <input type="password" name="password" id="password" class="form-control" required="" placeholder="Password" pattern="(?=.*[!@#$%^&*])(?=.*[a-zA-Z0-9]).{8,}" title="Password must contain at least 8 characters and at least one special character"/>
                                                    
                </div>
                </div>

    <div class="d-flex flex-row align-items-center mb-4">
            <i class="fas fa-key fa-lg me-3 fa-fw"></i>
                <div class="form-outline flex-fill mb-0">
                    <input type="password" name="confirm_password" id="Confirm_password" class="form-control" placeholder="Confirm Password" pattern="(?=.*[!@#$%^&*])(?=.*[a-zA-Z0-9]).{8,}" title="Password must contain at least 8 characters and at least one special character"/>
                    </div>
                    </div>

    <div class="form-check d-flex justify-content-center mb-5">
            <input class="form-check-input me-2" type="checkbox" value="" id="teams" />
                <label class="form-check-label" for="teams">
                   I agree all statements in <a href="#!">Terms of service</a>
                 </label>
                </div>
 <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
 <button type="submit" name="submit"class="btn btn-primary btn-lg">Register</button>
    </div>
</formRegister>
        