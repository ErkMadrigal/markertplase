(() => {
    'use strict';
    window.addEventListener('load', () => {


        var rutaPerfilM = document.querySelector("#rutaPerfilM");
        var imagenPerfilM = document.querySelector("#imagenPerfilM");
        var emailPerfilM = document.querySelector("#emailPerfilM");
        var namePerfilM = document.querySelector("#namePerfilM");

        var btnMyPerfil = document.querySelector("#myPerfil");

        var urlGet = root+"BackEnd/";
        let data = new FormData();
        data.append("opcion", "getDataUsr");
        data.append("idUsr", idUsr);
        fetchAPI(urlGet, "POST", data)
        .then((data)=>{
            if(data.estatus == "ok"){
                let usr = data.mensaje;
                    rutaPerfilM.setAttribute("href", `perfile-${usr.id_user}-${usr.name}`);
                    imagenPerfilM.setAttribute("src", `${usr.img}`);
                    emailPerfilM.innerText = usr.email ;
                    namePerfilM.innerText = usr.name ;

                    btnMyPerfil.innerHTML += `<a href="perfile-${usr.id_user}-${usr.name}">My Perfil</a>`
            }
        })
        .catch((e)=>console.log(e));
        

        var bntMenu = document.querySelector(".bnt-menu");

        bntMenu.addEventListener("click", (e)=>{
            e.preventDefault();
        });

        var btnCerrarSession = document.querySelector("#cerrar-sesion");

        var url = root+"FrondEnd/modules/session/session-end.php";
        btnCerrarSession.onclick = (e) => {
            fetchAPI(url, "POST")
            .then((data)=>{
                if(data.estatus == "ok"){
                    location.href = root+"FrondEnd";
                }
            })
            .catch((e)=>console.log(e));
        }

        var menu = document.getElementById("menu-display-button");

        const mediaQ = matchMedia('(min-width: 1050px)');

        const changeSize = mql => {
            if(mql.matches){
                menu.classList.add('toggled');
            }else{
                menu.classList.remove('toggled');
            }
        }

        mediaQ.addListener(changeSize);

        changeSize(mediaQ);


    }, false);
})();


