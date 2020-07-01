        <!-- inicio contenedor -->
        <main class="page-content mb-5">
            <div id="notifications"></div>
        
            <?php
                include "../BackEnd/modules/database.php";
                include "../BackEnd/modules/consultas.php";
                include "../BackEnd/modules/metodos-extra.php";

                $IdPerfile = $_GET['usr'];

                $metodoExtra = new metodosExtra();
                $consultas = new consultas();

                $allCategorias = $consultas->getCategoria()["mensaje"];
                $datos = $consultas->getUser($IdPerfile)["mensaje"];

                $fechaHora = explode(" ", $datos['date_created']);
                $fecha = explode("-", $fechaHora[0]);
                $hora = explode(":", $fechaHora[1]);

                $h = ( $hora[0] > "12" || $hora[0] == "00") ? $hora[0]-12 : $hora ;
                $amPm = ( $hora[0] > "12" ) ? "pm" : "am";
                
                $mes = $metodoExtra->mes($fecha[1]);
                
                $fechaNacimiento = explode("-", $datos['fecha_nacimiento']);
                $MesNacimiento = $metodoExtra->mes($fechaNacimiento[1]);

                $titlePage = "perfile";
                $titleNav = "perfile";
                include 'modules/components/nav-page.php';
            ?>
            
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-9 order-2 order-lg-1 order-xl-1 p-0" style="height: 60rem;overflow-y: scroll;">

                            <?php if($idUsr == $IdPerfile): include "modules/components/card-posting.php"; else:?>
                                <form action="./" class="dropzone d-none" id="myAwesomeDropzone"> 
                                    <button  type="button" id='uploadfiles' value='Upload Files'>Subir</button>
                                </form>  
                            <?php endif;?>
                            
                            <?php if($idUsr == $IdPerfile):?>
                                <div class="card" id="datos_perfil">
                                    <div class="card-header mb-4 p-0">
                                        <ul class="nav nav-pills">
                                            <li class="nav-item"><a class="nav-link active" href="#activity"
                                                    data-toggle="tab">Activity</a></li>
                                            <li class="nav-item"><a class="nav-link" href="#timeline"
                                                    data-toggle="tab">Timeline</a></li>
                                            <li class="nav-item"><a class="nav-link" href="#settings"
                                                    data-toggle="tab">Settings</a></li>
                                        </ul>
                                    </div>
                                    <div class="card-body mb-4 p-1 pl-3">
                                        <div class="tab-content">
                                            <div class="active tab-pane" id="activity">
                                                
                                            </div>
                                            <div class="tab-pane" id="timeline">
                                                <!-- The timeline -->
                                                <div class="timeline timeline-inverse">
                                                    <!-- timeline time label -->
                                                    <div class="time-label">
                                                        <span class="bg-danger">
                                                            10 Feb. 2014
                                                        </span>
                                                    </div>
                                                    <!-- /.timeline-label -->
                                                    <!-- timeline item -->
                                                    <div>
                                                        <i class="fas fa-envelope bg-primary"></i>

                                                        <div class="timeline-item">
                                                            <span class="time"><i class="far fa-clock"></i> 12:05</span>

                                                            <h3 class="timeline-header"><a href="#">Support Team</a> sent
                                                                you an email</h3>

                                                            <div class="timeline-body">
                                                                Etsy doostang zoodles disqus groupon greplin oooj voxy
                                                                zoodles,
                                                                weebly ning heekya handango imeem plugg dopplr jibjab,
                                                                movity
                                                                jajah plickers sifteo edmodo ifttt zimbra. Babblely odeo
                                                                kaboodle
                                                                quora plaxo ideeli hulu weebly balihoo...
                                                            </div>
                                                            <div class="timeline-footer">
                                                                <a href="#" class="btn btn-primary btn-sm">Read more</a>
                                                                <a href="#" class="btn btn-danger btn-sm">Delete</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- END timeline item -->
                                                    <!-- timeline item -->
                                                    <div>
                                                        <i class="fas fa-user bg-info"></i>

                                                        <div class="timeline-item">
                                                            <span class="time"><i class="far fa-clock"></i> 5 mins
                                                                ago</span>

                                                            <h3 class="timeline-header border-0"><a href="#">Sarah Young</a>
                                                                accepted your friend request
                                                            </h3>
                                                        </div>
                                                    </div>
                                                    <!-- END timeline item -->
                                                    <!-- timeline item -->
                                                    <div>
                                                        <i class="fas fa-comments bg-warning"></i>

                                                        <div class="timeline-item">
                                                            <span class="time"><i class="far fa-clock"></i> 27 mins
                                                                ago</span>

                                                            <h3 class="timeline-header"><a href="#">Jay White</a> commented
                                                                on your post</h3>

                                                            <div class="timeline-body">
                                                                Take me to your leader!
                                                                Switzerland is small and neutral!
                                                                We are more like Germany, ambitious and misunderstood!
                                                            </div>
                                                            <div class="timeline-footer">
                                                                <a href="#" class="btn btn-warning btn-flat btn-sm">View
                                                                    comment</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- END timeline item -->
                                                    <!-- timeline time label -->
                                                    <div class="time-label">
                                                        <span class="bg-success">
                                                            3 Jan. 2014
                                                        </span>
                                                    </div>
                                                    <!-- /.timeline-label -->
                                                    <!-- timeline item -->
                                                    <div>
                                                        <i class="fas fa-camera bg-purple"></i>

                                                        <div class="timeline-item">
                                                            <span class="time"><i class="far fa-clock"></i> 2 days
                                                                ago</span>

                                                            <h3 class="timeline-header"><a href="#">Mina Lee</a> uploaded
                                                                new photos</h3>

                                                            <div class="timeline-body">
                                                                <img src="http://placehold.it/150x100" alt="...">
                                                                <img src="http://placehold.it/150x100" alt="...">
                                                                <img src="http://placehold.it/150x100" alt="...">
                                                                <img src="http://placehold.it/150x100" alt="...">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- END timeline item -->
                                                    <div>
                                                        <i class="far fa-clock bg-gray"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane" id="settings">
                                                <form class="form-horizontal">
                                                    <div class="form-group row">
                                                        <label for="inputName" class="col-sm-2 col-form-label">Name</label>
                                                        <div class="col-sm-10">
                                                            <input type="email" class="form-control" id="inputName"
                                                                placeholder="Name">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="inputEmail"
                                                            class="col-sm-2 col-form-label">Email</label>
                                                        <div class="col-sm-10">
                                                            <input type="email" class="form-control" id="inputEmail"
                                                                placeholder="Email">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="inputName2" class="col-sm-2 col-form-label">Name</label>
                                                        <div class="col-sm-10">
                                                            <input type="text" class="form-control" id="inputName2"
                                                                placeholder="Name">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="inputExperience"
                                                            class="col-sm-2 col-form-label">Experience</label>
                                                        <div class="col-sm-10">
                                                            <textarea class="form-control" id="inputExperience"
                                                                placeholder="Experience"></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="inputSkills"
                                                            class="col-sm-2 col-form-label">Skills</label>
                                                        <div class="col-sm-10">
                                                            <input type="text" class="form-control" id="inputSkills"
                                                                placeholder="Skills">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="offset-sm-2 col-sm-10">
                                                            <div class="checkbox">
                                                                <label>
                                                                    <input type="checkbox"> I agree to the <a href="#">terms
                                                                        and conditions</a>
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="offset-sm-2 col-sm-10">
                                                            <button type="submit" class="btn btn-danger">Submit</button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php else: ?>
                                <div class="card" id="datos_perfil"></div>
                            <?php endif;?>
                            

                            <div class="card card-primary">
                                <div class="card-header">
                                    <div class="user-block">
                                        <img class="img-circle img-bordered-sm" src="<?= $datos['img'] ?>" alt="User Image">
                                        <span class="username text-white">
                                            <a href="#"><?= $datos['name'];?></a>
                                        </span>
                                        <span class="description text-white">Se unio el <?= $fecha[2]." de ".$mes." del ".$fecha[0];?> <?= $h.":".$hora[1]." $amPm";?> <i class="fas fa-users ml-2"></i></span>
                                    </div>
                                    <div class="card-tools">
                                        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <p class="text-center text-primary" style="font-size: 5rem;"><i class="fas fa-american-sign-language-interpreting"></i></p>
                                    <p class="text-center h4 font-weight-bold">Se unio el <?= $fecha[2]." de ".$mes." del ".$fecha[0];?></p>
                                    <p class="text-center h6 mt-4 font-weight-bold">Nacio el <?= $fechaNacimiento[2]." de ".$MesNacimiento." del ".$fechaNacimiento[0]?></p>
                                </div>
                            </div>

                        </div>

                        <div class="col-md-3 order-1 order-lg-2 order-xl-2 p-0">
                            <div id="Contenedor-perfil"></div>
                        </div>
                            
                    </div>
                </div>
            </section>
        </main>
        
        <script>var IdPerfile  = "<?= $IdPerfile;?>";</script>  
