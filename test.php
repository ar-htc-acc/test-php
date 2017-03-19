<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <title>Welcome to this Page!</title>
</head>
<body>

<h3>Please complete this form to submit your feed back:</h3>
<form action="handle.php" method="post">
    <p>
        Name:
        <select name="title" required>
            <option value="Mr.">Mr.</option>
            <option value="Mrs.">Mrs.</option>
            <option value="Ms.">Ms.</option>
        </select>
        <input type="text" name="name" size="20" required>
    </p>
    <p>
        Email Address: <input type="email" name="email" size="20" required>
    </p>
    <p>
        Response: This is
        <input type="radio" name="response" value="excellent" required> excellent
        <input type="radio" name="response" value="okay" required> okay
        <input type="radio" name="response" value="boring" required> boring
    </p>
    Comments:
    <p>
        <textarea name="comments" rows="3" cols="30" required></textarea>
    </p>

    <input type="submit" name="submit" value="Send My Feedback">
</form>

</body>
</html>