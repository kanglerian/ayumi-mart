<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Users</title>
</head>
<body>
    <div>
        <form action="<?= base_url('users/registration')?>" method="post">
            <div>
                <label>Email:</label>
                <input type="email" name="email" placeholder="Type your email in here..">
            </div>
            <div>
                <label>Username:</label>
                <input type="text" name="username" placeholder="Type your username in here..">
            </div>
            <div>
                <label>Password:</label>
                <input type="password" name="password" placeholder="Type your password in here..">
            </div>
            <button type="submit">Tambah</button>
        </form>
    </div>
</body>
</html>