// Initialize and add the map
function initMap() {
  // The location of ikonrealty
  const ikonrealty = { lat: 39.04698232051573, lng: -77.58345808710068 };
  // The map, centered at ikonrealty
  const map = new google.maps.Map(document.getElementById("map"), {
    zoom: 4,
    center: ikonrealty,
  });
  // The marker, positioned at ikonrealty
  const marker = new google.maps.Marker({
    position: ikonrealty,
    map: map,
  });
}
