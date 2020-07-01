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
                    // setInterval(()=>{
                        miUsuario(contentUser, usuario.name, usuario.email, usuario.img, usuario.date_created, usuario.fecha_nacimiento);
                    // }, 3000);
                }else{
                    let usuario = dataUsrs.mensaje;
                    // setInterval(()=>{
                        datosUsuario(contentUser, usuario.name, usuario.email, usuario.img, usuario.date_created, usuario.fecha_nacimiento);
                    // }, 3000);
                }
            }
        })
        .catch((e)=>console.log(e))   
        
        var contentPosts = document.querySelector("#datos_perfil");
        var activity = document.querySelector("#activity");

        var urlGetUsers = root+"BackEnd/";
        let dataPerfil = new FormData();
        dataPerfil.append("opcion", "getPost");
        dataPerfil.append("idUsrs", IdPerfile);
        fetchAPI(urlGetUsers, "POST", dataPerfil)
        .then((dataPerfil)=>{
            if(dataPerfil.estatus == "ok"){
                let dataPer = dataPerfil.mensaje[0];
                if(dataPer.id_user === idUsr){
                    myPosts(activity, dataPerfil.mensaje)
                }else{
                    Posts(contentPosts, dataPerfil.mensaje);
                }
            }
        })
        .catch((e)=>console.log(e))   

    }, false);
})();


const datosUsuario = (contentUser, name, email, img, dateCreated, fechaNacim) =>{
    contentUser.innerHTML += `
        <div class="card card-primary card-outline">
            <div class="card-body box-profile">
                <div class="text-center">
                    <img class="profile-user-img img-fluid img-circle" src="${img}"alt="User profile">
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
        </div>

        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">About Me</h3>
            </div>
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
        </div>
    `;
}

const miUsuario = (contentUser, name, email, img, dateCreated, fechaNacim) =>{
    contentUser.innerHTML += `
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
        </div>
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">About Me</h3>
            </div>
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
        </div>
    `;
}

const myPosts = (activity, data) =>{
    data.forEach((dat) => {
        let img = dat.images;
        let arrayImg = img.split(','); 
        
        let dateHour = dat.date;
        let arrayFechaHora = dateHour.split(' ');

        let fecha = arrayFechaHora[0].split('-');
        let hora = arrayFechaHora[1].split(':');

        let horaForm12 = (hora[0] > 12) ? hora[0]-12: (hora[0] == 0 ) ? 12: hora[0]; 
        let amPm = (hora[0] > 12) ? "pm" : (hora[0] == 0) ? "am" : "am"; 

        var meses = ["Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre"];

        mesPost = meses[(parseInt(fecha[1], 10)-1)];
        
        var realTime = new Date();

        // horas
        let h = realTime.getHours()-parseInt(hora[0], 10)
        let m = realTime.getMinutes()-parseInt(hora[1], 10)
        // fecha
        let d = realTime.getDate()-parseInt(fecha[2], 10)
        let mes= realTime.getMonth()-(parseInt(fecha[1], 10)-1)

        let mesP = " publicado el " + fecha[2] + " de " + meses[parseInt(fecha[1], 10)-1] + " del " + fecha[0] + " a la " + horaForm12 +":"+hora[1] + " " +amPm;
    
        let validateFecha = ( m <= 0 && h <= 0 && d <= 0 && mes <= 0 ) ? "hace un segundo" :  
                            ( h <= 0 && d <= 0 && mes <= 0 ) ? "hace " + m + " min" :
                            ( d <= 0 && mes <= 0 ) ? "hace " + h + " h" : 
                            ( d <= 10 && mes <= 0 ) ? "hace " + d + " d ": mesP;

        activity.innerHTML += `
            <div class="post mb-5">
                <div class="user-block">
                    <img class="img-circle img-bordered-sm" src="${dat.img}"alt="User Image">
                    <span class="username">
                        <a href="#">${dat.name}</a>
                    </span>
                    <span class="description">${validateFecha}<i class="fas fa-users ml-2"></i></span>

                </div>
                <h2>${dat.title}</h2>
                <p>${dat.description}</p>
                <div class="row mb-3">
                    <div class="col-sm-6 p-1">
                        <div class="info-box mb-3 bg-primary">
                            <span class="info-box-icon"><i class="fas fa-dollar-sign"></i></span>

                            <div class="info-box-content">
                                <span class="info-box-text">Precio</span>
                                <span class="info-box-number">$ ${dat.costo}</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 p-1">
                        <div class="info-box mb-3 bg-warning">
                            <span class="info-box-icon"><i class="fas fa-tag"></i></span>

                            <div class="info-box-content">
                                <span class="info-box-text">Inventario</span>
                                <span class="info-box-number">${dat.cantidad}</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-8 p-0">
                        <img class="img-fluid mb-3" style="height: 50vh;width: 100%;" src="img/img-post/${arrayImg[0]}" alt="Photo">
                    </div>
                    
                    <div class="col-4 p-0">
                        <img class="img-fluid mb-2" style="height: 16vh;width: 100%;" src="img/img-post/${arrayImg[1]}" alt="Photo">
                        <img class="img-fluid mb-2" style="height: 16vh;width: 100%;" src="img/img-post/${arrayImg[2]}" alt="Photo">
                        <img class="img-fluid" style="height: 16vh;width: 100%;" src="img/img-post/${arrayImg[3]}" alt="Photo">
                    </div>
                </div>

                <p>
                    <a href="#" class="link-black text-sm mr-2"><i
                            class="fas fa-share mr-1"></i> Share</a>
                    <a href="#" class="link-black text-sm"><i
                            class="far fa-thumbs-up mr-1"></i> Like</a>
                    <span class="float-right">
                        <a href="#" class="link-black text-sm mr-3">
                            <i class="far fa-comments"></i> Comments (5)
                        </a>
                    </span>
                </p>

                <input class="form-control form-control-sm mr-3" type="text" placeholder="Type a comment">
            </div>
        `;

    });

}

const Posts = (contentPosts, data) => {
    data.forEach((dat) => {
        let img = dat.images;
        let arrayImg = img.split(',');

        let dateHour = dat.date;
        let arrayFechaHora = dateHour.split(' ');

        let fecha = arrayFechaHora[0].split('-');
        let hora = arrayFechaHora[1].split(':');

        let horaForm12 = (hora[0] > 12) ? hora[0]-12: (hora[0] == 0 ) ? 12: hora[0]; 
        let amPm = (hora[0] > 12) ? "pm" : (hora[0] == 0) ? "am" : "am"; 

        var meses = ["Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre"];

        mesPost = meses[(parseInt(fecha[1], 10)-1)];
        
        var realTime = new Date();

        // horas
        let h = realTime.getHours()-parseInt(hora[0], 10)
        let m = realTime.getMinutes()-parseInt(hora[1], 10)
        // fecha
        let d = realTime.getDate()-parseInt(fecha[2], 10)
        let mes= realTime.getMonth()-(parseInt(fecha[1], 10)-1)

        let mesP = " publicado el " + fecha[2] + " de " + meses[parseInt(fecha[1], 10)-1] + " del " + fecha[0] + " a la " + horaForm12 +":"+hora[1] + " " +amPm;
    
        let validateFecha = ( m <= 0 && h <= 0 && d <= 0 && mes <= 0 ) ? "hace un segundo" :  
                            ( h <= 0 && d <= 0 && mes <= 0 ) ? "hace " + m + " min" :
                            ( d <= 0 && mes <= 0 ) ? "hace " + h + " h" : 
                            ( d <= 10 && mes <= 0 ) ? "hace " + d + " d ": mesP;
        contentPosts.innerHTML += `
            <div class="card-body p-1 pl-3 mt-3">
                <div class="tab-content">
                    <div class="active tab-pane" id="activity">
                        <div class="post mb-4">
                            <div class="user-block">
                                <img class="img-circle img-bordered-sm" src="${dat.img}"alt="User Image">
                                <span class="username">
                                    <a href="#">${dat.name}</a>
                                </span>
                                <span class="description">${validateFecha}<strong><i class="fas fa-users ml-2"></i></strong></span>
                            </div>
                            <h2>${dat.title}</h2>
                            <p>${dat.description}</p>
                            <div class="row mb-3">
                                <div class="col-sm-6 p-1">
                                    <div class="info-box mb-3 bg-primary">
                                        <span class="info-box-icon"><i class="fas fa-dollar-sign"></i></span>
            
                                        <div class="info-box-content">
                                            <span class="info-box-text">Precio</span>
                                            <span class="info-box-number">$ ${dat.costo}</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 p-1">
                                    <div class="info-box mb-3 bg-warning">
                                        <span class="info-box-icon"><i class="fas fa-tag"></i></span>
            
                                        <div class="info-box-content">
                                            <span class="info-box-text">Inventario</span>
                                            <span class="info-box-number">${dat.cantidad}</span>
                                        </div>
                                    </div>
                                </div>
            
                                <div class="col-8 p-0">
                                    <img class="img-fluid mb-3" style="height: 50vh;width: 100%;" src="img/img-post/${arrayImg[0]}" alt="Photo">
                                </div>
                                
                                <div class="col-4 p-0">
                                    <img class="img-fluid mb-2" style="height: 16vh;width: 100%;" src="img/img-post/${arrayImg[1]}" alt="Photo">
                                    <img class="img-fluid mb-2" style="height: 16vh;width: 100%;" src="img/img-post/${arrayImg[2]}" alt="Photo">
                                    <img class="img-fluid" style="height: 16vh;width: 100%;" src="img/img-post/${arrayImg[3]}" alt="Photo">
                                </div>
                            </div>
            
                            <p>
                                <a href="#" class="link-black text-sm mr-2"><i
                                        class="fas fa-share mr-1"></i> Share</a>
                                <a href="#" class="link-black text-sm"><i
                                        class="far fa-thumbs-up mr-1"></i> Like</a>
                                <span class="float-right">
                                    <a href="#" class="link-black text-sm mr-3">
                                        <i class="far fa-comments mr-1"></i> Comments (5)
                                    </a>
                                </span>
                            </p>
            
                            <input class="form-control form-control-sm mr-4" type="text" placeholder="Type a comment">
                        </div>
                    </div>
                </div>
            </div>
        `;

    });
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

                setTimeout( () => {
                                
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