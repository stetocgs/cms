<nav>
    <ul>
        <li><a href="/">Home</a></li>
        <li><a href="/about">About</a></li>
        <li><a href="/contact">Contact</a></li>
        <?php if (\App\Controllers\UsersController::isLogged ()): ?>
            <?php if (\App\Controllers\UsersController::isAdmin ()): ?>
                <li><a href="/users">Manage Users</a></li>
            <?php endif; ?>
        <?php else: ?>
            <li><a href="/register">Register</a></li>
            <li><a href="/login">Login</a></li>
        <?php endif; ?>
    </ul>
</nav>