const questions = [
    { text: "Les protéines aident-elles à la récupération musculaire ?", answer: true },
    { text: "Les glucides sont-ils mauvais pour les sportifs ?", answer: false },
    { text: "L'hydratation est-elle optionnelle ?", answer: false }
];

let currentQuestion = 0;
let score = localStorage.getItem('userScore') ? parseInt(localStorage.getItem('userScore')) : 0;

document.getElementById('score-display').innerText = score;

function showQuestion() {
    if (currentQuestion < questions.length) {
        document.getElementById('question-text').innerText = questions[currentQuestion].text;
    } else {
        document.getElementById('quiz-container').innerHTML = "Quiz terminé !";
    }
}

function checkAnswer(userAnswer) {
    if (userAnswer === questions[currentQuestion].answer) {
        score++;
        document.getElementById('feedback').innerText = "Correct !";
    } else {
        document.getElementById('feedback').innerText = "Faux...";
    }
    currentQuestion++;
    localStorage.setItem('userScore', score); // Stockage persistant
    document.getElementById('score-display').innerText = score;
    setTimeout(showQuestion, 1000);
}

showQuestion();