<!-- html -->
<!DOCTYPE html>
<html>

<head>
    <title>
        Register form
    </title>
</head>

<body>

    <form method="POST" action="<?php echo site_url('/insert'); ?>">
        <label for="name">name</label>
        <input type="text" name="name" id="name">
        <br>
        <label for="email">email</label>
        <input type="email" name="email" id="email">
        <br>
        <label for="password">Confirm Password</label>
        <input type="password" name="password" id="password">
        <br>
        <input type="submit" value="Register">
    </form>
</body>

</html>