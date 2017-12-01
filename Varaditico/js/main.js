function initMap(){
	var ubicacion = new Localizacion(()=>{
      //guardar myLATlng en base de datos y hacer update con cada login asi cargar las ubicaciones  
  const myLatLng = {lat: ubicacion.latitude,lng: ubicacion.longitude};
      

      var texto = '<h5>Josue Mora</h5><br><p>Mecanico automiviles</p><br><a href="">Mensaje</a> <a href="">Contratar</a>'
      
       const options ={ 
       	center:myLatLng,
       	zoom:13
       }

        var map = document.getElementById('map');
        const mapa = new google.maps.Map(map,options);
	    
	    const marcador = new google.maps.Marker({
 position: myLatLng,
 map: mapa,
 title: "Posicion seleccionada"
	    });

 var informacion = new google.maps.InfoWindow({
 	content: texto
 });

 marcador.addListener('click', function(){
 	informacion.open(mapa,marcador);
 });
	});
}