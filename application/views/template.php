<?php $this->load->view('header'); ?>
<?php $this->load->view('menu'); ?>

<div class="my-3 my-md-5">
    <div class="container">
        <div class="page-header">
          <h1 class="page-title">
            <?php echo $title; ?>
          </h1>
        </div>
        <?php $this->load->view($content); ?>
    </div>
</div>

<?php $this->load->view('footer'); ?>