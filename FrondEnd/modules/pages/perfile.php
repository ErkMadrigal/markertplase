        <!-- inicio contenedor -->
        <main class="page-content mb-5">
            <div id="notifications"></div>
        
            <?php
                include "../BackEnd/modules/database.php";
                include "../BackEnd/modules/consultas.php";

                $consultas = new consultas();
                $allCategorias = $consultas->getCategoria()["mensaje"];

                $IdPerfile = $_GET['usr'];

                $titlePage = "perfile";
                $titleNav = "perfile";
                include 'modules/components/nav-page.php';
            ?>
            
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                            <div class="col-md-9 order-2 order-lg-1 order-xl-1" style="height: 60rem;overflow-y: scroll;">
                                <div class="card card-primary collapsed-card">
                                    <div class="card-header">
                                        <h3 class="card-title">post something</h3>
                                        <div class="card-tools">
                                            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="d-flex flex-nowrap bd-highlight">
                                            <div class="order-1 p-2 bd-highlight">
                                                <img class="img-responsive img-rounded border border-white rounded-circle" style="width:5rem; height:5rem;" src="img/img-perfiles/default.png">
                                            </div>
                                            
                                            <div class="order-2 p-2 bd-highlight w-100 mt-3" data-toggle="modal" data-target="#modal-lg">
                                                <input class="form-control form-control-lg w-100" type="text" placeholder="que estas pensando">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header p-2">
                                        <ul class="nav nav-pills">
                                            <li class="nav-item"><a class="nav-link active" href="#activity"
                                                    data-toggle="tab">Activity</a></li>
                                            <li class="nav-item"><a class="nav-link" href="#timeline"
                                                    data-toggle="tab">Timeline</a></li>
                                            <li class="nav-item"><a class="nav-link" href="#settings"
                                                    data-toggle="tab">Settings</a></li>
                                        </ul>
                                    </div><!-- /.card-header -->
                                    <div class="card-body">
                                        <div class="tab-content">
                                            <div class="active tab-pane" id="activity">
                                                <!-- Post -->
                                                <div class="post">
                                                    <div class="user-block">
                                                        <img class="img-circle img-bordered-sm" src="img/user1-128x128.jpg"
                                                            alt="user image">
                                                        <span class="username">
                                                            <a href="#">Jonathan Burke Jr.</a>
                                                            <a href="#" class="float-right btn-tool"><i
                                                                    class="fas fa-times"></i></a>
                                                        </span>
                                                        <span class="description">Shared publicly - 7:30 PM today</span>
                                                    </div>
                                                    <!-- /.user-block -->
                                                    <p>
                                                        Lorem ipsum represents a long-held tradition for designers,
                                                        typographers and the like. Some people hate it and argue for
                                                        its demise, but others ignore the hate as they create awesome
                                                        tools to help create filler text for everyone from bacon lovers
                                                        to Charlie Sheen fans.
                                                    </p>

                                                    <p>
                                                        <a href="#" class="link-black text-sm mr-2"><i
                                                                class="fas fa-share mr-1"></i> Share</a>
                                                        <a href="#" class="link-black text-sm"><i
                                                                class="far fa-thumbs-up mr-1"></i> Like</a>
                                                        <span class="float-right">
                                                            <a href="#" class="link-black text-sm">
                                                                <i class="far fa-comments mr-1"></i> Comments (5)
                                                            </a>
                                                        </span>
                                                    </p>

                                                    <input class="form-control form-control-sm" type="text"
                                                        placeholder="Type a comment">
                                                </div>
                                                <!-- /.post -->

                                                <!-- Post -->
                                                <div class="post">
                                                    <div class="user-block">
                                                        <img class="img-circle img-bordered-sm" src="img/user6-128x128.jpg"
                                                            alt="User Image">
                                                        <span class="username">
                                                            <a href="#">Adam Jones</a>
                                                            <a href="#" class="float-right btn-tool"><i
                                                                    class="fas fa-times"></i></a>
                                                        </span>
                                                        <span class="description">Posted 5 photos - 5 days ago</span>
                                                    </div>
                                                    <!-- /.user-block -->
                                                    <div class="row mb-3">
                                                        <div class="col-sm-6">
                                                            <img class="img-fluid" src="img/photo1.png" alt="Photo">
                                                        </div>
                                                        <!-- /.col -->
                                                        <div class="col-sm-6">
                                                            <div class="row">
                                                                <div class="col-sm-6">
                                                                    <img class="img-fluid mb-3" src="img/photo2.png"
                                                                        alt="Photo">
                                                                    <img class="img-fluid" src="img/photo3.jpg" alt="Photo">
                                                                </div>
                                                                <!-- /.col -->
                                                                <div class="col-sm-6">
                                                                    <img class="img-fluid mb-3" src="img/photo4.jpg"
                                                                        alt="Photo">
                                                                    <img class="img-fluid" src="img/photo1.png" alt="Photo">
                                                                </div>
                                                                <!-- /.col -->
                                                            </div>
                                                            <!-- /.row -->
                                                        </div>
                                                        <!-- /.col -->
                                                    </div>
                                                    <!-- /.row -->

                                                    <p>
                                                        <a href="#" class="link-black text-sm mr-2"><i
                                                                class="fas fa-share mr-1"></i> Share</a>
                                                        <a href="#" class="link-black text-sm"><i
                                                                class="far fa-thumbs-up mr-1"></i> Like</a>
                                                        <span class="float-right">
                                                            <a href="#" class="link-black text-sm">
                                                                <i class="far fa-comments mr-1"></i> Comments (5)
                                                            </a>
                                                        </span>
                                                    </p>

                                                    <input class="form-control form-control-sm" type="text"
                                                        placeholder="Type a comment">
                                                </div>
                                                <!-- /.post -->
                                            </div>
                                            <!-- /.tab-pane -->
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
                                            <!-- /.tab-pane -->

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
                                            <!-- /.tab-pane -->
                                        </div>
                                        <!-- /.tab-content -->
                                    </div><!-- /.card-body -->
                                </div>
                                <!-- /.nav-tabs-custom -->
                            </div>

                            <div class="col-md-3 order-1 order-lg-2 order-xl-2">
                                <div id="Contenedor-perfil"></div>
                            </div>
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </section><!-- /.content -->
        </main><!-- final contenedor -->
        
        <div class="modal fade" id="modal-lg">
            <div class="modal-dialog modal-lg"> 
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">create publication</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class='content' id="cuadro-files">
                        <form action="<?= $root;?>BackEnd/index.php" class="dropzone m-5" id="myAwesomeDropzone" style="overflow-y: scroll;height: 25rem;"> 
                        </form>  
                        <button class="btn btn-primary m-5" type="button" id='uploadfiles' value='Upload Files'>Subir</button>
                    </div> 
                    <form class="needs-validation-post d-none" id="form" novalidate>
                        <div class="modal-body">
                            <div class="input-group mb-3">
                                <input type="text"  name="titulo" class="form-control" placeholder="titulo" required>
                                <div class="invalid-feedback">
                                    agrega un titulo
                                </div>
                            </div>
                            <div class="form-group mb-3">
                                <select class="custom-select" name="categoria" id="categoria" required>
                                    <option value="">Categoria</option>
                                    <?php foreach($allCategorias as $Categoria):?>
                                        <option value="<?= $Categoria['id_categoria'];?>"><?= $Categoria['name'];?></option>
                                    <?php endforeach;?>
                                    
                                </select>
                                <div class="invalid-feedback">
                                    selecciona una categoria
                                </div>
                            </div>
                            <div class="form-group mb-3">
                                <textarea class="form-control" name="descripcion" id="description" placeholder="description" required></textarea>
                                <div class="invalid-feedback">
                                    ingresa por favor una descripcion.
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6 form-group mb-3">
                                    <div class="input-group">
                                        <input type="number" name="costo" id="costo" class="form-control" placeholder="costo" required>
                                    </div>
                                    <div class="invalid-feedback">
                                        ingresa un costo
                                    </div>
                                </div>
                                <div class="col-6 form-group mb-3">
                                    <div class="input-group">
                                        <input type="number" name="cantidad" id="cantidad" class="form-control" placeholder="cantidad" required>
                                    </div>
                                    <div class="invalid-feedback">
                                        ingresa una cantidad
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer justify-content-between">
                            <button class="btn btn-lg btn-primary w-100" type="submit"><i class="fas fa-share-square"></i> Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <script>var IdPerfile  = "<?= $IdPerfile;?>";</script>  
