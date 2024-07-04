<?php
get_header();
?>

<div class="main-content">
    <div class="page-content">
        <div class="container-fluid"><br><br>
            <b>
                <marquee behavior="scroll" direction="left" style="color: black; font-size: 30px;">
                    ¡OFERTA ESPECIAL POR TIEMPO LIMITADO! 20% DE DESCUENTO EN TODOS LOS PRODUCTOS DE LA TIENDA.
                    ¡Aprovecha ya!
                </marquee>
            </b><br><br>
 
            <!-- Left Sidebar End 
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-3">
                        <a href="https://www.cervezacorona.com.pe/" target="_blank">
                            <img src="<?php bloginfo('template_url'); ?>/imagenes/carrusel/55461f67573987.5b3e3e1ba4293.jpg"
                                class="img-fluid" alt="Publicidad">
                        </a>
                    </div>

                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-body">
                                <?php ?>
                                <h4 class="card-title text-center">¡Lo más destacado de la semana!</h4>
                                <p class="card-subtitle mb-4 text-center">Consigue tus ofertas ya!!</p>

                                <div id="carouselExampleCaption" class="carousel slide" data-ride="carousel">
                                    <div class="carousel-inner" role="listbox">
                                        <div class="carousel-item active">
                                            <a href="tecnologia.html">
                                                <img src="<?php bloginfo('template_url'); ?>/imagenes/carrusel/HP-BANNERDESTACADO-NF-PP-D-COLCHONES-29-ABR-05-MAY-1-B.webp"
                                                    alt="..." class="d-block img-fluid">
                                            </a>
                                        </div>
                                        <div class="carousel-item">
                                            <a href="tecnologia.html">
                                                <img src="<?php bloginfo('template_url'); ?>/imagenes/carrusel/HP-BANNERDESTACADO-NF-PP-D-LINEA-BLANCA-29-ABR-05-MAY-3.webp"
                                                    alt="..." class="d-block img-fluid">
                                            </a>
                                        </div>
                                        <div class="carousel-item">
                                            <a href="tecnologia.html">
                                                <img src="<?php bloginfo('template_url'); ?>/imagenes/carrusel/HP-BANNERDESTACADO-NF-PP-D-VIDEO-29-ABR-05-MAY-2.webp"
                                                    alt="..." class="d-block img-fluid">
                                            </a>
                                        </div>
                                    </div>
                                    <a class="carousel-control-prev" href="#carouselExampleCaption" role="button"
                                        data-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="carousel-control-next" href="#carouselExampleCaption" role="button"
                                        data-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3">
                        <a href="https://www.mcdonalds.com.pe/" target="_blank">
                            <img src="<?php bloginfo('template_url'); ?>/imagenes/carrusel/desktop_4bab4107-7161-49f8-8ae4-ae602ab64145.jpg"
                                class="img-fluid" alt="Publicidad">
                        </a>
                    </div>

                </div>
            </div>
            -->



            <div class="container-fluid">
                <div class="row">
                    <?php
                    if (have_posts()):
                        while (have_posts()):
                            the_post();

                            ?>
                            <div class="col-md-4">
                                <div class="card">
                                    <a href="<?php the_permalink(); ?>" style="height:300px;"><?php
                                    if (has_post_thumbnail()) {
                                        the_post_thumbnail('thumbnail', array( 'class' => 'card-img-top img-fluid w-100 h-100' ));
                                    }
                                    ?></a>
                                    <img class="card-img-top img-fluid"
                                        src="<?php bloginfo('template_url'); ?>" alt="">
                                    <div class="card-body">
                                        <h5 class="card-title"><?php the_title() ?></h5>
                                        <p class="card-text"><?php the_excerpt() ?></p>
                                        <h5 class="card-title">200.$</h5>
                                    </div>
                                </div>
                            </div>
                            <?php
                        endwhile;
                    else:
                        _e('Nose encontraron productos en la categoria seleccionada', 'textdomain');
                    endif;
                    ?>
                </div>
            </div>
        </div>
    </div>

    <?php
    get_footer();
    ?>