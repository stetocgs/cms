    <?php session_start ();?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Document</title>
    </head>
    <body>
    <?php if(PHP_SESSION_ACTIVE === session_status() && isset($_SESSION['my_data'])): ?>
        You are currently logged in as <b><?=$_SESSION['my_data']['username'];?></b>

        <form method="post" action="/logout">
            <button type="submit">Logout</button>
        </form>
    <?php endif;?>
    <?php require('nav.php'); ?>