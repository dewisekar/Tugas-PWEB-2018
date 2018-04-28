
function Quiz(questions) {
    this.score = 0;
    this.questions = questions;
    this.currentQuestionIndex = 0;
}

Quiz.prototype.guess = function(answer) {
    if(this.getCurrentQuestion().isCorrectAnswer(answer)) {
        this.score++;
    }
    this.currentQuestionIndex++;
};

Quiz.prototype.getCurrentQuestion = function() {
    return this.questions[this.currentQuestionIndex];
};

Quiz.prototype.hasEnded = function() {
    return this.currentQuestionIndex >= this.questions.length;
};
function Question(text, choices, answer) {
    this.text = text;
    this.choices = choices;
    this.answer = answer;
}

Question.prototype.isCorrectAnswer = function (choice) {
    return this.answer === choice;
};
var QuizUI = {
    displayNext: function () {
        if (quiz.hasEnded()) {
            this.displayScore();
        } else {
            this.displayQuestion();
            this.displayChoices();
            this.displayProgress();
        }
    },
    displayQuestion: function() {
        this.populateIdWithHTML("question", quiz.getCurrentQuestion().text);
    },
    displayChoices: function() {
        var choices = quiz.getCurrentQuestion().choices;

        for(var i = 0; i < choices.length; i++) {
            this.populateIdWithHTML("choice" + i, choices[i]);
            this.guessHandler("guess" + i, choices[i]);
        }
    },
    displayScore: function() {
        var gameOverHTML = "<h1>Congratulations "+nama+"!</h1>";
        if (quiz.score>=6) {
             gameOverHTML +="<h1>You are a Type B Person!<h1><form action='sertifikatb.php' method='post' name='form1' id='form1'><br><input type='hidden' name='in_namaanda' id='in_namaand' value='"+ nama + "' /><input name='button' type='submit' id='button' value='Get Your Certificate Here!' class='btn--default' /></br>";
        }
        else
        {
            gameOverHTML+= "<h1>You are a Type A Person!<h1><form action='sertifikata.php' method='post' name='form1' id='form1'><br><input type='hidden' name='in_namaanda' id='in_namaand' value='"+ nama + "' /><input name='button' type='submit' id='button' value='Get Your Certificate Here!' class='btn--default' /></br>";
        }
       
        this.populateIdWithHTML("quiz", gameOverHTML);
    },
    
    populateIdWithHTML: function(id, text) {
        var element = document.getElementById(id);
        element.innerHTML = text;
    },
    guessHandler: function(id, guess) {
        var button = document.getElementById(id);
        button.onclick = function() {
            quiz.guess(guess);
            QuizUI.displayNext();
        }
    },
    
    displayProgress: function() {
        var currentQuestionNumber = quiz.currentQuestionIndex + 1;
        this.populateIdWithHTML("progress", "Question " + currentQuestionNumber + " of " + quiz.questions.length);
    }
};
//Create Questions
var questions = [
    new Question("When exercising...", [ "I try to keep a steady pace.", "I push myself to go harder."], "I try to keep a steady pace."),
    new Question("In conversations, sometimes...", ["I interrupt people.", "people interrupt me."], "people interrupt me."),
    new Question("I play games to...", ["To win","To have fun"], "To have fun"),
    new Question("The best position/rank in a team is...", ["The leader"," 2nd in command to an awesome leader."], " 2nd in command to an awesome leader."),
    new Question("When driving...", ["I pass cars","Cars pass me",], "Cars pass me"),
    new Question("The pleasure in a task is...", ["finishing it","exploring its possibilities."], "exploring its possibilities."),
    new Question("I eat...", ["slowly to savor the flavors.","fast, for a burst of flavor."], "slowly to savor the flavors."),
    new Question("Stress..", ["pushed me to achieve. ","harms my output."], "harms my output."),
    new Question("When I take breaks...", ["I stay preoccupied with my work.","I enjoy the moment."], "I enjoy the moment."),
    new Question("Do you manage your time?", ["Yes","No"], "No"),
    new Question("Do you stress when you don't achieve something?", ["Yes","No"], "No"),
];

//Create Quiz
var quiz = new Quiz(questions);

//Display Quiz
QuizUI.displayNext();
var nama;

$(document).ready(function(){
    $("#btnInputNama").click(function(){        
        nama = $('#input-nama').val();      
        if (nama == '') {
            alert('Name can not be empty!');
        } else {
             $("#inputnamah").hide(200);
              $("#quiz").css("display", "block");            

        }
        
    });
});