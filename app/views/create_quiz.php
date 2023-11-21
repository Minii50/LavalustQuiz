<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz Form</title>

    <style>
        .subcomment{
            font-size: 15px;
        }

        input[type=text], select, textarea {
            width: 100%;
            padding: 12px;
            border: 1px solid #ccc;
            box-sizing: border-box;
            margin-top: 6px;
            margin-bottom: 16px;
            resize: vertical;
        }
        button {
            background-color: #4CAF50;
            color: white;
            padding: 12px 20px;
            border: none;
            cursor: pointer;
            float: left;
            }

        button:hover {
            background-color: #45a049;
            }
    </style>
</head>
<body>
    <h1 style="text-align: center">Create Your Own Quiz!</h1>
    <h2>Note:<p class="subcomment">(Optional)</p></h2>
    <textarea id="note" name="note" placeholder="Write your note.."></textarea><br>
    
    <div>
    <form action="post" id="formContainer">
    <label for="question">Question</label>
    <input type="text" name="question" id="question" placeholder="Enter question..."> 
    <label for="selecttype">Answer Type</label>
    <select name="selecttype" id="formType">
        <option>--Select Option--</option>
        <option value="multiplechoice">Multiple Choice</option>
        <option value="identification">Identification</option>
        <option value="checkbox">Check Box</option>
    </select>
    </form>
    <button onclick="addForm()" class="btnadd">Add Question</button><br><br><br><br>
    <button type="submit" class="btn">Save Quiz</button>
    </div>
    
    <script>
        function addForm(){
            var original = document.querySelector('form');
            var cloned = original.cloneNode(true);

            document.getElementById('formContainer').appendChild(cloned);
        }

        function addc
    </script>
</body>
</html>