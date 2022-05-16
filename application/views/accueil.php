<!-- Top News Start-->
<div class="top-news">
    <div class="container">
        <div class="rubric-title">
            <h2>Evènements</h2>
            <button>Voir tout</button>
        </div>
        <hr class="double-dash">
        <div class="row">
            <div class="col-md-6 tn-left">            
                <div class="row tn-slider">
                    <div class="col-md-6">
                        <div class="tn-img">
                            <img src="img/news-450x350-1.jpg" />
                            <div class="tn-title">
                                <a href="">Lorem ipsum dolor sit amet</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="tn-img">
                            <img src="img/news-450x350-2.jpg" />
                            <div class="tn-title">
                                <a  href="">Integer hendrerit elit eget purus sodales maximus</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 tn-right">
                <div class="row">
                    <div class="col-md-6">
                        <div class="tn-img">
                            <img src="img/news-350x223-1.jpg" />
                            <div class="tn-title">
                                <a href="">Lorem ipsum dolor sit</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="tn-img">
                            <img src="img/news-350x223-2.jpg" />
                            <div class="tn-title">
                                <a href="">Lorem ipsum dolor sit</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="tn-img">
                            <img src="img/news-350x223-3.jpg" />
                            <div class="tn-title">
                                <a href="">Lorem ipsum dolor sit</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="tn-img">
                            <img src="img/news-350x223-4.jpg" />
                            <div class="tn-title">
                                <a href="">Lorem ipsum dolor sit</a>
                            </div>
                        </div>
                    </div>
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
                    <h2>Actualités</h2>
                    <button>Voir tout</button>
                </div>
                <hr class="double-dash">
                <div class="row">
                    <?php for ($i=0; $i < 5; $i++) { ?>
                    <div class="card-news">
                        <div class="card-img">    
                            <img src="img/news-350x223-1.jpg" title="Lorem ipsum dolor sit " />
                        </div>
                        <div class="card-content">
                            <h3 class="card-detail" title="Rechauffement climatique Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aliquid, assumenda.">Rechauffement climatique Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aliquid, assumenda.</h3>
                            <span class="card-date">12 Mai 2022, 14:38</span>
                            <p class="card-detail">Lorem ipsum, dolor sit amet consectetur, adipisicing elit. Autem dolor culpa illo suscipit quas sequi doloribus harum mollitia consequatur totam? Velit, fugiat fuga vel sapiente numquam omnis voluptatibus. Provident, praesentium.</p>
                            <a href="huhu"><button class="card-read-more">Voir plus</button></a>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="mn-list">
                    huhu
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Main News End-->