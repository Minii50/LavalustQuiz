<!-- application/views/view_form.php -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Form</title>

    <style>
        h2 {
            text-align: center;
        }
    </style>
</head>

<body>
    <h2>Welcome to your Form</h2>

    <?php foreach ($questions as $question): ?>
        <div>
            <p><?php echo htmlspecialchars($question['quiz_question']); ?></p>
            <!-- Display other question details here -->
        </div>
    <?php endforeach; ?>

</body>

</html>
