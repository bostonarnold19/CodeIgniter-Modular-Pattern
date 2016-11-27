<!DOCTYPE html>
<html>
    <head>
        <?php $this->load->view('partials/main/_head') ?>
    </head>
    <body>
        <?php $this->load->view('partials/main/_nav') ?>
        <?php $this->load->view('partials/main/_nav_mobile') ?>
        <div class="container">
            <?php $this->load->view('partials/main/_messages') ?>
            <?php $this->load->view($yield) ?>
        </div> <!-- container -->
        <?php $this->load->view('partials/main/_footer') ?>
        <?php $this->load->view('partials/main/_javascript') ?>
    </body>
</html>