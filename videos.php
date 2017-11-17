<?php
/**
 * Template Name: videos
 *
 * @package Moocable
 */

get_header(); ?>



    <div class="container">
        <div class="row">
            <div class="col-xs-12 text-center">
                <h2>Qu'est ce que cette plateforme ?</h2>
                <h4>Tu souhaiterai en savoir d'avantage sur le fonctionnement des MOOCs, c'est par ici !</h4>
                <br>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-8 col-sm-offset-2">
                <div id="random_number1" class="carousel slide youtube-carousel"  data-ride="carousel" data-interval="false">
                    <div class="carousel-inner">
                        <div class="video-container item active">
                            <div class="youtube-video" id='iOFzaYDgZzk'></div>
                            <div class="carousel-caption">Qu'est ce qu'un MOOC ? 1/6</div>
                        </div>
                        <div class="video-container item">
                            <div class="youtube-video" id='nZI5X1MqpUw'></div>
                            <div class="carousel-caption">Lintérêt des MOOCs ? 2/6</div>
                        </div>
                        <div class="video-container item ">
                            <div class="youtube-video" id='TtrjdQS3VyU'></div>
                            <div class="carousel-caption">Qu'est ce que la certification ? 3/6</div>
                        </div>
                        <div class="video-container item ">
                            <div class="youtube-video" id='Ia1LU53WJuM'></div>
                            <div class="carousel-caption">La substitution 4/6</div>
                        </div>
                        <div class="video-container item ">
                            <div class="youtube-video" id='gBrHorQNZLk'></div>
                            <div class="carousel-caption">Les rattrapages 5/6</div>
                        </div>
                        <div class="video-container item ">
                            <div class="youtube-video" id='1cfTpIBCUFY'></div>
                            <div class="carousel-caption">Le soutien 6/6</div>
                        </div>
                    </div>
                    <div class="controls">
                        <a class="left carousel-control" href="#random_number1" data-slide="prev">
                            <div class="left-button">
                                <div class="glyphicon glyphicon-chevron-left"></div>
                            </div>
                        </a>
                        <a class="right carousel-control" href="#random_number1" data-slide="next">
                            <div class="right-button">
                                <div class="glyphicon glyphicon-chevron-right"></div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php
get_footer();
