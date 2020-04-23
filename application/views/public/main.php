<html>
<head>
</head>
<body>
    <h1>Ini website</h1>
    <a href="<?php echo base_url()?>Main/showLogin"><button>Login</button></a>
    <?php if ($this->session->flashdata('flash')) : ?>
    <?= $this->session->flashdata('flash'); ?>
    <?php endif; ?>
</body>
</html>