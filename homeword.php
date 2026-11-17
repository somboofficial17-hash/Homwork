<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div>
        <div class="div">
            <h1>Registration Information</h1>
            <form action="homeword.php" method="POST">
                <label for="StudentId"><b>StudentId :</b></label>
                <input type="text" name="Id" id="StudentId">
                <br><br>
                <label for="StudentName"><b>StudentName :</b></label>
                <input type="text" name="StudentName" id="StudentName">
                <br><br>
                <label for="Gender"><b>Gender :</b></label>
                <label for="Gender">Male</label>
                <input type="radio" name="Gender" id="Gender" value="Male">
                <label for="Gender">Female</label>
                <input type="radio" name="Gender" id="Gender" value="Female">
                <label for="Gender"><b>Other</b></label>
                <input type="radio" name="Gender" id="Gender" value="Other">
                <br><br>
                <label for="age"><b>Age :</b></label>
                <input type="text" name="age" id="age">
                <br><br>
                <label for="coursce"><b>Coursce :</b></label>
                <input type="text" name="coursce" id="coursce">
                <br><br>
                <input type="submit" value="Create" type="button">
            </form>
        </div>
    </div>

    <?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){

    echo"
    <div class='phpc'>
        <table>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Gender</th>
                <th>Age</th>
                <th>Course</th>
            </tr>
            <tr>
                <td>{$_POST["Id"]}</td>
                <td>{$_POST["StudentName"]}</td>
                <td>{$_POST["Gender"]}</td>
                <td>{$_POST["age"]}</td>
                <td>{$_POST["coursce"]}</td>
            </tr>
        </table>
    </div>
    
    ";
    }
   

    ?>
</body>

</html>