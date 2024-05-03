<?php require "../panel-includes/header.php"; ?>
<?php require "../../config/config.php";?>
<?php require "../../assets/logics/logicAdmin.php"; ?>


      <div class="row">
        <div class="col">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title mb-5 d-inline">Create Courses</h5>
              <form method="POST" action="create-course.php" enctype="multipart/form-data">
                <!-- Email input -->
                <div class="form-outline mb-4 mt-4">
                  <label> Course Title</label>

                  <input type="text" name="title" id="form2Example1" class="form-control" placeholder="title" />
                </div>
                <div class="form-group">
                  <label for="exampleFormControlSelect1">Select Category</label>
                  <select name="category_id" class="form-control" id="exampleFormControlSelect1">
                    <option>--select category--</option>
                    <?php foreach($allCategories as $category):?>
                    <option value="<?php echo $category->id;?>"><?php echo $category->title?></option>
                      <?php endforeach;?>
                  </select>
                </div>
                <div class="form-outline mb-4 mt-4">
                  <label>Course Instructor</label>

                  <input type="text" name="instructor" id="form2Example1" class="form-control" placeholder="instructor" />
                </div>

                <div class="form-group">
                  <label for="exampleFormControlTextarea1">Description</label>
                  <textarea name="description" placeholder="description" class="form-control"
                    id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
                <div class="form-outline mb-4 mt-4">
                  <label>Units</label>
                  <input type="text" name="units" id="form2Example1" class="form-control" placeholder="units" />
                </div>

                
                <div class="form-outline mb-4 mt-4">
                  <label>Enter Due Date</label>
                  <input type="date" name="due_date" id="form2Example1" class="form-control" placeholder="Due date" />
                </div>

                <div class="form-outline mb-4 mt-4">
                  <label>Course File</label>

                  <input type="file" name="file_type" id="form2Example1" class="form-control" placeholder="File Type" />
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