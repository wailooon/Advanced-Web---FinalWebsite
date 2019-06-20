<!-- Login Modal -->
<div class="modal fade" id="myLoginModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 style="font-size:30px; letter-spacing: 1px;">LOGIN</h4>
        </div>
        <div class="modal-body">
            <div class="form-group">
                <?php
                
                
                ?>    
                  <form  action="includes/login_process.php" id="login_form" method="POST">
                    <div class="form-group col-sm-12">
                      <label class="control-label" for="email">Email Address: </label>
                        <input class="form-control md-3" name="loginEmail" placeholder="Enter email address" type="text"/>
                    </div>
                    <div class="form-group col-sm-12">
                        <label for="password">Password:</label>
                        <input type="password" class="form-control md-3" name="loginPassword" placeholder="Enter password">
                    </div>
                    <!-- Submit button -->
                    <div class="form-group col-sm-12">
                        <button class="btn btn-success mt-3 pull-right" name="login" id="login">Login</button>
                    </div>
                  </form>
            </div>
          </div>
        <div class="modal-footer" style="margin-top:200px;">
          <div class="form-group col-sm-6">
            <p>Don't have account? <a data-toggle="modal" href="#myRegisterModal" data-dismiss="modal">Register</a></p>
          </div>
          <div class="form-group col-sm-6">
            <button type="submit" class="btn btn-danger btn-default pull-right" data-dismiss="modal">Cancel</button>
          </div>
        </div>
      </div>
    </div>
  </div>
<!--

<script>
$('#l').on($_POST['login'],function(event){
   event.preventDefault(); 
    $.ajax({
        url:"login_process.php",
        method:"POST",
        data:$('myLoginModal').serialize(),
        success.function(data)
        {
            $('#myLoginModal')[0].reset();
            $('#myLoginModal').modal('hidden');
        }
    })
});
</script>-->
