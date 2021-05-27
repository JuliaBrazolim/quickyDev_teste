<?php require_once 'config.php'; ?>
<?php include(HEADER_TEMPLATE); ?>
<div class="container">

<section class="mx-auto d-block text-center my-4">
<form id="searchMovie" class="form-inline mr-5 mx-auto d-block">
  <h6 class="text-center pb-3">Digite um título ou gênero de filme e dê <i>enter</i>:</h6>
    <input class="form-control" type="text" id="searchTitle" placeholder="Exemplo: Hulk" aria-label="Search">
</form>
</section>

  <div class="album row py-5" id="movies"></div>
</div>
<?php include(FOOTER_TEMPLATE); ?>
