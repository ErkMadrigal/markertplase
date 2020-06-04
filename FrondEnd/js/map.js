if (navigator.geolocation) {

    const options = {
        enableHighAccuracy: true,
        timeout: 5000,
        maximumAge: 0
    };


    const success = (position) =>{
        let origen = {
           lat : position.coords.latitude,
           lng : position.coords.longitude
        }

        var map = L.map('mapid').setView(origen, 17);
        
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(map);
        
        L.marker(origen).addTo(map)
            .bindPopup('A pretty CSS3 popup.<br> Easily customizable.')
            .openPopup();

    }

    const error = (error) => {
        var errores = {
            1: 'Permiso denegado',
            2: 'Posicion no disponible',
            3: 'Expiro el tiempo de respuesta'
        };

        console.log(`Error : ${errores[error.code]}`);
    }

    navigator.geolocation.getCurrentPosition(success, error, options);

 
}else{
    console.log("no soporta gps");
}