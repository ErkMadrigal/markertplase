(() => {
    'use strict';
    window.addEventListener('load', () => {

        var contentUser = document.querySelector("#Contenedor-perfil");
        var urlGetUsers = root+"BackEnd/";
        let dataUsrs = new FormData();
        dataUsrs.append("opcion", "getUsers");
        dataUsrs.append("idUsrs", IdPerfile);
        fetchAPI(urlGetUsers, "POST", dataUsrs)
        .then((dataUsrs)=>{
            if(dataUsrs.estatus == "ok"){
                if(dataUsrs.mensaje.id_user === idUsr){
                    let usuario = dataUsrs.mensaje;
                    miUsuario(contentUser, usuario.name, usuario.email, usuario.img, usuario.date_created, usuario.fecha_nacimiento);
                }else{
                    let usuario = dataUsrs.mensaje;
                    datosUsuario(contentUser, usuario.name, usuario.email, usuario.img, usuario.date_created, usuario.fecha_nacimiento);
                }
            }
        })
        .catch((e)=>console.log(e))        

    }, false);
})();


const datosUsuario = (contentUser, name, email, img, dateCreated, fechaNacim) =>{
    contentUser.innerHTML += `
        <!-- Profile Image -->
        <div class="card card-primary card-outline">
            <div class="card-body box-profile">
                <div class="text-center">
                    <img class="profile-user-img img-fluid img-circle" src="${img}"
                        alt="User profile">
                </div>

                <h3 class="profile-username text-center">${name}</h3>

                <p class="text-muted text-center">${email}</p>

                <ul class="list-group list-group-unbordered mb-3">
                    <li class="list-group-item">
                        <b>Followers</b> <a class="float-right">1,322</a>
                    </li>
                    <li class="list-group-item">
                        <b>Following</b> <a class="float-right">543</a>
                    </li>
                    <li class="list-group-item">
                        <b>Friends</b> <a class="float-right">13,287</a>
                    </li>
                </ul>

                <a href="" class="btn btn-primary btn-block"><b><i class="fas fa-users"></i> seguir</b></a>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->

        <!-- About Me Box -->
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">About Me</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <strong><i class="fas fa-book mr-1"></i> Education</strong>

                <p class="text-muted">
                    sin modificar
                </p>

                <hr>

                <strong><i class="fas fa-map-marker-alt mr-1"></i> Location</strong>

                <p class="text-muted">sin modificar</p>

                <hr>

                <strong><i class="fas fa-pencil-alt mr-1"></i>fecha nacimiento</strong>
                
                <p class="text-muted">${fechaNacim}</p>
                

                <strong><i class="far fa-file-alt mr-1"></i>fecha que se unio</strong>

                <p class="text-muted">${dateCreated}</p>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
        
    `;
}

const miUsuario = (contentUser, name, email, img, dateCreated, fechaNacim) =>{
    contentUser.innerHTML += `
        <!-- Profile Image -->
        <div class="card card-primary card-outline">
            <div class="card-body box-profile">
                <div class="text-center">
                    <img class="profile-user-img img-fluid img-circle" src="${img}"
                        alt="User profile">
                </div>

                <h3 class="profile-username text-center">${name}</h3>

                <p class="text-muted text-center">${email}</p>

                <ul class="list-group list-group-unbordered mb-3">
                    <li class="list-group-item">
                        <b>Followers</b> <a class="float-right">1,322</a>
                    </li>
                    <li class="list-group-item">
                        <b>Following</b> <a class="float-right">543</a>
                    </li>
                    <li class="list-group-item">
                        <b>Friends</b> <a class="float-right">13,287</a>
                    </li>
                </ul>

                <a href="" class="btn btn-primary btn-block"><i class="fas fa-user-edit"></i><b> modificar</b></a>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->

        <!-- About Me Box -->
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">About Me</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <strong><i class="fas fa-book mr-1"></i> Education</strong>

                <p class="text-muted">
                    modificar
                </p>

                <hr>

                <strong><i class="fas fa-map-marker-alt mr-1"></i> Location</strong>

                <p class="text-muted">Modificar</p>

                <hr>

                <strong><i class="fas fa-pencil-alt mr-1"></i>fecha nacimiento</strong>
                
                <p class="text-muted">${fechaNacim}</p>
                

                <strong><i class="far fa-file-alt mr-1"></i>fecha que se unio</strong>

                <p class="text-muted">${dateCreated}</p>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
        
    `;
}

const Posts = () =>{

}
    var cuadroFiles = document.querySelector("#cuadro-files");
    var myAwesomeDropzone = document.querySelector('#myAwesomeDropzone');
    var file = document.querySelector('#uploadfiles');
    var form = document.querySelector('#form');
    
    Dropzone.autoDiscover = false;
        var myDropzone = new Dropzone(".dropzone", { 
            // url: null,//se especifica cuando el form no tiene el aributo action, por de fault toma la url del action en el formulario
            // method: "post", //por defecto es post se puede poner get, put, etc.....
            withCredentials: false,
            parallelUploads: 8, //Cuanto archivos subir al mismo tiempo
            uploadMultiple: false,
            maxFilesize: 8, //Maximo Tama�o del archivo expresado en mg
            paramName: "file",//Nombre con el que se envia el archivo a nivel de parametro
            createImageThumbnails: true,
            maxThumbnailFilesize: 10, //Limite para generar imagenes (Previsualizacion)
            thumbnailWidth: 154, //Medida de largo de la Previsualizacion
            thumbnailHeight: 154,//Medida alto Previsualizacion
            filesizeBase: 1000,
            maxFiles: 8,//si no es nulo, define cu�ntos archivos se cargaRAN. Si se excede, se llamar� el EVENTO maxfilesexceeded.
            params: {}, //Parametros adicionales al formulario de envio ejemplo {tipo:"imagen"}
            clickable: true,
            ignoreHiddenFiles: true,
            acceptedFiles: "image/*", //EJEMPLO PARA PDF WORD ETC ,application/pdf,.psd,.DOCX",
            acceptedMimeTypes: null,//Ya no se utiliza paso a ser AceptedFiles
            autoProcessQueue: false,//True sube las imagenes automaticamente, si es false se tiene que llamar a myDropzone.processQueue(); para subirlas
            autoQueue: true,
            addRemoveLinks: true,//Habilita la posibilidad de eliminar/cancelar un archivo. Las opciones dictCancelUpload, dictCancelUploadConfirmation y dictRemoveFile se utilizan para la redacci�n.
            previewsContainer: null,//define d�nde mostrar las previsualizaciones de archivos. Puede ser un HTMLElement liso o un selector de CSS. El elemento debe tener la estructura correcta para que las vistas previas se muestran correctamente.
            capture: null,
            dictDefaultMessage: "Arrastra los archivos aqui para subirlos",
            dictFallbackMessage: "Su navegador no soporta arrastrar y soltar para subir archivos.",
            dictFallbackText: "Por favor utilize el formuario de reserva de abajo como en los viejos timepos.",
            dictFileTooBig: "La imagen revasa el tama�o permitido ({{filesize}}MiB). Tam. Max : {{maxFilesize}}MiB.",
            dictInvalidFileType: "No se puede subir este tipo de archivos.",
            dictResponseError: "Server responded with {{statusCode}} code.",
            dictCancelUpload: "Cancel subida",
            dictCancelUploadConfirmation: "�Seguro que desea cancelar esta subida?",
            dictRemoveFile: "X",
            dictRemoveFileConfirmation: null,
            dictMaxFilesExceeded: "Se ha excedido el numero de archivos permitidos.",
                        
            
        });
        file.addEventListener('click', () => {

            if(myDropzone.files.length > myDropzone.options.maxFiles){
                
                Notify('error, No seas pendejo. te exediste en numero de imagenes, tienen que ser 8, borra unas', null, null, 'danger');
            
            }else if(myDropzone.files.length < myDropzone.options.maxFiles){

                Notify('error, No seas pendejo. faltan imagenes, agrega mas imagenes hasta que sean 8', null, null, 'danger');

            }else if(myDropzone.files.length == myDropzone.options.maxFiles){

                setInterval( () => {
                                
                    form.classList.remove('d-none');
                    file.classList.add('d-none');
                    cuadroFiles.classList.add('d-none');
                    
                    myAwesomeDropzone.setAttribute("disabled", false);
                    file.setAttribute("disabled", false)
                    
                }, 4000);

                    Notify('las imagenes han sido guardadas', null, null, 'info');

                    myDropzone.processQueue(); 

                    var arrayImg = [
                        myDropzone.files[0].name, 
                        myDropzone.files[1].name, 
                        myDropzone.files[2].name,
                        myDropzone.files[3].name, 
                        myDropzone.files[4].name, 
                        myDropzone.files[5].name,
                        myDropzone.files[6].name, 
                        myDropzone.files[7].name
                    ];
                    var forms = document.getElementsByClassName('needs-validation-post');

                    Array.prototype.filter.call(forms, (form) => {
                        form.addEventListener('submit',  (event) => {
                            event.preventDefault();
                            event.stopPropagation();
                            if (form.checkValidity()){
                                let dataPost = new FormData(forms[0]);
                                dataPost.append("opcion","post");
                                dataPost.append("image", arrayImg);
                                dataPost.append("idUsr", idUsr);

                                let urlpost = root+"BackEnd/index.php";
                                fetchAPI(urlpost, "POST", dataPost) 
                                .then((dataPost)=>{
                                    if(dataPost.estatus == "ok"){
                                        let timerInterval
                                        Swal.fire({
                                            icon: 'success',
                                            title: dataPost.mensaje,
                                            timer: 2000,
                                            timerProgressBar: true,
                                            onBeforeOpen: () => {
                                                Swal.showLoading()
                                                timerInterval = setInterval(() => {
                                                const content = Swal.getContent()
                                                if (content) {
                                                    const b = content.querySelector('b')
                                                    if (b) {
                                                    b.textContent = Swal.getTimerLeft()
                                                    }
                                                }
                                                }, 100)
                                            },
                                            onClose: () => {
                                                clearInterval(timerInterval)
                                            }
                                        }).then((result) => {

                                            if (result.dismiss === Swal.DismissReason.timer) {
                                            location.reload(true);
                                            }
                                        })

                                    }
                                })
                                .catch((e)=>console.error(e));
                            }
                            form.classList.add('was-validated');
                        }, false);
                    });
                
            }

        });