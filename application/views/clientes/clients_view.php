<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="pt-BR">
<?php $this->load->view('_partials/head'); ?>

<body>
    <?php $this->load->view('_partials/header'); ?>
    <div class="container container-person mt-5 p-5">
        <?= write_message() ?>
        <h1> Hello World </h1>
    </div>
</body>