
var map = L.map('map').setView([27.6773517,85.309209], 15);
L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token={accessToken}', {
	maxZoom: 24,
	id: 'eq0rip.no3hg91b',
	accessToken: 'pk.eyJ1IjoiZXEwcmlwIiwiYSI6ImNpZncycDR4bTJpN3B1d2tyaGRwM3NrN3IifQ.xOe7qWLwCDbVr-edpprcdg'
}).addTo(map);
var marker = L.marker([27.6773517,85.309209]);
var label="<b>Srijanalaya</b>";
marker.bindPopup(label);
marker.addTo(map);
//=============================================
var markers = L.markerClusterGroup();
for(i=0;i<mapdata.length;i++){

	var marker=L.marker([mapdata[i][1], mapdata[i][2]]);
	var label="<b>"+mapdata[i][0]+"</b><br/><p>"+mapdata[i][4]+"</p><br/>"+mapdata[i][3];
	marker.bindPopup(label);
	markers.addLayer(marker);
}

map.addLayer(markers);


//=====================
// function onMapClick(e) {
// 	alert("You clicked the map at " + e.latlng);
// }

// map.on('click', onMapClick);




