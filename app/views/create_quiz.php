<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz Form</title>

    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
        }

        .header {
            background-color: #f1f1f1;
            padding: 20px;
            text-align: center;
            position: sticky;
            top: 0;
            z-index: 100;
        }

        .container {
            padding: 20px;
        }

        .subcomment {
            font-size: 15px;
        }

        input[type=text],
        select,
        textarea {
            width: 100%;
            padding: 12px;
            border: 1px solid #ccc;
            box-sizing: border-box;
            margin-top: 6px;
            margin-bottom: 16px;
            resize: vertical;
        }

        .answer-container {
            display: none;
        }

        button {
            background-color: #4CAF50;
            color: white;
            padding: 12px 20px;
            border: none;
            cursor: pointer;
        }

        button:hover {
            background-color: #45a049;
        }
    </style>
</head>

<body>

<div class="header">
        <button onclick="addForm()" class="btnadd">Add Question</button>
    </div>

    <div class="container">
        <h1 style="text-align: center">Create Your Own Quiz!</h1>
        <h2>Quiz Title:</h2>
        <textarea id="quizTitle" name="quizTitle" placeholder="Write Quiz Title"></textarea><br>
        <h2>Note:<p class="subcomment">(Optional)</p></h2>
        <textarea id="note" name="note" placeholder="Write your note.."></textarea><br>

        <form method="post" action="/create_quiz" id="formContainer">
            <label for="question">Question</label>
            <input type="text" name="question" class="question" placeholder="Enter question...">
            <label for="selecttype">Answer Type</label>
            <select name="selecttype" class="formType" onchange="showAnswerFields(this)">
                <option>--Select Option--</option>
                <option value="multiplechoice">Multiple Choice</option>
                <option value="identification">Identification</option>
                <option value="checkbox">Check Box</option>
            </select>

            <div class="answer-container" id="answerContainer">
            </div><hr>

            <button type="submit" class="btn">Save Quiz</button>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script>
    let formCounter = 1;

    function addForm() {
        var original = document.querySelector('form');
        var cloned = original.cloneNode(true);

        // Update the name attributes to avoid conflicts
        cloned.querySelectorAll('[name]').forEach(element => {
            element.name = element.name + formCounter;
        });

        formCounter++;

        // Remove the previous "Save Quiz" button
        const prevSaveQuizButton = document.querySelector('.btn');
        if (prevSaveQuizButton) {
            prevSaveQuizButton.parentNode.removeChild(prevSaveQuizButton);
        }

        document.getElementById('formContainer').appendChild(cloned);
    }

    function showAnswerFields(selectElement) {
        var answerContainer = selectElement.parentNode.querySelector('.answer-container');
        var selectedType = selectElement.value;

        // Reset the answer container
        answerContainer.innerHTML = '';

        // Show the answer container for the selected type
        if (selectedType !== '--Select Option--') {
            answerContainer.style.display = 'block';

            // Add specific answer fields based on the selected type
            if (selectedType === 'multiplechoice') {
                answerContainer.innerHTML = '<label for="answer">Options (comma-separated)</label>' +
                    '<input type="text" name="answer" placeholder="Option 1, Option 2, ...">';
            } else if (selectedType === 'identification') {
                answerContainer.innerHTML = '<label for="answer">Correct Answer</label>' +
                    '<input type="text" name="answer" placeholder="Correct Answer">';
            } else if (selectedType === 'checkbox') {
                answerContainer.innerHTML = '<label for="answer">Options (comma-separated)</label>' +
                    '<input type="text" name="answer" placeholder="Option 1, Option 2, ...">';
            }
        } else {
            answerContainer.style.display = 'none';
        }
    }
</script>
</body>

</html>
