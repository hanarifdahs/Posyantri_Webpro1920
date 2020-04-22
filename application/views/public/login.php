<html>
<head>
</head>
<body>
    <?php if ($this->session->flashdata('flash')) : ?>
    <h4><?php echo $this->session->flashdata('flash'); ?></h4>
    <?php endif; ?>
    <form method="post" action="actionLogin">
        <h2>Login</h2>
        <input type="text" id="username" name="username" placeholder="Username"><br>
        <input type="password" id="password" name="password" placeholder="Password"><br>
        <input type="submit" value="Login" name="submit">
    </form>
</body>
</html>