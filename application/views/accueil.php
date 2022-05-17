<!-- Top News Start-->
<div class="top-news">
    <div class="container">
        <div class="rubric-title">
            <h1>Evènements</h1>
            <button><a href="<?php echo site_url('evenements') ?>">Voir tout</a></button>
        </div>
        <hr class="double-dash">
        <div class="row">
            <div class="col-md-6 tn-left">            
                <div class="row tn-slider">
                    <?php foreach ($listeEvents as $event) { ?>
                    <div class="col-md-12">
                        <div class="tn-img">
                            <img 
                                src="<?php echo upfile_url($event['image']) ?>" 
                                alt="<?php echo $event['titre'] ?>"
                            />
                            <div class="tn-title">
                                <a href="<?php echo site_url($event["nom_categorie"].'/'.$event["url"].'-'.$event["id"]) ?>"><?php echo $event['titre'] ?></a>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Top News End-->
<br>
<!-- Main News Start-->
<div class="main-news">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="rubric-title">
                    <h1>Actualités</h1>
                    <button><a href="<?php echo site_url('actualites') ?>">Voir tout</a></button>
                </div>
                <hr class="double-dash">
                <div class="row">
                    <?php foreach ($listeActus as $actu) { ?>
                    <div class="card-news">
                        <div class="card-img">    
                            <img 
                                src="<?php echo upfile_url($actu['image']) ?>" 
                                alt="<?php echo $actu['titre'] ?>"
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
                    <img src="<?php echo img_url('flyer.jpg') ?>" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Main News End-->