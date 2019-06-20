<div class="modal fade" id="myRegisterModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 style="font-size:30px; letter-spacing: 1px;">REGISTER</h4>
        </div>
        <div class="modal-body">
            <div class="form-group">
              <h5><?php echo $_SESSION['msg'];?></h5>
              <form action="includes/register_process.php" id="register_form" method="POST">
                <div class="form-row">
                <div class="form-group col-sm-6"> <!-- Firstname input -->
                    <label class="control-label" for="firstname">First Name:</label>
                    <input class="form-control" id="firstname" name="firstname" placeholder="Enter first name" type="text" required/>
                </div>
                <div class="form-group col-sm-6"> <!-- Lastname input -->
                    <label class="control-label" for="lastname">Last Name:</label>
                    <input class="form-control" id="lastname" name="lastname" placeholder="Enter last name" type="text" required/>
                </div>
                </div>
                <div class="form-group col-sm-12"> <!-- Email Address input -->
                    <label for="email">Email Address:</label>
                    <input type="email" class="form-control" name="email" id="email" placeholder="Enter email address" required>
                </div>
                <div class="form-row">
                <div class="form-group col-sm-6"> <!-- Password input -->
                    <label for="password">Password:</label>
                    <input type="password" class="form-control" name="password" id="password" placeholder="Enter password" required>
                </div>
                <div class="form-group col-sm-6"> <!-- Confirm Password input -->
                    <label for="password">Confirm Password:</label>
                    <input type="password" class="form-control" name="password_confirm" id="password_confirm" placeholder="Enter confirm password" required>
                </div>
                </div>
                <div class="form-group col-sm-12"> <!-- Date Of Birth input -->
                    <label for="bday">Date Of Birth:</label>
                    <input type="date" class="form-control" name="dob" id="dob" required>
                </div> 
                <div class="form-group col-sm-12"> <!-- Submit button -->
                    <button class="btn btn-primary" name="register" type="submit">Register</button>
                </div>
              </form>
            </div>  
        </div>
        <div class="modal-footer" style="margin-top:350px;">
          <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal">
            <span class="glyphicon glyphicon-remove"></span> Cancel
          </button>
          <p>Already have account? <a data-toggle="modal" data-target="#myLoginModal" data-dismiss="modal">Login</a></p>
        </div>
          <script>

              </script>
      </div>
    </div>
  </div>