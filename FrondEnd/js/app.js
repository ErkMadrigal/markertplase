
var contenedorPerfil = document.querySelector("#contenedor-perfil"); 
var urlGet = root+"BackEnd/";
let data = new FormData();
data.append("opcion", "getDataUsr");
data.append("idUsr", idUsr);
fetchAPI(urlGet, "POST", data)
.then((data)=>{
    if(data.estatus == "ok"){
        let usr = data.mensaje;
        console.log(usr.img)
            contenedorPerfil.innerHTML += `
                <a href="perfile">
                    <div class="sidebar-header">
                        <div class="user-pic">
                        <img class="img-responsive img-rounded border border-white rounded-circle" src="${ usr.img }"
                            alt="User picture">
                        </div>
                        <div class="user-info">
                            <span class="user-name">${ usr.email }<br>
                                <strong class="h5">${ usr.name }</strong>
                            </span>
                            <span class="user-status">
                                <i class="fa fa-circle"></i>
                                <span>Online</span>
                            </span>
                        </div>
                    </div>
                </a>
            `;

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
