<!-- math_form.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Math Operations</title>

</head>
<body>
    <div class="container">
        <h1>  Mathematical Calculator</h1>
        <form method="POST" action="process_math.php">
            <div class="form-group">
                <label>Number 1:</label>
                <input type="number" name="input1" required step="any">
            </div>

            <div class="form-group">
                <label>Number 2:</label>
                <input type="number" name="input2" required step="any">
            </div>

            <div class="form-group">
                <label>Operation:</label>
                <select name="operation" required>
                    <option value="add">➕  Addition</option>
                    <option value="sub">➖  Subtraction</option>
                    <option value="mul">✖ Multiplication</option>
                    <option value="div">➗  Division</option>
                </select>
            </div>

            <button type="submit">Calculate 🚀 </button>
        </form>
    </div>
</body>
</html>
