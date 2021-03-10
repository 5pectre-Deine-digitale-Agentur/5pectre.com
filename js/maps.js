let map;

function initMap() {
  map = new google.maps.Map(document.querySelector(".map"), {
    center: { lat: 53.79416237935197, lng: 9.777104309519318 },
    zoom: 16,
    mapId: 'f9c10aa0eee63d5c',
    disableDefaultUI: true,
  });

  // The marker
    var marker = new google.maps.Marker({
      position: { lat: 53.79416237935197, lng: 9.777104309519318 },
      map: map,
      icon: 'http://5pectre.local/wp-content/uploads/2021/03/maps-1-e1615285591323.png'
    });
};
