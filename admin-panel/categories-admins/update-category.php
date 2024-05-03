<?php require "../panel-includes/header.php"; ?>
<?php require "../../config/config.php";?>
<?php require "../../assets/logics/logicAdmin.php"; ?>




       <div class="row">
        <div class="col">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title mb-5 d-inline">Update Categories</h5>
          <form method="POST" action="update-category.php?id=<?php echo $id; ?>" enctype="multipart/form-data">
                <!-- Email input -->
                <div class="form-outline mb-4 mt-4">
                  <input type="text" name="name" value="<?php echo $category->title;?>" id="form2Example1" class="form-control" placeholder="name" />
                </div>
                <div class="form-group">
                  <label for="exampleFormControlTextareal">Description</label>
                  <textarea name="description" placeholder="description" class="form-control" id="xampleFormControlTextareal" rows="3">
                  <?php echo $category->description; ?>
                  </textarea>
                  </div>
      
                <!-- Submit button -->
                <button type="submit" name="submit" class="btn btn-primary  mb-4 text-center">update</button>

          
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