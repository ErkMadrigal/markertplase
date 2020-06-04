(() => {
  'use strict';
  window.addEventListener('load', () => {

  var inputFile = document.querySelector("#input-file");
  var btnFile = document.querySelector("#btn-file");

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