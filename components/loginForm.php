

<form method="POST" action="login.php">
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                    placeholder="Enter email" pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}">
                
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password" pattern="(?=.*[!@#$%^&*])(?=.*[a-zA-Z0-9]).{8,}" title="Password must contain at least 8 characters and at least one special character">
            </div>
            <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>


