<?php include(__DIR__ . '/inc/header.php'); ?>

<div class="row">
    <div class="col-md-12">
      <div class="card border-0">
        <div class="card-body">
          <h1 class="card-title fw-bold fs-4 text-start">Headhunter</h1>
          <p>In case you are a headhunter and you want to contact me you need to solve the following challenge, otherwise
            I will be not able to answer your email.</p>

          <p>As challenge you only need to send an HTTP POST request to this <a href="https://chrisk.app/headhunter">URL</a>
            containing an HTTP header <code>X-Acknowledge: yes</code>. As response you will get a JSON Web Token which you
            can simply copy and paste to the bottom of your mail.</p>

          <p>Email: <img src="<?php echo $base; ?>/img/contact.png"></p>
        </div>
      </div>
    </div>
</div>

<?php include(__DIR__ . '/inc/footer.php'); ?>
