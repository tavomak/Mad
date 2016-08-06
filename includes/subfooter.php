<?php tha_footer_before(); ?>
<div class="container-fluid wrap-footer">
    <div class="row">
        <?php dynamic_sidebar('footer-widget-area'); ?>
    </div>
    <footer class="container-fluid site-footer">
        <?php tha_footer_top(); ?>
            <div id="bordertop-footer" class="container-fluid">
                <div class="col-sm-6 col-md-3">
                    <div id="borderright-footer">
                        <h2>NOSOTROS</h2>
                        <a href="#">
                            <p>Galería Mendoza</p>
                        </a>
                        <a href="#">
                            <p>Comprayvendearte.com</p>
                        </a>
                        <a href="#">
                            <p>Mendoza Real Estates</p>
                        </a>
                        <a href="#">
                            <p>Fund. Activistas de la felicidad</p>
                        </a>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div id="borderright-footer">
                        <h2>ALIADOS</h2>
                        <a href="#">
                            <p>GAAG</p>
                        </a>
                        <a href="#">
                            <p>Efracsis RevizineE</p>
                        </a>
                        <a href="#">
                            <p>La ONG</p>
                        </a>
                        <a href="#">
                            <p>Nodocss</p>
                        </a>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3  visible-sm visible-md visible-lg">
                    <div class="social">
                        <h2>SOCIAL</h2>
                        <a href="https://www.facebook.com/espaciomad/?fref=ts" target="_blank">
                            <span class="icon-facebook facebook fl"></span><p>Facebook</p>
                        </a>
                        <a href="https://www.instagram.com/espaciomad/">
                            <span class="icon-instagram instagram fl"></span><p>Instagram</p>
                        </a>
                        <a href="#">
                            <span class="icon-twitter twitter fl"></span><p>Twitter</p>
                        </a>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3 visible-sm visible-md visible-lg">
                    <div class="pago ">
                        <h4 class="text-right">Aceptamos pago con:</h4>
                        <ul>
                            <li> <img src="<?php bloginfo('template_directory'); ?>/img/pagos.jpg" alt="MercadoPago"></li>
                        </ul>
                    </div>
                </div>
            </div>
            <hr/>
            <div class="row text-center">
                <div class="col-lg-12 site-sub-footer">
                    <ul class="list-inline">
                        <li >
                            <p class="copy">&copy; <?php echo date('Y'); ?>, Todos los derechos reservados.</p>
                        </li>
                        <li class="list-inline">
                           <a href="http://estelaestudio.com/">
                                <p class="est">Designed and coded by</p>
                            </a>
                        </li>
                        <li class="list-inline">
                           <a href="http://estelaestudio.com/">
                                <img class="" src="<?php bloginfo('template_directory'); ?>/img/estela-logo.png" onmouseover="this.src='<?php bloginfo('template_directory'); ?>/img/estela-logo-hover.png'" onmouseout="this.src=' <?php bloginfo('template_directory'); ?>/img/estela-logo.png '" alt="Estela estudio de diseño">
                           </a>
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
                            <?php echo do_shortcode( '[contact-form-7 id="1865" title="Contact form 1"]' ); ?>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <h3 class="modal-tittle text-center">SOCIAL</h3>
                        <div id="social-media">
                            <div class="text-center">
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
