<!-- Single News Start-->
<div class="single-news">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="sn-container">
                    <div class="sn-img">
                        <img 
                            src="<?php echo upfile_url($actu['image']) ?>"
                            alt="<?php echo $actu['titre'] ?>"
                        />
                    </div>
                    <div class="sn-content">
                        <span class="card-date" style="font-size:12px;color:gray;">Par <?php echo $actu['nom_user']." ".$actu['prenom_user'] ?>, le <?php echo $actu['date_ajout'] ?></span>
                        <h1 class="sn-title"><?php echo $actu['titre'] ?></h1>
                        <p><b><?php echo $actu['resume'] ?></b></p>
                        <br>
                        <p><?php echo $actu['contenu'] ?></p>
                    </div>
                </div>
                <div class="sn-related">
                    <h2>Lire aussi</h2>
                    <div class="row sn-slider">
                        <div class="col-md-4">
                            <div class="sn-img">
                                <img src="img/news-350x223-1.jpg" />
                                <div class="sn-title">
                                    <a href="">Interdum et fames ac ante</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="sn-img">
                                <img src="img/news-350x223-2.jpg" />
                                <div class="sn-title">
                                    <a href="">Interdum et fames ac ante</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="sn-img">
                                <img src="img/news-350x223-3.jpg" />
                                <div class="sn-title">
                                    <a href="">Interdum et fames ac ante</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="sn-img">
                                <img src="img/news-350x223-4.jpg" />
                                <div class="sn-title">
                                    <a href="">Interdum et fames ac ante</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="sidebar">
                    <img src="<?php echo img_url('flyer.jpg') ?>" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Single News End--> 