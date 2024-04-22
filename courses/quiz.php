<?php require "../includes/header.php";?>
<?php require "../config/config.php";?>  

<?php 

  if(!isset($_SESSION['username'])){

    echo "<script> window.location.href'".APPURL."';</script>";

  }

  if(isset($_POST['submit'])) {
    
      $user_id = $_POST['user_id'];
    //   $course_id = $_POST['course_id'];
    //   $category_id = $_POST['category_id'];
    //   $employee_no = $_POST['employee_no'];
      $totalScore = $_POST['totalScore'];
      

      $insert = $conn->prepare("INSERT INTO results (user_id, totalScore)
      VALUES(:user_id, :totalScore)");
      
      $insert->execute([
        ":user_id" => $user_id,
        // ":course_id" => $course_id,
        // ":category_id" => $category_id,
        // ":employee_no" => $employee_no,
        ":totalScore" => $totalScore
      ]);
    }

    if(isset($_GET['id'])){
    
        $id = $_GET['id'];

        $select = $conn->query("SELECT * FROM users WHERE id='$id'");
        $select->execute();
    
        $user = $select->fetch(PDO::FETCH_OBJ);
    
    } 
    // else {
    //     echo "<script> window.location.href='".APPURL."/404.php'; </script>";
    
    // }

    // $courses = $conn->prepare("SELECT * FROM courses WHERE id != '$id'");

    // $courses->execute();

    // $allCourses = $courses->fetchAll(PDO::FETCH_OBJ);

    //course validation
    // if(isset($_SESSION['user_id'])){
        
    //     $courses = $conn->query("SELECT * FROM courses WHERE id = '$id'");

    //     $courses->execute();
    
    //     $allCourses= $courses->fetchAll(PDO::FETCH_OBJ);
    
    // }

    // $category = $conn->query("SELECT * FROM course_category WHERE (id as category_id ='$id')");
    // $category->execute();

    // $course_category = $category->fetch(PDO::FETCH_OBJ);
    
?> 

<body>
<div  class= "container" >
            <header class ="header">
                
                <h1>QUIZ</h1>
                
                <h3>This is a small quiz to test your understanding on the Topic</h3>
                </header>
            <div id="section">
                <div class = "results"></div>
                <form name = "HPquizform" method="POST" action="quiz.php" onsubmit = "return submitAnswers()">
                    <input type="hidden" value= "<?php echo $_SESSION['user_id']; ?>" name="user_id" id="form3Example1c" class="form-control" required="" />
                    <!-- <input type="hidden" value="<?php echo $user->id; ?>" name="course_id" id="form3Example1c" class="form-control" required="" /> -->
                    <!-- <input type="hidden" value= "<?php echo $user->category_id; ?>" name="category_id" id="form3Example1c" class="form-control" required=""/> -->
                    <!-- <input type="hidden" value= "<?php echo $user->employee_no; ?>" name="employee_no" id="form3Example1c" class="form-control" required=""/> -->
                    <input type="hidden" value="totalScore" name="totalScore" id="totalScore" />
                    
                    <h3>1. What does PPE stand for?</h3>
                    <input type = "radio" name = "q1" value = "1" id = "q11">1.Personal Protection Environment <br>
                    <input type = "radio" name = "q1" value = "2" id = "q12">2.Personal Protection Equipment  <br>
                    <input type = "radio" name = "q1" value = "3" id = "q13">3.Public Protection Essentials  <br>
                    <input type = "radio" name = "q1" value = "4" id = "q14">4.Personalized Protective Enclosure <br>
                    
                    <h3>2. Which of the following is NOT considered a common workplace hazard?</h3>
                    <input type = "radio" name = "q2" value = "1" id = "q21">1.Slippery floors <br>
                    <input type = "radio" name = "q2" value = "2" id = "q22">2.Excessive noise  <br>
                    <input type = "radio" name = "q2" value = "3" id = "q23">3.Adequate lighting  <br>
                    <input type = "radio" name = "q2" value = "4" id = "q24">4.Poor ventilation <br>
                    
                    <h3>3. What does MSDS stand for?</h3>
                    <input type = "radio" name = "q3" value = "1" id = "q31">1.Material Safety Data Sheet <br>
                    <input type = "radio" name = "q3" value = "2" id = "q32">2.Mandatory Safety Directive Standards  <br>
                    <input type = "radio" name = "q3" value = "3" id = "q33">3.Manufacturing Safety and Data Standards <br>
                    <input type = "radio" name = "q3" value = "4" id = "q34">4.Maximum Safety Deployment System <br>
                    
                    <h3>4. Which type of fire extinguisher is suitable for electrical fires?</h3>
                    <input type = "radio" name = "q4" value = "1" id = "q41">1.Class A  <br>
                    <input type = "radio" name = "q4" value = "2" id = "q42">2.Class B <br>
                    <input type = "radio" name = "q4" value = "3" id = "q43">3.Class C <br>
                    <input type = "radio" name = "q4" value = "4" id = "q44">4.Class D <br>
                                    
                    <h3>5. What should you do if you discover a fire in the workplace?</h3>
                    <input type = "radio" name = "q5" value = "1" id = "q51">1.Run away from the fire  <br>
                    <input type = "radio" name = "q5" value = "2" id = "q52">2.Immediately try to extinguish it  <br>
                    <input type = "radio" name = "q5" value = "3" id = "q53">3.Call emergency services and evacuate if necessary  <br>
                    <input type = "radio" name = "q5" value = "4" id = "q54">4.Continue working and ignore it  <br>
                    
                     <h3>6. What is the purpose of an evacuation plan?</h3>
                    <input type = "radio" name = "q6" value = "1" id = "q61">1.To cause panic among employees <br>
                    <input type = "radio" name = "q6" value = "2" id = "q62">2.To provide guidance on what to do in the event of an emergency  <br>
                    <input type = "radio" name = "q6" value = "3" id = "q63">3.To ensure that employees know where to find the emergency exits  <br>
                    <input type = "radio" name = "q6" value = "4" id = "q64">4.To create unnecessary paperwork  <br>
                    
                     <h3>7. Which of the following is an example of ergonomic risk factors?</h3>
                    <input type = "radio" name = "q7" value = "1" id = "q71">1.Proper lifting techniques <br>
                    <input type = "radio" name = "q7" value = "2" id = "q72">2.Sitting with good posture <br>
                    <input type = "radio" name = "q7" value = "3" id = "q73">3.Using tools that require excessive force  <br>
                    <input type = "radio" name = "q7" value = "4" id = "q74">4.Taking regular breaks <br>
                    
                     <h3>8. What is the primary purpose of a safety data sheet (SDS)?</h3>
                    <input type = "radio" name = "q8" value = "1" id = "q81">1.To provide information on how to use a product safely  <br>
                    <input type = "radio" name = "q8" value = "2" id = "q82">2.To list the ingredients of a product <br>
                    <input type = "radio" name = "q8" value = "3" id = "q83">3.To advertise the product <br>
                    <input type = "radio" name = "q8" value = "4" id = "q84">4.To provide information on how to dispose of a product <br>
                    <br>
                    <h3>9. What should you do if you witness a workplace injury?</h3>
                    <input type = "radio" name = "q9" value = "1" id = "q91">1.Ignore it  <br>
                    <input type = "radio" name = "q9" value = "2" id = "q92">2.Report it to your supervisor or safety officer<br>
                    <input type = "radio" name = "q9" value = "3" id = "q93">3.Laugh at the injured person <br>
                    <input type = "radio" name = "q9" value = "4" id = "q94">4.Blame the injured person <br>
                    <br>
                    <h3>10. What is the correct way to lift a heavy object?</h3>
                    <input type = "radio" name = "q10" value = "1" id = "q101">1.Bend your back while keeping your legs straight  <br>
                    <input type = "radio" name = "q10" value = "2" id = "q102">2.Bend at the waist and lift with your back <br>
                    <input type = "radio" name = "q10" value = "3" id = "q103">3.Bend your knees and keep your back straight <br>
                    <input type = "radio" name = "q10" value = "4" id = "q104">4.Lift with your arms only <br>
                    <br>
                    <h3>11. What does OSHA stand for?</h3>
                    <input type = "radio" name = "q11" value = "1" id = "q111">1.Occupational Safety and Health Administration <br>
                    <input type = "radio" name = "q11" value = "2" id = "q112">2.Office of Safety and Hazard Assessment <br>
                    <input type = "radio" name = "q11" value = "3" id = "q113">3.Occupational Security and Hazard Assessment <br>
                    <input type = "radio" name = "q11" value = "4" id = "q114">4.Office of Standards for Health and Assessment<br>
                    <br>
                    <h3>12. Which of the following is NOT a common cause of workplace accidents?</h3>
                    <input type = "radio" name = "q12" value = "1" id = "q121">1.Lack of training  <br>
                    <input type = "radio" name = "q12" value = "2" id = "q122">2.Unsafe working conditions<br>
                    <input type = "radio" name = "q12" value = "3" id = "q123">3.Proper use of PPE <br>
                    <input type = "radio" name = "q12" value = "4" id = "q124">4.Human error<br>
                    <br>
                    <h3>13. What is the purpose of conducting regular safety inspections?</h3>
                    <input type = "radio" name = "q13" value = "1" id = "q131">1.To identify and correct hazards before accidents occur  <br>
                    <input type = "radio" name = "q13" value = "2" id = "q132">2.To waste time <br>
                    <input type = "radio" name = "q13" value = "3" id = "q133">3.To criticize employeest <br>
                    <input type = "radio" name = "q13" value = "4" id = "q134">4.To discourage employees<br>
                    <br>
                    <h3>14. What is the most appropriate action if you notice a spill on the floor?</h3>
                    <input type = "radio" name = "q14" value = "1" id = "q141">1.Ignore it and continue walking  <br>
                    <input type = "radio" name = "q14" value = "2" id = "q142">2.Clean it up immediately or report it to someone who can <br>
                    <input type = "radio" name = "q14" value = "3" id = "q143">3.Walk around it <br>
                    <input type = "radio" name = "q14" value = "4" id = "q144">4.Take a picture and post it on social media <br>
                    <br>
                    <h3>15. What is the main purpose of safety training?</h3>
                    <input type = "radio" name = "q15" value = "1" id = "q151">1.To bore employees  <br>
                    <input type = "radio" name = "q15" value = "2" id = "q152">2.To ensure employees are aware of hazards and know how to work safely <br>
                    <input type = "radio" name = "q15" value = "3" id = "q153">3.To entertain employees <br>
                    <input type = "radio" name = "q15" value = "4" id = "q154">4.To waste company resources <br>
                    <br>
                    <h3>16. What should you do if you suspect a co-worker is under the influence of drugs or alcohol at work?</h3>
                    <input type = "radio" name = "q16" value = "1" id = "q161">1.Ignore it  <br>
                    <input type = "radio" name = "q16" value = "2" id = "q162">2.Report it to your supervisor or HR department <br>
                    <input type = "radio" name = "q16" value = "3" id = "q163">3.Join them in drinking or using drugs <br>
                    <input type = "radio" name = "q16" value = "4" id = "q164">4.Join them in drinking or using drugs <br>
                    <br>
                    <h3>17. What is the correct procedure for using a fire extinguisher? <h3>
                    <input type = "radio" name = "q17" value = "1" id = "q171">1.Point the nozzle at the base of the fire and squeeze the handle <br>
                    <input type = "radio" name = "q17" value = "2" id = "q172">2.Spray the extinguisher randomly around the fire<br>
                    <input type = "radio" name = "q17" value = "3" id = "q173">3.Use the extinguisher to prop open a door <br>
                    <input type = "radio" name = "q17" value = "4" id = "q174">4.Throw the extinguisher at the fire <br>
                    <br>
                    <h3>18. How should you properly store chemicals in the workplace?</h3>
                    <input type = "radio" name = "q18" value = "1" id = "q181">1.Leave them out on countertops for easy access <br>
                    <input type = "radio" name = "q18" value = "2" id = "q182">2.Store them wherever there's space available <br>
                    <input type = "radio" name = "q18" value = "3" id = "q183">3.Store them in designated areas according to their compatibility <br>
                    <input type = "radio" name = "q18" value = "4" id = "q184">4.Mix them together to save space <br>
                    <br>
                    <h3>19. What is the correct way to respond to a medical emergency?</h3>
                    <input type = "radio" name = "q19" value = "1" id = "q191">1.Panic and scream  <br>
                    <input type = "radio" name = "q19" value = "2" id = "q192">2.Remain calm, call for help, and provide first aid if trained to do so <br>
                    <input type = "radio" name = "q19" value = "3" id = "q193">3. Run away <br>
                    <input type = "radio" name = "q19" value = "4" id = "q194">4.Pretend you didn't see anything <br>
                    <br>
                    <h3>20.  What should you do if you discover a suspicious package in the workplace?</h3>
                    <input type = "radio" name = "q20" value = "1" id = "q201">1.Open it to see what's inside  <br>
                    <input type = "radio" name = "q20" value = "2" id = "q202">2.Ignore it <br>
                    <input type = "radio" name = "q20" value = "3" id = "q203">3.Report it to your supervisor or security immediately <br>
                    <input type = "radio" name = "q20" value = "4" id = "q204">4.Take it outside and throw it away <br>
                    <br>
                    <!-- <h3> What is the primary purpose of a safety data sheet (SDS)?</h3>
                    <input type = "radio" name = "q8" value = "1" id = "q81">1.To provide information on how to use a product safely  <br>
                    <input type = "radio" name = "q8" value = "2" id = "q82">2.To list the ingredients of a product <br>
                    <input type = "radio" name = "q8" value = "3" id = "q83">3.To advertise the product <br>
                    <input type = "radio" name = "q8" value = "4" id = "q84">4.To provide information on how to dispose of a product <br>
                    <br> -->
                    <!-- <h3> What is the primary purpose of a safety data sheet (SDS)?</h3>
                    <input type = "radio" name = "q8" value = "1" id = "q81">1.To provide information on how to use a product safely  <br>
                    <input type = "radio" name = "q8" value = "2" id = "q82">2.To list the ingredients of a product <br>
                    <input type = "radio" name = "q8" value = "3" id = "q83">3.To advertise the product <br>
                    <input type = "radio" name = "q8" value = "4" id = "q84">4.To provide information on how to dispose of a product <br>
                    <br>
                    <h3> What is the primary purpose of a safety data sheet (SDS)?</h3>
                    <input type = "radio" name = "q8" value = "1" id = "q81">1.To provide information on how to use a product safely  <br>
                    <input type = "radio" name = "q8" value = "2" id = "q82">2.To list the ingredients of a product <br>
                    <input type = "radio" name = "q8" value = "3" id = "q83">3.To advertise the product <br>
                    <input type = "radio" name = "q8" value = "4" id = "q84">4.To provide information on how to dispose of a product <br>
                    <br>
                    <h3> What is the primary purpose of a safety data sheet (SDS)?</h3>
                    <input type = "radio" name = "q8" value = "1" id = "q81">1.To provide information on how to use a product safely  <br>
                    <input type = "radio" name = "q8" value = "2" id = "q82">2.To list the ingredients of a product <br>
                    <input type = "radio" name = "q8" value = "3" id = "q83">3.To advertise the product <br>
                    <input type = "radio" name = "q8" value = "4" id = "q84">4.To provide information on how to dispose of a product <br>
                    <br>
                    <h3> What is the primary purpose of a safety data sheet (SDS)?</h3>
                    <input type = "radio" name = "q8" value = "1" id = "q81">1.To provide information on how to use a product safely  <br>
                    <input type = "radio" name = "q8" value = "2" id = "q82">2.To list the ingredients of a product <br>
                    <input type = "radio" name = "q8" value = "3" id = "q83">3.To advertise the product <br>
                    <input type = "radio" name = "q8" value = "4" id = "q84">4.To provide information on how to dispose of a product <br>
                    <br>
                    
                    <h3> What is the primary purpose of a safety data sheet (SDS)?</h3>
                    <input type = "radio" name = "q8" value = "1" id = "q81">1.To provide information on how to use a product safely  <br>
                    <input type = "radio" name = "q8" value = "2" id = "q82">2.To list the ingredients of a product <br>
                    <input type = "radio" name = "q8" value = "3" id = "q83">3.To advertise the product <br>
                    <input type = "radio" name = "q8" value = "4" id = "q84">4.To provide information on how to dispose of a product <br>
                    <br>
                    
                    <h3> What is the primary purpose of a safety data sheet (SDS)?</h3>
                    <input type = "radio" name = "q8" value = "1" id = "q81">1.To provide information on how to use a product safely  <br>
                    <input type = "radio" name = "q8" value = "2" id = "q82">2.To list the ingredients of a product <br>
                    <input type = "radio" name = "q8" value = "3" id = "q83">3.To advertise the product <br>
                    <input type = "radio" name = "q8" value = "4" id = "q84">4.To provide information on how to dispose of a product <br>
                    <br>
                    <h3> What is the primary purpose of a safety data sheet (SDS)?</h3>
                    <input type = "radio" name = "q8" value = "1" id = "q81">1.To provide information on how to use a product safely  <br>
                    <input type = "radio" name = "q8" value = "2" id = "q82">2.To list the ingredients of a product <br>
                    <input type = "radio" name = "q8" value = "3" id = "q83">3.To advertise the product <br>
                    <input type = "radio" name = "q8" value = "4" id = "q84">4.To provide information on how to dispose of a product <br>
                    <br> -->

                    <input type = "submit" name="submit"  value ="Submit Answers">
                </form>
</div>
        </div>
</body>
<?php require "../includes/footer.php"; ?>