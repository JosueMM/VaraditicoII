var a = "";
var b = "";

function initialize() {
    if(navigator.geolocation){
      //obtenemos ubicacion
      navigator.geolocation.getCurrentPosition((position)=>{
a = position.coords.latitude;
b = position.coords.longitude;
alert(a+','+b)
      });
    }else{
      alert("tu navegador no soporta geolocalizacion!! :(")

    }

      var marcadores = [
       ['Mi','Posicion', a,b],
        //['Josue','Mecanico de motos', 10.3341119, -84.4355739],
        ['Roque','Mecanico de motos', 10.334998, -84.431008],
        ['Francisco','Mecanico de motos', 10.336386, -84.434377]
      ];
      var map = new google.maps.Map(document.getElementById('map'), {
        zoom: 16,
        center: new google.maps.LatLng(a,b),
        
      });
      var infowindow = new google.maps.InfoWindow();
      var marker, i;
      for (i = 0; i < marcadores.length; i++) {  
        marker = new google.maps.Marker({
          position: new google.maps.LatLng(marcadores[i][2], marcadores[i][3]),
          map: map
        });
        google.maps.event.addListener(marker, 'click', (function(marker, i) {
          return function() {
            infowindow.setContent(marcadores[i][0]+' '+marcadores[i][1]);
            infowindow.open(map, marker);
          }
        })(marker, i));
      }
    }
  
  

    
