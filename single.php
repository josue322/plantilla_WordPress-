<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <head>
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    </head>


    <title>Document</title>
</head>

<body>
    <?php
    include ("header.php");
    ?>
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">

                <div class="container mt-5">
                    <div class="row">
                        <?php
                        if (have_posts()):
                            while (have_posts()):
                                the_post();

                                ?>
                                <div class="col-md-6" style="height:450px;">
                                    <?php
                                    if (has_post_thumbnail()) {
                                        the_post_thumbnail('full', array('class' => 'card-img-top img-fluid w-100 h-100'));
                                    }
                                    ?>
                                </div>
                                <div class="col-md-6">
                                    <h2><?php the_title() ?></h2>
                                    <hr>

                                    <div class="prices mb-3">
                                        <h3><?php the_content(); ?></h3>
                                        <hr>
                                        <h3 class="text-danger">Precio actual: <?php the_excerpt(); ?></h3>
                                        <hr>
                                        <span class="badge bg-danger">Oferta</span>
                                    </div>
                                    <div class="d-flex align-items-center mb-3">
                                        <button class="btn btn-outline-secondary me-2" onclick="restar_cantidad()">-</button>
                                        <input type="number" class="form-control text-center" value="1" style="width: 60px;"
                                            id="cantidad">
                                        <button class="btn btn-outline-secondary ms-2" onclick="agregar_cantidad();">+</button>
                                    </div>
                                    <button class="btn btn-dark w-100">Agregar al carro</button>
                                    <div class="prices mb-3">
                                        <h3><i class="fas fa-user"></i> Usuario: <?php the_author(); ?></h3>
                                        <h3><i class="fas fa-calendar-alt"></i> Fecha: <?php the_date(); ?></h3>
                                        <h3><i class="fas fa-tags"></i> Categoría:
                                            <?php
                                            $categories = get_the_category();
                                            if (!empty($categories)) {
                                                echo esc_html($categories[0]->name);
                                            }
                                            ?>
                                        </h3>
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
    include ("footer.php");
    ?>

    <script>

        function agregar_cantidad() {
            var cantidad_actual = document.getElementById('cantidad').value;
            var cantidad_nueva = parseInt(cantidad_actual) + 1;
            document.getElementById('cantidad').value = cantidad_nueva;
            console.log(cantidad_nueva);
        }

        function restar_cantidad() {
            var cantidad_actual = document.getElementById('cantidad').value;
            var cantidad_nueva = parseInt(cantidad_actual) - 1;
            if (cantidad_nueva >= 1) {
                document.getElementById('cantidad').value = cantidad_nueva;
                console.log(cantidad_nueva);
            }
        }


    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>