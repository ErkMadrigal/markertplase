<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Hello, world!</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="css/adminlte.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

    <link rel="stylesheet" href="css/animate.min.css">
  </head>

  <body>
    <div class="hold-transition register-page">
        <div class="register-box">
            <div class="register-logo">
                <a href="../../index2.html"><b>Market</b>Plase</a>
            </div>
    
            <div class="card animated slideInDown mb-5">
                <div class="card-body register-card-body">
                    <p class="login-box-msg">Registrar un nuevo usuario</p>
    
                    <form class="needs-validation-register" novalidate>
                        <div class="input-group mb-3">
                            <input type="text"  name="name" class="form-control" placeholder="Nombre" required>
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-user"></span>
                                </div>
                            </div>
                            <div class="invalid-feedback">
                                agrega un nombre
                            </div>
                        </div>
                        <div class="input-group mb-3">
                            <input type="email" name="email"  class="form-control" placeholder="Email" required>
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-envelope"></span>
                                </div>
                            </div>
                            <div class="invalid-feedback">
                                agrega un correo
                            </div>
                        </div>
                        <div class="input-group mb-3">
                            <input type="password"  name="password" class="form-control" placeholder="Password" required>
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-lock"></span>
                                </div>
                            </div>
                            <div class="invalid-feedback">
                                agrega un password
                            </div>
                        </div>
                        <div class="form-group mb-3">
                            <label class="h6 mt-3">Fecha de nacimiento</label>
                            <div class="form-row">
                                <div class="col-4">
                                    <select required class="custom-select" name="dia" id="dia">
                                        <option value="">Día</option>
                                        <?php for( $i=0 ; $i < 31 ; $i++ ): ?>
                                        <option value="<?php echo ( $i + 1 ); ?>"><?php echo ( $i + 1 ); ?></option>
                                        <?php endfor; ?>
                                    </select>
                                    <div class="invalid-tooltip">
                                        Por favor selecciona tu dia de nacimiento.
                                    </div>
                                </div>
                                <div class="col-4">
                                    <?php
                                        $meses = ["Ene", "Feb", "Mar", "Abr", "May", "Jun", "Jul", "Ago", "Sep", "Oct", "Nov", "Dic"];
                                    ?>
                                    <select required class="custom-select" name="mes" id="mes">
                                        <option value="">Mes</option>
                                        <?php for( $i=0 ; $i < 12 ; $i++ ): ?>
                                        <option value="<?php echo ( $i + 1 ); ?>"><?php echo strtolower($meses[$i]); ?>
                                        </option>
                                        <?php endfor; ?>
                                    </select>
                                    <div class="invalid-tooltip">
                                        Por favor selecciona tu mes de nacimiento.
                                    </div>
                                </div>
                                <div class="col-4">
                                    <?php $anioActual = date("Y"); ?>
                                    <select required class="custom-select" name="anio" id="anio">
                                        <option value="">Año</option>
                                        <?php for( $i = $anioActual ; $i > 1904 ; $i-- ): ?>
                                        <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                                        <?php endfor; ?>
                                    </select>
                                    <div class="invalid-tooltip">
                                        Por favor selecciona tu año de nacimiento.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group mb-3">
                            <img src="img/picture.png" id="preview" class="img-fluid rounded mx-auto d-block" alt="foto perfil" style="width: 30%;">
                            <input type="file" class="d-none" id="input-file" accept="image/*" name="imagenPerfil" required>
                            <button class="btn btn-primary w-100" id="btn-file"><i class="fas fa-image"></i> Cargar Imagen</button>
                            <div class="invalid-feedback">
                                carga una imagen
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-8">
                                <div class="input-group mb-3">
                                    <div class="icheck-primary">
                                        <input type="checkbox" id="agreeTerms" name="terms" required>
                                        <label for="agreeTerms">
                                        I agree to the <a href="#">terms</a>
                                        </label>
                                        <div class="invalid-feedback">
                                            acepta los terminos
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.col -->
                            <div class="col-4">
                                <button class="btn btn-primary btn-block" id="registrar">Registrar</button>
                            </div>
                            <!-- /.col -->
                        </div>
                    </form>
                    <div class="social-auth-links text-center">
                        <p>- OR -</p>
                        <div class="row">
                            <div class="col-6">
                                <a href="#" class="btn btn-block btn-primary">
                                    Sign up using <i class="fab fa-facebook mr-2"></i>
                                </a>
                            </div>
                            <div class="col-6">
                                <a href="#" class="btn btn-block btn-danger">
                                    Sign up using <i class="fab fa-google-plus mr-2"></i>
                                </a>
                            </div>
                        </div>
                    </div>
    
                    <a href="login.html" class="text-center">Ya tengo cuenta</a>
                </div>
                <!-- /.form-box -->
            </div><!-- /.card -->
        </div>
        
    </div>
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
    <!-- /.register-box -->
    
    <!-- jQuery -->
    <script src="plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- AdminLTE App -->
    <script src="js/adminlte.min.js"></script>
    <script src="js/demo.js"></script>
    <script src="js/Notify.js"></script>
    <script src="js/registar-usuario.js"></script>
  </body>
</html>
                        