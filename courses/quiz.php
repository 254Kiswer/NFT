<?php require "../includes/header.php";?>

<body>
<div  class= "container" >
            <header class ="header">
                
                <h1>QUIZ</h1>
                
                <h3>This is a small quiz to test your understanding on the Topic</h3>
                </header>
            <div id="section">
                <div class = "results"></div>
                <form name = "HPquizform" onsubmit = "return submitAnswers()">
                    <h3>What is Albus Dumbledore's full name?</h3>
                    <input type = "radio" name = "q1" value = "1" id = "q11">1.Albus Brian Percival Wulfric Dumbledore  <br>
                    <input type = "radio" name = "q1" value = "2" id = "q12">2.Albus Wulfric Percival Brian Dumbledore  <br>
                    <input type = "radio" name = "q1" value = "3" id = "q13">3.Albus Percival Wulfric Brian Dumbledore  <br>
                    <input type = "radio" name = "q1" value = "4" id = "q14">4.Albus Brian Percival Wulfric Dumbledore  <br>
                    
                    <h3>When was Harry Potter born?</h3>
                    <input type = "radio" name = "q2" value = "1" id = "q21">1.July 1st, 1980 <br>
                    <input type = "radio" name = "q2" value = "2" id = "q22">2.July 31st, 1980  <br>
                    <input type = "radio" name = "q2" value = "3" id = "q23">3.August 1st, 1980  <br>
                    <input type = "radio" name = "q2" value = "4" id = "q24">4.August 31st, 1980 <br>
                    
                    <h3>Which one of these people did Bellatrix Lestrange  kill?</h3>
                    <input type = "radio" name = "q3" value = "1" id = "q31">1.Remus Lupin <br>
                    <input type = "radio" name = "q3" value = "2" id = "q32">2.Harry Potter  <br>
                    <input type = "radio" name = "q3" value = "3" id = "q33">3.Sirius Black  <br>
                    <input type = "radio" name = "q3" value = "4" id = "q34">4.Ginny Weasley  <br>
                    
                    <h3>What is Hermione's middle name?</h3>
                    <input type = "radio" name = "q4" value = "1" id = "q41">1.Helen  <br>
                    <input type = "radio" name = "q4" value = "2" id = "q42">2.Jean  <br>
                    <input type = "radio" name = "q4" value = "3" id = "q43">3.Gabriel <br>
                    <input type = "radio" name = "q4" value = "4" id = "q44">4.Judy <br>
                                    
                    <h3>In the first book, on which floor is the off-limits corridor located?</h3>
                    <input type = "radio" name = "q5" value = "1" id = "q51">1.On the second floor  <br>
                    <input type = "radio" name = "q5" value = "2" id = "q52">2.On the third floor  <br>
                    <input type = "radio" name = "q5" value = "3" id = "q53">3.On the fifth floor  <br>
                    <input type = "radio" name = "q5" value = "4" id = "q54">4.On the sixth floor  <br>
                    
                     <h3>What is Luna Lovegood's Patronus?</h3>
                    <input type = "radio" name = "q6" value = "1" id = "q61">1.A mouse  <br>
                    <input type = "radio" name = "q6" value = "2" id = "q62">2.A hare  <br>
                    <input type = "radio" name = "q6" value = "3" id = "q63">3.A cat  <br>
                    <input type = "radio" name = "q6" value = "4" id = "q64">4.A ladybug  <br>
                    
                     <h3>How much is a Galleon worth?</h3>
                    <input type = "radio" name = "q7" value = "1" id = "q71">1.12 Sickles  <br>
                    <input type = "radio" name = "q7" value = "2" id = "q72">2.23 Sickles  <br>
                    <input type = "radio" name = "q7" value = "3" id = "q73">3.29 Sickles  <br>
                    <input type = "radio" name = "q7" value = "4" id = "q74">4.17 Sickles  <br>
                    
                     <h3>What animal does Rita Skeeter turn into in order to spy on people?</h3>
                    <input type = "radio" name = "q8" value = "1" id = "q81">1.A beetle  <br>
                    <input type = "radio" name = "q8" value = "2" id = "q82">2.An ant  <br>
                    <input type = "radio" name = "q8" value = "3" id = "q83">3.A cockroach  <br>
                    <input type = "radio" name = "q8" value = "4" id = "q84">4.A spider  <br>
                    <br>
                    <input type = "submit" value ="Submit Answers">
                </form>
</div>
        </div>
</body>
<?php require "../includes/footer.php"; ?>