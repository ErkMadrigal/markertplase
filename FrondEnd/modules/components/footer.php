<?php if( $footer ):?>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"crossorigin="anonymous"></script>
    <script >
         jQuery(function ($) {
            $(".sidebar-dropdown > a").click(function() {
            $(".sidebar-submenu").slideUp(200);
            if (
            $(this)
            .parent()
            .hasClass("active")
            ) {
            $(".sidebar-dropdown").removeClass("active");
            $(this)
            .parent()
            .removeClass("active");
            } else {
            $(".sidebar-dropdown").removeClass("active");
            $(this)
            .next(".sidebar-submenu")
            .slideDown(200);
            $(this)
            .parent()
            .addClass("active");
            }
            });

            $("#close-sidebar").click(function() {
            $(".page-wrapper").removeClass("toggled");
            });
            $("#show-sidebar").click(function() {
            $(".page-wrapper").addClass("toggled");
            });

        });
    </script>

    <?php if( isset( $scripts ) ) : ?>
        <?php foreach( $scripts as $script ) : ?>
            <script src="<?=  $script; ?>"></script>
        <?php endforeach;?>
    <?php endif;?>

</body>

</html>
<?php else:?>
    <!-- Footer -->
    <footer class="page-footer font-small bg-light pt-4 mt-5">

        <!-- Footer Links -->
        <div class="container text-center text-md-left">
    
            <!-- Grid row -->
            <div class="row">
        
                <!-- Grid column -->
                <div class="col-md-4 mx-auto">
        
                <!-- Content -->
                <h5 class="font-weight-bold text-uppercase text-secondary mt-3 mb-4">Footer Content</h5>
                <p class="text-secondary">Here you can use rows and columns to organize your footer content. Lorem ipsum dolor sit amet,
                    consectetur
                    adipisicing elit.</p>
        
                </div>
                <!-- Grid column -->
        
                <hr class="clearfix w-100 d-md-none">
        
                <!-- Grid column -->
                <div class="col-md-2 mx-auto">
        
                <!-- Links -->
                    <h5 class="font-weight-bold text-uppercase mt-3 mb-4 text-secondary">Links</h5>
            
                    <ul class="list-unstyled">
                        <li>
                        <a href="#!">Link 1</a>
                        </li>
                        <li>
                        <a href="#!">Link 2</a>
                        </li>
                        <li>
                        <a href="#!">Link 3</a>
                        </li>
                        <li>
                        <a href="#!">Link 4</a>
                        </li>
                    </ul>
        
                </div>
                <!-- Grid column -->
        
                <hr class="clearfix w-100 d-md-none">
        
                <!-- Grid column -->
                <div class="col-md-2 mx-auto">
        
                    <!-- Links -->
                    <h5 class="font-weight-bold text-uppercase text-secondary mt-3 mb-4">Links</h5>
            
                    <ul class="list-unstyled">
                        <li>
                        <a href="#!">Link 1</a>
                        </li>
                        <li>
                        <a href="#!">Link 2</a>
                        </li>
                        <li>
                        <a href="#!">Link 3</a>
                        </li>
                        <li>
                        <a href="#!">Link 4</a>
                        </li>
                    </ul>
        
                </div>
                <!-- Grid column -->
        
                <hr class="clearfix w-100 d-md-none">
        
                <!-- Grid column -->
                <div class="col-md-2 mx-auto">
        
                    <!-- Links -->
                    <h5 class="font-weight-bold text-uppercase text-secondary mt-3 mb-4">Links</h5>
            
                    <ul class="list-unstyled">
                        <li>
                        <a href="#!">Link 1</a>
                        </li>
                        <li>
                        <a href="#!">Link 2</a>
                        </li>
                        <li>
                        <a href="#!">Link 3</a>
                        </li>
                        <li>
                        <a href="#!">Link 4</a>
                        </li>
                    </ul>
        
                </div>
                <!-- Grid column -->
        
            </div>
            <!-- Grid row -->
    
        </div>
        <!-- Footer Links -->
    
        <hr>
    
        <!-- Call to action -->
        <ul class="list-unstyled list-inline text-center py-2">
        <li class="list-inline-item">
            <h5 class="mb-1 text-secondary">Register for free</h5>
        </li>
        <li class="list-inline-item">
            <a href="#!" class="btn btn-danger btn-rounded">Sign up!</a>
        </li>
        </ul>
        <!-- Call to action -->
    
        <hr>
    
        <!-- Social buttons -->
        <ul class="list-unstyled list-inline text-center">
        <li class="list-inline-item">
            <a class="btn-floating btn-fb mx-1">
            <i class="fab fa-facebook-f"> </i>
            </a>
        </li>
        <li class="list-inline-item">
            <a class="btn-floating btn-tw mx-1">
            <i class="fab fa-twitter"> </i>
            </a>
        </li>
        <li class="list-inline-item">
            <a class="btn-floating btn-gplus mx-1">
            <i class="fab fa-google-plus-g"> </i>
            </a>
        </li>
        <li class="list-inline-item">
            <a class="btn-floating btn-li mx-1">
            <i class="fab fa-linkedin-in"> </i>
            </a>
        </li>
        <li class="list-inline-item">
            <a class="btn-floating btn-dribbble mx-1">
            <i class="fab fa-dribbble"> </i>
            </a>
        </li>
        </ul>
        <!-- Social buttons -->
    
        <!-- Copyright -->
        <div class="footer-copyright text-center py-3">© 2020 Copyright:<a href="https://mdbootstrap.com/"> MDBootstrap.com</a>
        </div>
        <!-- Copyright -->
    
    </footer>
    <!-- Footer -->
        <!-- jQuery -->
    <script src="plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- AdminLTE App -->
    <script src="js/adminlte.min.js"></script>
    <script src="js/demo.js"></script>
    <script src="js/registar-usuario.js"></script>
    <script src="js/Notify.js"></script>
    <script src="js/fetch-api.js"></script>

  </body>
</html>
<?php endif;?>