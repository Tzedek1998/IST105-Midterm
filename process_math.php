<?php
// process_math.php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $input1 = escapeshellarg($_POST['input1']);
    $input2 = escapeshellarg($_POST['input2']);
    $operation = escapeshellarg($_POST['operation']);

    // Construct the command safely
    $command = "python3 /var/www/html/math_operations.py $input1 $input2 $operation 2>&1";
    
    // Execute the command and capture output
    $result = shell_exec($command);

    echo '<!DOCTYPE html>
    <html>
    <head>
        <title>Result</title>
    </head>
    <body>
        <div class="container">
            <h1>Calculation Result</h1>
            <div class="result-container">' . htmlspecialchars($result) . '</div>
            <a href="math_form.php" style="display: block; text-align: center; margin-top: 20px;">← Back to Calculator</a>
        </div>
    </body>
    </html>';
}
?>
