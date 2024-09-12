<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Styled Form</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        h1 {
            text-align: center;
            color: #333;
            padding: 20px;
            margin: 0;
        }

        form {
            max-width: 600px;
            margin: 30px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        form input[type="text"] {
            width: 100%;
            padding: 10px;
            margin-top: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
            font-size: 16px;
        }

        form input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 18px;
            cursor: pointer;
        }

        form input[type="submit"]:hover {
            background-color: #45a049;
        }

        label {
            font-size: 16px;
            color: #333;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <h1>This is a Form to Add Details to Dashboard</h1>
    <form action="Dashbord.php" method="get">
        <label for="title">Enter Title:</label>
        <input type="text" id="title" name="title" placeholder="Enter title here" required><br>

        <label for="aboutme">Enter About Yourself:</label>
        <input type="text" id="aboutme" name="aboutme" placeholder="Describe yourself" required><br>

        <label for="skill">Enter Your Skillset:</label>
        <input type="text" id="skill" name="skill" placeholder="Your skills" required><br>

        <label for="skill">Enter Your Task1 Git hub Link:</label>
        <input type="text" id="skill" name="task1" placeholder="Task 1 Link" required><br>


        <input type="submit" value="Submit">
    </form>
</body>
</html>
