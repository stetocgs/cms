<?php require ('partials/head.php'); ?>
<!---->
<!---->
<!--    --><?php //if(session_status () == PHP_SESSION_ACTIVE && !(\App\Core\App::isLogged())): ?>
<!---->
<!--    <h1>Log into your account</h1>-->
<!--    <h2>--><?//= $loginStatus ?? ''; ?><!--</h2>-->
<!--        <form method="POST" action="/login">-->
<!--            <td align="right"><br><b>Username: </b> </td><td align="left"><input name="username"></td>-->
<!--            <td align="right"><br><b>Password: </b> </td><td align="left"><input name="password" type="password"></td>-->
<!--            <br><button type="submit">Login</button>-->
<!--        </form>-->
<!--    --><?php //else: ?>
<!--        <h2> Login successful! </h2>-->
<!--    --><?php //endif; ?>
<!---->

<?php html_view('login') ?>

<?php require ('partials/footer.php'); ?>

