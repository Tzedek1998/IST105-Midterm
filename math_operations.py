# math_operations.py
import sys
import json

# Retrieve inputs
input1 = float(sys.argv[1])
input2 = float(sys.argv[2])
operation = sys.argv[3]

result = None
error = None

try:
    if operation == "add":
        result = input1 + input2
    elif operation == "sub":
        result = input1 - input2
    elif operation == "mul":
        result = input1 * input2
    elif operation == "div":
        if input2 == 0:
            error = "Error: Division by zero!"
        else:
            result = input1 / input2
    else:
        error = "Invalid operation!"
    
    # Apply additional conditions
    if result is not None:
        if result > 100:
            result *= 2
        elif result < 0:
            result += 50
        
except Exception as e:
    error = str(e)

# Generate HTML output
if error:
    output = f"<div style='color: red;'>{error}</div>"
else:
    output = f"<div>Result: {result:.2f}</div>"

print(output)