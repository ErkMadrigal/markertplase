
  <div id="notifications"></div>
    <div class="hold-transition register-page">
        <div class="register-box">
            <div class="register-logo">
                <p><b>Market</b>Plase</p>
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
    
                    <a href="<?php echo $root;?>" class="text-center">Ya tengo cuenta</a>
                </div>
                <!-- /.form-box -->
            </div><!-- /.card -->
        </div>
        
    </div>



                        