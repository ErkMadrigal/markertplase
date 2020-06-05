(() => {
  'use strict';
  window.addEventListener('load', () => {

    var forms = document.getElementsByClassName('needs-validation-register');

    Array.prototype.filter.call(forms, (form) => {
      form.addEventListener('submit',  (event) => {
          event.preventDefault();
          event.stopPropagation();
          if (form.checkValidity()){
              let data = new FormData(forms[0]);
              data.append("opcion","registrarUsuario");
              fetch("http://localhost/markertplase/BackEnd/",{
                  method : "POST",
                  body : data
              })
              .then((resp)=>resp.json())
              .then((data)=>{
                console.log(data);
                  // if(data.estatus == "ok"){
                  //   Notify(data.mensaje, null, null, 'success');
                  // }
              })
              .catch((e)=>console.error(e));
          }
          form.classList.add('was-validated');
        }, false);
    }); 
    
  var inputFile = document.querySelector("#input-file");
  var btnFile = document.querySelector("#btn-file");
  var registrar = document.querySelector('#registrar');


    btnFile.onclick = (e) => {
      e.preventDefault();
      inputFile.click();
  }
            
    inputFile.onchange = (e) => {

        // Creamos el objeto de la clase FileReader
        var reader = new FileReader();
    
        // Leemos el archivo subido y se lo pasamos a nuestro fileReader
        reader.readAsDataURL(e.target.files[0]);
    
        // Le decimos que cuando este listo ejecute el código interno
        reader.onload = () => {
            var img = document.querySelector('#preview');
    
            img.src = reader.result;
    
        };

    }
            
    }, false);
  })();