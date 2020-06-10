var btnCerrarSession = document.querySelector("#cerrar-sesion");
var url = root+"modules/session/session-end.php";

    btnCerrarSession.onclick = (e) => {
        console.log(url)
        fetchAPI(url, "POST")
        .then((data)=>{
            if(data.estatus == "ok"){
                location.href = root;
            }
        });
  }