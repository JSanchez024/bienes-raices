<main class="contenedor seccion">
        <h1>Mas Sobre Nosotros</h1>

        <?php include 'iconos.php' ?>
    </main>

    <section class="seccion contenedor">
        <h2>Casas y Depas en Venta</h2>

       <?php
            include 'listado.php';
       ?>

        <div class="alinear-derecha">
            <a href="/propiedades" class="boton-verde">Ver Todas</a>
        </div>
    </section>

    <section class="imagen-contacto">
        <h2>Encuentra la casa de tus sueños</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste quos nostrum obcaecati nam dicta nemo distinctio laboriosam rerum, illo optio error cum at nobis et asperiores accusamus. Optio, earum corporis?</p>
        <a href="/contacto" class="boton-amarillo">Contactanos </a>
    </section>

    <div class="contenedor seccion seccion-inferior">
        <section class="blog">
            <h3>Nuestro Blog</h3>

            <article class="entrada-blog">
                <div class="imagen">
                    <picture>
                        <source srcset="build/img/blog1.webp" type="image/webp">
                        <source srcset="build/img//blog1.jpg" type="image/jpeg">
                        <img  src="build/img/blog1.jpg" alt="Texto Entrada Blog" loading="lazy">
                </div>


                <div class="texto-entrada">
                    <a href="/entrada">
                        <h4>Terraza en el techo de tu casa</h4>
                        <p class="informacion-meta"> Escrito el: <span>20/10/2024</span> por: <span>Admin</span></p>
                        <p>
                            Consejo para construir una terraza en el techo de tu casa con los mejores materiales y ahorrando dinero
                        </p>
                    </a>
                </div>

            </article>

            <article class="entrada-blog">
                <div class="imagen">
                    <picture>
                        <source srcset="build/img/blog2.webp" type="image/webp">
                        <source srcset="build/img/blog2.jpg" type="image/jpeg">
                        <img  src="build/img/blog2.jpg" alt="Texto Entrada Blog" loading="lazy">
                    </picture>
                </div>

                <div class="texto-entrada">
                    <a href="/entrada">
                        <h4>Guia para decoracion de tu hogar</h4>
                        <p class="informacion-meta"> Escrito el: <span>20/10/2024</span> por: <span>Admin</span></p>
                        <p>
                            Maximiza el espacio de tu hogar con esta gui, aprende a cambiar muebles y colores para darle vida a tu espacio
                        </p>
                    </a>
                </div>

            </article>

        </section>

        <section class="testimoniales">
            <h3>testimoniales</h3>
            <div class="testimonial">
                <blockquote>
                    Lorem ipsum dolor sit amet consecdfsdfsd fsdfsdf eqe qeqwe qweqweqw eqweqwe  ores quibusdam, vero quis, aliquam suscipit sint laudantium quidem optio culpa soluta.
                </blockquote>
                <p>- Joaquin Sanchez -</p>
            </div>
        </section>
    </div>