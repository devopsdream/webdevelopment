<!doctype html>
<html>
<head>
    <title>Compcity - SignUp</title>

    <meta charset="utf-8" />
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
</head>

<body>
<form action="process_form.php" method="POST">
<fieldset>
    <legend>Personal Information</legend>
    <label>FirstName:<input type="text" name="firstname" size="20" maxlength="40"></label><br>
    <label>LastName:<input type="text" name="lastname" size="20" maxlength="40"></label><br>
    <label>Gender:</label><input type="radio" name="gender" value="M">Male
    <input type="radio" name="gender" value="F">Female<br>
    <label>Age:<select name="age"><option value="0-18">Over 18</option>
    <option value="0-17">Under 18</option></select></label><br>
    <p>Comments:</p>
    <textarea name="comments"cols="30" rows="10"></textarea>
    <p align="center"><input type="submit" value="Submit My Information"></p>
</fieldset>
</form>
</body>
</html>
