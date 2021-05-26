<?php require_once 'config.php'; ?>
<?php include(HEADER_TEMPLATE); ?>
<div class="container">
    <div class="album py-5">
        <div class="row">
            <div class="col-md-4" v-for="postagem in filteredList">
                <div class="card card-films mb-4 box-shadow">
                    <img class="card-img-top" src="https://i.ebayimg.com/images/g/s4wAAOSwpeFeqc5N/s-l1600.jpg">
                    <div class="card-body">
                      <a class="link-cosmos" v-bind:href="postagem.link">
                        <h5 class="card-title text-left">{{ nome do filme }}</h5>
                      </a>
                      <p class="card-text text-justify">{{ sinopse }}</p>
                      <p class="card-text text-justify">{{ data de lançamnto }}</p>
                      <small class="text-success">{{ genero }}</small>
                  </div>
                  <a v-bind:href="postagem.link" class="btn btn-outline-warning">Saiba mais!</a>
                </div>
              </div>
            </div>
          </div>
</div>
<?php include(FOOTER_TEMPLATE); ?>