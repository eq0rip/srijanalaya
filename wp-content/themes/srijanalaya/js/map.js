
var map = L.map('map').setView([27.6773517,85.309209], 15);
L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token={accessToken}', {
	maxZoom: 24,
	id: 'eq0rip.no3hg91b',
	accessToken: 'pk.eyJ1IjoiZXEwcmlwIiwiYSI6ImNpZncycDR4bTJpN3B1d2tyaGRwM3NrN3IifQ.xOe7qWLwCDbVr-edpprcdg'
}).addTo(map);
var iconurl = 'http://localhost/srijanalaya/wp-content/themes/srijanalaya/images/homeofficeicon.png';
var greenIcon = L.icon({
    iconUrl: iconurl,
    iconSize:     [32, 32], // size of the icon
    shadowSize:   [50, 64], // size of the shadow
    iconAnchor:   [22, 94], // point of the icon which will correspond to marker's location
    shadowAnchor: [4, 62],  // the same for the shadow
    popupAnchor:  [-3, -76] // point from which the popup should open relative to the iconAnchor
});
L.marker([27.6773517,85.309209], {icon: greenIcon}).addTo(map);

//=============================================
var markers = L.markerClusterGroup();
for(i=0;i<mapdata.length;i++){

	var marker=L.marker([mapdata[i][1], mapdata[i][2]]);
	var label="<b>"+mapdata[i][0]+"</b><br/><p>"+mapdata[i][4]+"</p><br/>"+mapdata[i][3];
	marker.bindPopup(label);
	markers.addLayer(marker);
}

map.addLayer(markers);



