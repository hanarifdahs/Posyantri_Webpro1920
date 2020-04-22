<html>
<head>
</head>
<body>
    <h1>Ini PASIEN/MAIN</h1>
    <a href="<?php echo base_url()?>cPasien/logout"><button>Logout</button></a>
    <?php if ($this->session->flashdata('flash')) : ?>
    <?= $this->session->flashdata('flash'); ?>
    <?php endif; ?>
</body>
</html>