function submitAnswers() {
    var total = 20 ;
    var score = 0;
   
    
    //get user input
    var q1 = document.forms["HPquizform"]["q1"].value;
    var q2 = document.forms["HPquizform"]["q2"].value;
    var q3 = document.forms["HPquizform"]["q3"].value;
    var q4 = document.forms["HPquizform"]["q4"].value;
    var q5 = document.forms["HPquizform"]["q5"].value;
    var q6 = document.forms["HPquizform"]["q6"].value;
    var q7 = document.forms["HPquizform"]["q7"].value;
    var q8 = document.forms["HPquizform"]["q8"].value;
    var q9 = document.forms["HPquizform"]["q9"].value;
    var q10 = document.forms["HPquizform"]["q10"].value;
    var q11 = document.forms["HPquizform"]["q11"].value;
    var q12 = document.forms["HPquizform"]["q12"].value;
    var q13 = document.forms["HPquizform"]["q13"].value;
    var q14 = document.forms["HPquizform"]["q14"].value;
    var q15 = document.forms["HPquizform"]["q15"].value;
    var q16 = document.forms["HPquizform"]["q16"].value;
    var q17 = document.forms["HPquizform"]["q17"].value;
    var q18 = document.forms["HPquizform"]["q18"].value;
    var q19 = document.forms["HPquizform"]["q19"].value;
    var q20 = document.forms["HPquizform"]["q20"].value;
  
    
    //validation
    for( var i = 1 ; i<=total ; i++)
        {
            if(eval('q'+i)== null || eval('q'+i) == ' '){
                alert('You missed some questions!');
                return false;
            }
        }
        
   var answers=["2","3","1","3","3","2","3","1","2","1","1","3","1","2","2","2","1","3","2","3"];
   
   if(q1 == answers[0]){
       score++;
   }
    if(q2 == answers[1]){
       score++;
   }
    if(q3 == answers[2]){
       score++;
   }
    if(q4 == answers[3]){
       score++;
   }
    if(q5 == answers[4]){
       score++;
   }
    if(q6 == answers[5]){
       score++;
   }
    if(q7 == answers[6]){
       score++;
   }
    if(q8 == answers[7]){
       score++;
   }
   if(q9 == answers[8]){
    score++;
    }
    if(q10 == answers[9]){
        score++;
    }
    if(q11 == answers[10]){
        score++;
    }
    if(q12 == answers[11]){
        score++;
    }
    if(q13 == answers[12]){
        score++;
    }
    if(q14 == answers[13]){
        score++;
    }
    if(q15 == answers[14]){
        score++;
    }
    if(q16 == answers[15]){
        score++;
    }
    if(q17 == answers[16]){
        score++;
    }
    if(q18 == answers[17]){
        score++;
    }
    if(q19 == answers[18]){
        score++;
    }
    if(q20 == answers[19]){
        score++;
    }
    // if(q8 == answers[7]){
    //     score++;
    // }
    // if(q8 == answers[7]){
    //     score++;
    // }
    // if(q8 == answers[7]){
    //     score++;
    // }

    
     // Calculate total score
    var totalScore = (score / total) * 100;
    
    // Set the value of totalScore to the hidden input field
    document.getElementById("totalScore").value = score;

     // Display total score
    alert('Your total score is ' + totalScore.toFixed(2) + '%');
     
     // Insert total score into database or perform other operations
}