<?php tha_footer_before(); ?>
<div class="container-fluid wrap-footer">
    <div class="row">
        <?php dynamic_sidebar('footer-widget-area'); ?>
    </div>
    <footer class="container-fluid site-footer">
        <?php tha_footer_top(); ?>
            <div id="bordertop-footer" class="container-fluid">
                <div class="col-sm-3">
                    <div id="borderright-footer">
                        <h2>NOSOTROS</h2>
                        <a href="#">
                            <p>GALERÍA MENDOZA</p>
                        </a>
                        <a href="#">
                            <p>COMPRATVENDEARTE.COM</p>
                        </a>
                        <a href="#">
                            <p>MENDOZA REAL ESTATES</p>
                        </a>
                        <a href="#">
                            <p>FUND. ACTIVISTAS DE LA DELICIDAD</p>
                        </a>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div id="borderright-footer">
                        <h2>ALIADOS</h2>
                        <a href="#">
                            <p>GAAG</p>
                        </a>
                        <a href="#">
                            <p>EFRACSIS REVIZINE</p>
                        </a>
                        <a href="#">
                            <p>LA ONG</p>
                        </a>
                        <a href="#">
                            <p>NODOCCS</p>
                        </a>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="social">
                        <h2>SOCIAL</h2>
                        <a href="https://www.facebook.com/espaciomad/?fref=ts" target="_blank">
                            <p>FACEBOOK <span class="icon-facebook facebook"></span></p>
                        </a>
                        <a href="#">
                            <p>INSTAGRAM<span class="icon-instagram instagram"></span></p>
                        </a>
                        <a href="#">
                            <p>TWITTER<span class="icon-twitter twitter"></span></p>
                        </a>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="pago ">
                        <h3>Aceptamos pago con:</h3>
                        <ul>
                            <li> <img src="<?php bloginfo('template_directory'); ?>/img/pagos.jpg" alt="MercadoPago"></li>
                            <!--li img(src="", alt="Visa-MasterCard")
        -->
                            <!--li img(src="", alt="PayPal")
        -->
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <?//php dynamic_sidebar('footer-widget-area'); ?>
            </div>
            <hr/>
            <div class="row text-center">
                <div class="col-lg-12 site-sub-footer">
                    <ul class="list-inline">
                        <li class="list-inline">
                            <p class="copy">&copy; <?php echo date('Y'); ?>, Todos los derechos reservados.</p>
                        </li>
                        <li class="list-inline">
                            <p class="est">Designed and coded by</p>
                        </li>
                        <li class="list-inline">
                            <img class="" src="<?php bloginfo('template_directory'); ?>/img/estela-logo.png" alt="Estela estudio de diseño">
                        </li>
                    </ul>
                </div>
            </div>
            <?php tha_footer_bottom(); ?>
    </footer>
    <!--Formulario de contactanos (Modal)-->
    <div class="contacto">
        <div id="escribenos" tabindex="-1" role="dialog" class="modal fade">
            <div role="document" class="modal-dialog modal-lg">
                <div id="modalbox" class="modal-content">
                    <div class="modal-header">
                        <button type="button" data-dismiss="modal" aria-label="Cerrar" class="close"><span aria-hidden="true">&times;</span></button>
                        <h3 class="modal-tittle text-center">ESCRIBENOS</h3> </div>
                    <div class="modal-body">
                        <form>
                            <div class="form-group">
                                <label for="form-nombre" class="sr-only">Nombre</label>
                                <input id="form-nombre" type="text" placeholder="Nombre" class="form-control"> </div>
                            <div class="form-group">
                                <label for="form-email" class="sr-only">Email</label>
                                <input id="form-email" type="email" placeholder="Email" class="form-control"> </div>
                        </form>
                        <form>
                            <div class="form-group">
                                <label class="sr-only">Texto</label>
                                <textarea placeholder="Texto" rows="8" class="form-control"></textarea>
                            </div>
                        </form>
                        <div class="row">
                            <div class="col-sm-6 col-sm-offset-3">
                                <button type="button" data-dismiss="modal" class="btn btn-contacto">ENVIAR</button>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <h3 class="modal-tittle text-center">SOCIAL</h3>
                        <div id="social-media">
                            <div class="col-sm-6 col-sm-offset-3 col-xs-8 col-xs-offset-2">
                                <ul>
                                    <li><a href="https://www.facebook.com/espaciomad/"><span class="icon-facebook2"></span></a></li>
                                    <li><a href="#"><span class="icon-instagram"></span></a></li>
                                    <li> <a href="#"><span class="icon-twitter"></span></a></li>
                                    <li><a href="#"><span class="icon-youtube"> </span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php tha_footer_after(); ?>
<?php wp_footer(); ?>
<?php tha_body_bottom(); ?>
