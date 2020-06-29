(() => {
    'use strict';
    window.addEventListener('load', () => {

        var content = document.querySelector("#content-Usr");
        var urlGetUser = root+"BackEnd/";
        let dataUsr = new FormData();
        dataUsr.append("opcion", "getUsrs");
        dataUsr.append("idUsr", idUsr);
        fetchAPI(urlGetUser, "POST", dataUsr)
        .then((dataUsr)=>{
            if(dataUsr.estatus == "ok"){
                let users = dataUsr.mensaje;
                let contador = 0;
                users.forEach(( user, indice )=>{
                    content.innerHTML +=`
                    <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch">
                        <div class="card bg-light">
                            <div class="card-header text-muted border-bottom-0">
                                ${ contador += 1 }) <b>${user.id_type_user == "1" ? "vendedor" : "comprador"}</b> <p class="float-right"><b>se unio el</b> ${ user.date_created }</p>
                            </div>
                            <div class="card-body pt-0">
                            <div class="row">
                                <div class="col-7">
                                <h2 class="lead"><b>${user.name}</b></h2>
                                <p class="text-muted text-sm"><b>Fecha de nasim.</b> ${user.fecha_nacimiento} </p>
                                <ul class="ml-4 mb-0 fa-ul text-muted">
                                    <li class="small"><span class="fa-li"><i class="fas fa-lg fa-building"></i></span> direccion</li><br>
                                    <li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span> phone</li><br>
                                    <li class="small"><span class="fa-li"><i class="fas fa-envelope"></i></span> email: ${user.email}</li><br>

                                </ul>
                                </div>
                                <div class="col-5 text-center">
                                <img src="${user.img}" alt="cover-${indice + 1}" class="img-circle img-fluid">
                                </div>
                            </div>
                            </div>
                            <div class="card-footer">
                                <div class="text-right">
                                    <a href="msg-${user.id_user}" class="btn btn-sm bg-teal">
                                        <i class="fas fa-comments"></i>
                                    </a>
                                    <a href="perfile-${user.id_user}-${user.name}" class="btn btn-sm btn-primary">
                                        <i class="fas fa-user"></i> View Profile
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    `;
                });
            }
        })
        .catch((e)=>console.log(e));

    }, false);
})();