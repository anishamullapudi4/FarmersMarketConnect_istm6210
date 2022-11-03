// Initialize and add the map
function initMap() {
  // The location of fmc
  const fmc = { lat: 38.878388, lng: -77.106221 };
  // The map, centered at fmc
  const map = new google.maps.Map(document.getElementById("map"), {
    zoom: 4,
    center: fmc,
  });
  // The marker, positioned at fmc
  const marker = new google.maps.Marker({
    position: fmc,
    map: map,
  });
}
