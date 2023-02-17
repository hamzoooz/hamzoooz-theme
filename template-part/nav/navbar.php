<?php 

?>

<!-- /container -->
<div class="container">
<nav class="navbar-header navbar navbar-expand-lg " style="background-color: #156580;" data-bs-theme="dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="<?php bloginfo("url") ?>"><?php bloginfo("name") ?></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <?php hamzoooz_bootstrap_menu() ?>
    </div>
  </div>
</nav>
</div><!-- /container -->