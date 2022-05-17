<br>
<!-- Main News Start-->
<div class="main-news">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <h2>Actualités</h2>
                <hr class="double-dash">
                <div class="row">
                    <?php foreach ($listeActus as $actu) { ?>
                    <div class="card-news">
                        <div class="card-img">    
                            <img 
                                src="<?php echo upfile_url($actu['image']) ?>" 
                                alt="<?php echo $actu['titre'] ?>"
                                width="100%"
                                height ="auto"
                            />
                        </div>
                        <div class="card-content">
                            <h3 class="card-detail" title="<?php echo $actu['titre'] ?>"><?php echo $actu['titre'] ?></h3>
                            <span class="card-date">Par <?php echo $actu['nom_user']." ".$actu['prenom_user'] ?>, le <?php echo $actu['date_ajout'] ?></span>
                            <p class="card-detail"><?php echo $actu['resume'] ?></p>
                            <a href="<?php echo site_url($actu["nom_categorie"].'/'.$actu["url"].'-'.$actu["id"]) ?>">
                                <button class="card-read-more">Voir plus</button>
                            </a>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="mn-list">
                    <img 
                        src="<?php echo img_url('flyer.jpg') ?>" 
                        alt="flyer"
                        width="100%"
                        height ="auto"
                    >
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Main News End-->
<nav aria-label="Page navigation example">
  <ul class="pagination justify-content-center">
    <li class="page-item <?php if($pagination == 1) echo "disabled" ?>">
      <a class="page-link" href="<?php echo site_url('actualites/page/'.($pagination - 1)) ?>">Previous</a>
    </li>
    <li class="page-item">
      <a class="page-link" href="<?php echo site_url('actualites/page/'.($pagination + 1)) ?>">Next</a>
    </li>
  </ul>
</nav>