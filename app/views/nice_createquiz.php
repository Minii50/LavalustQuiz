<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Header for Dynamic Form</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
    }

    header {
      background-color: #333;
      color: #fff;
      padding: 10px;
      text-align: center;
      position: sticky;
      top: 0;
      z-index: 100;
    }

    input[type=text], textarea {
            width: 100%;
            padding: 12px;
            border: 1px solid #ccc;
            box-sizing: border-box;
            margin-top: 6px;
            margin-bottom: 16px;
            resize: vertical;
        }

    select, button {
      margin: 10px;
    }

    #formContainer {
      padding: 20px;
    }

    form {
      margin-bottom: 20px;
    }

    .btn {
            background-color: #4CAF50;
            color: white;
            padding: 12px 20px;
            border: none;
            cursor: pointer;
            float: left;
            }
    
    button:hover {
            background-color: #96b0ff;
            }
  </style>
</head>
<body>

<header>
    <img " alt="MinSU_Logo">
  <h1>Dynamic Form Creation</h1>
  <select id="formType">
    <option value="multipleChoice">Multiple Choice</option>
    <option value="identification">Identification</option>
    <!-- Add more options as needed -->
  </select>
  
  <button onclick="addForm()">Add Form</button>
</header>
<h1 style="text-align: center">Create Your Own Quiz!</h1>
<h4 style="text-align: center">Enjoy! :)</h4>
    <h2>Note:</h2>
    <textarea id="note" name="note" placeholder="Write your note..(Optional)"></textarea><br>


<div id="formContainer"></div>

<script>
  function addForm() {
    var formType = document.getElementById('formType').value;
   
    // Create a new form based on the selected type
    var newForm = document.createElement('form');
   
    if (formType === 'multipleChoice') {
      newForm.innerHTML = `
        <label for="question">Multiple Choice Question:</label>
        <input type="text" id="question" name="question">
        <br>
        <label for="option1">Option 1:</label>
        <input type="text" id="option1" name="option1">
        <br>
        <label for="option2">Option 2:</label>
        <input type="text" id="option2" name="option2">
        ---------------------------------------------
        <!-- Add more options as needed -->
      `;
    } else if (formType === 'identification') {
      newForm.innerHTML = `
        <label for="question">Identification Question:</label>
        <input type="text" id="question" name="question">
        <br>
        <label for="answer">Answer:</label>
        <input type="text" id="answer" name="answer">
      `;
    }
    // Add the new form to the container
    document.getElementById('formContainer').appendChild(newForm);
  }
</script>
<button type="submit" class="btn">Save Quiz</button>
</body>
</html>