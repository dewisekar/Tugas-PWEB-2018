$(document).ready(function(){
	var nama;
	var quiz;
	quiz = new Quiz(questions);

    $("#btnInputNama").click(function(){
    	nama = $('#input-nama').val();    	
		if (nama == '') {
			alert('Name can not be empty!');
		} else {
			document.getElementById("demo").innerHTML = nama
			

		}
		
	});
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
	        var gameOverHTML = "<h1>Congratulations!</h1>";
	        if (quiz.score>=5) {
	        	 gameOverHTML += "<h2> You are a Type B person!</h2><p>The study, which was completed in nearly a decade, concluded that Type B people have lower incidence of heart problems. Type B personalities are indulgent and tolerant. They also reported higher levels of satisfaction in life. Typically, these people have the following characteristics: </p><p>They know their abilities and work steadily for their goals. They enjoy their achievements. They are not too stressed out to excel. They can be disappointed when they fall short of their goals, but they are not devastated. They are more accepting of failures. They enjoy games and competitions, not for the sole objective of winning but for the love of the game. They are reflective and innovative. They allow themselves to explore and fail, if necessary.  Sometimes they are too relaxed and laid-back that they lack the drive to reach the uppermost of their careers. They are even-tempered. They typically live less stressful lives. </p>";
	        }
	        else
	        {
	        	gameOverHTML+= "<h2>You are a type A</h2><p>The study revealed that a person with a Type A personality is more likely to be preoccupied with social status, accomplishment in life, and self-esteem. This person is often domineering, impatient, and prone or quick to anger. This personality type was found to be associated with the higher risk of developing heart ailments compared to the other type. Type A people mainly have the following behavior and outlook in life:</p><p>These people are high-achievers. They are great at multi-tasking unrelated duties and jobs. They usually perform beyond par. They are constantly in a race to achieve higher goals. When goals are attained, they set much loftier aspirations. They can’t rest on their laurels. They find it difficult to accept failure. It is never one of their realities. For them, others fail, they don’t. They feel like time is an opponent that they have to beat every day. They will work their butts off to exhaustion. This severe sense of urgency makes them edgy. Relaxation is difficult for them. They need to compete. If there is no obvious competition, they create one. They are driven people, usually self-driven. Their stress levels are generally high.</p>";
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
	];
	
	QuizUI.displayNext();
    	
});