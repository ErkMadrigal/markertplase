( () => {
    'use strict';
    window.addEventListener('load',  () => {

        var forms = document.getElementsByClassName('needs-validation-msg');

        var validation = Array.prototype.filter.call(forms, (form) => {
            form.addEventListener('submit',  (event) => {
                event.preventDefault();
                event.stopPropagation();
                if (form.checkValidity()){
                    let data = new FormData(forms[0]);
                    data.append("opcion","new");
                    fetch("http://localhost/back-msg/",{
                        method : "POST",
                        body : data
                    })
                    .then((resp)=>resp.json())
                    .then((data)=>{
                        if(data.estatus == "ok"){
                            cargar();
                        }
                    })
                    .catch((e)=>console.error(e));
                }
                form.classList.add('was-validated');
            }, false);
        });

        const cargar = () => {
            var contenedor=document.querySelector('#contenedorMsg');
            contenedor.innerHTML='';
            let data = new FormData();
            data.append("opcion","getMsg");
            fetch("http://localhost/back-msg/",{
                method : "POST",
                body : data
            })
            .then((resp)=>resp.json())
            .then((data)=>{
                if(data.estatus == "ok") {
                    let mensajes = data.mensaje;
                    mensajes.forEach((mensaje,indice)=>{
                        contenedor.innerHTML += `
                            <div class="d-flex bd-highlight mb-3">
                                <div class="ml-auto p-1 bd-highlight dropleft">
                                    <div class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    </div>
                                    <div class="dropdown-menu">
                                        <button class="dropdown-item" type="button">Emininar</button>
                                    </div>
                                </div>
                                <div class="p-1 bd-highlight">
                                    <div class="card border-primary p-2">
                                        ${mensaje.Mensaje}
                                    </div>
                                    <span class="text-primary">${mensaje.Hora}</span>
                                </div>
                                <div class="p-1 bd-highlight">
                                    <div class="user-pic">
                                        <img class="img-responsive img-rounded rounded-circle" src="https://raw.githubusercontent.com/azouaoui-med/pro-sidebar-template/gh-pages/src/img/user.jpg"
                                        alt="User picture" style="width: 3rem;">
                                    </div>
                                </div>
                            </div>`;
                    });
                }
            })
            .catch((e)=>console.error(e));
        }
        cargar();

        // setInterval(()=>cargar(), 1000);

        // var registrer = document.getElementsByClassName('needs-validation-usr');

        // var validationR = Array.prototype.filter.call(registrer, (form) => {
        //     form.addEventListener('submit',  (event) => {
        //         event.preventDefault();
        //         event.stopPropagation();
        //         if (form.checkValidity()){
        //             let data = new FormData(registrer[0]);
        //             data.append("opcion","newUsr");
        //             fetch("http://localhost/back-msg/",{
        //                 method : "POST",
        //                 body : data
        //             })
        //             .then((resp)=>resp.json())
        //             .then((data)=>{
        //                 if(data.estatus == "ok"){
        //                     cargar();
        //                 }
        //             })
        //             .catch((e)=>console.error(e));
        //         }
        //         form.classList.add('was-validated');
        //     }, false);
        // });

    }, false);
})();