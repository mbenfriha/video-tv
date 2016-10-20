<div class="footer">
    <div class="logo-footer">
        <div class="img-logo-footer">


            <?php
            if (get_option( 'top_logo', ''))
                echo '<img src="'.get_option( 'footer_logo', '').'" alt="">';
            else
                echo  '<img src="'.esc_url( home_url( '/' )).'wp-content/themes/Linsolite V2/inc/img/logo_footer.png" alt="">';

            ?>


        </div>
    </div>

    <div id="footer-sidebar" class="secondary">
        <div id="footer-sidebar1">
            <?php
            if(is_active_sidebar('footer-sidebar-1')){
                dynamic_sidebar('footer-sidebar-1');
            }
            ?>
        </div>
        <div id="footer-sidebar2">
            <?php
            if(is_active_sidebar('footer-sidebar-2')){
                dynamic_sidebar('footer-sidebar-2');
            }
            ?>
        </div>
        <div id="footer-sidebar3">
            <?php
            if(is_active_sidebar('footer-sidebar-3')){
                dynamic_sidebar('footer-sidebar-3');
            }
            ?>
        </div>
    </div>


    <div class="copyright">2016 © LINSOLITE.TV V2.2.3 Tous droits réservés - DESIGN BY <a target="_blank" href="http://www.juliencottaz-design.com">JULIEN COTTAZ </a></div>
</div>




<script type="text/javascript" src="http://code.jquery.com/jquery-1.12.0.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/js/materialize.min.js"></script>

<script type="text/javascript" src="<?php echo get_template_directory_uri () ?>/app.js"></script>


</body>
</html>