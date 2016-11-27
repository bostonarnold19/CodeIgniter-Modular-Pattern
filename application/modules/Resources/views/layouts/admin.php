<!DOCTYPE html>
<html>
    <head>
        <? $this->load->view('partials/admin/_head') ?>
    </head>
    <body>
        <div id="wrapper">
            <? $this->load->view('partials/admin/_nav') ?>
            <div id="page-wrapper">
                <div class="container-fluid">
                    <? $this->load->view($data['yield']) ?>
                </div> <!-- container-fluid -->
            </div> <!-- page-wrapper -->
        </div> <!-- wrapper -->
        <? $this->load->view('partials/admin/_javascript') ?>
    </body>
</html>