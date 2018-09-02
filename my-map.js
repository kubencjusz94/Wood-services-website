function initMap() {
  var ost = {lat: 53.173704, lng: 19.856554899999992};
  var map = new google.maps.Map(
      document.getElementById('map'), {zoom:15, center: ost});
  var marker = new google.maps.Marker({position: ost, map: map});
}