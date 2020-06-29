
                                <div class="card card-primary collapsed-card">
                                    <div class="card-header">
                                        <h3 class="card-title">publish a product</h3>
                                        <div class="card-tools">
                                            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="d-flex flex-nowrap bd-highlight">
                                            <div class="order-1 p-2 bd-highlight">
                                                <img class="img-responsive img-rounded border border-white rounded-circle" style="width:5rem; height:5rem;" src="<?= $datos['img'] ?>">
                                            </div>
                                            
                                            <div class="order-2 p-2 bd-highlight w-100 mt-3" data-toggle="modal" data-target="#modal-lg">
                                                <input class="form-control form-control-lg w-100" type="text" placeholder="que estas pensando">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                
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