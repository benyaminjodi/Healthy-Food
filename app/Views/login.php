<html>

<body>
    <h2>Login</h2>
    <form action="<?= base_url('login_action') ?>" method="POST">
        <input type="email" name="email" placeholder="Email">
        <input type="password" name="password" placeholder="Password">
        <button type="submit">Sign in</button>
    </form>
</body>

</html>