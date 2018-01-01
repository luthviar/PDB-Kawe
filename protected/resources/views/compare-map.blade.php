<!DOCTYPE html >
  <head>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
    <meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
    <title>PDB - KAWE</title>
    <style>
      #map {
        height: 100%;
      }
	  
	  #legend {
		font-family: Arial, sans-serif;
		font-size:16px;
		background: #fff;
		padding: 10px;
		margin: 10px;
		border: 3px solid #000;
      }

      html, body {
		height: 100%;
		margin: 0;
		padding: 0;
      }

    </style>
  </head>

  <body>
    <div id="map"></div>
	<div id="legend">Legend</div>

    <script>

        function initMap() {
			var map = new google.maps.Map(document.getElementById('map'), {
			center: new google.maps.LatLng(53.07772994, -2.14538955),
			zoom: 7
			});
			var arrLatSpark1 = {{ json_encode($latSpark1) }};
			var arrLngSpark1 = {{ json_encode($lngSpark1) }};
            var arrLatSpark2 = {{ json_encode($latSpark2) }};
			var arrLngSpark2 = {{ json_encode($lngSpark2) }};

            var arrLatDatabrick1 = {{ json_encode($latDatabrick1) }};
			var arrLngDatabrick1 = {{ json_encode($lngDatabrick1) }};
            var countDatabrick1 = {{ json_encode($countDatabrick1) }};
            var arrLatDatabrick2 = {{ json_encode($latDatabrick2) }};
			var arrLngDatabrick2 = {{ json_encode($lngDatabrick2) }};
			var arrLatDatabrick3 = {{ json_encode($latDatabrick3) }};
			var arrLngDatabrick3 = {{ json_encode($lngDatabrick3) }};
            var countDatabrick3 = {{ json_encode($countDatabrick3) }};

			var color = 'FFFFFF';
			var iconBase = 'https://dummyimage.com/15x15/';
			var icons = {
				high: {
					name: 'Spark #1 - KMeans ML',
					icon: iconBase + 'ff0000/ff0000.gif'
				},
				med_end: {
					name: 'Spark #2 - KMeans MLLib',
					icon: iconBase + 'ff9500/ff9500.png'
				},
				med: {
					name: 'Databrick #1 - KMeans ML',
					icon: iconBase + 'fff200/fff200.png'
				},
				low_end: {
					name: 'Databrick #2 - Biscreting KMeans ML',
					icon: iconBase + 'bbff00/bbff00.png'
				},
				low: {
					name: 'Databrick #3 - Custom',
					icon: iconBase + '40ff00/40ff00.png'
				}
			};

            var legend = document.getElementById('legend');
            for (var key in icons) {
                var type = icons[key];
                var name = type.name;
                var icon = type.icon;
                var div = document.createElement('div');
                div.innerHTML = '<img src="' + icon + '">' + name;
                legend.appendChild(div);
            }
            map.controls[google.maps.ControlPosition.RIGHT_BOTTOM].push(legend);

            drawMap(map, '#ff0000', false, arrLatSpark1, arrLngSpark1, null);
            drawMap(map, '#ff9500', false, arrLatSpark2, arrLngSpark2, null);

            drawMap(map, '#fff200', true, arrLatDatabrick1, arrLngDatabrick1, countDatabrick1);
            drawMap(map, '#bbff00', false, arrLatDatabrick2, arrLngDatabrick2, null);
			drawMap(map, '#40ff00', true, arrLatDatabrick3, arrLngDatabrick3, countDatabrick3);
        }
		
        function drawMap(map, color, flag, arrLat, arrLng, arrCount){
            for (let index = 0; index < arrLat.length; index++) {
				var radius = new google.maps.Circle({
					strokeColor: color,
					strokeOpacity: 0.8,
					strokeWeight: 2,
					fillColor: color,
					fillOpacity: 0.35,
					map: map,
					center: {
						lat: arrLat[index],
						lng: arrLng[index]
					},
					radius: 50000
				});
                console.log(color);

				var point = new google.maps.LatLng(
					parseFloat(arrLat[index]),
					parseFloat(arrLng[index])
				);

				var infowincontent = document.createElement('div');
				if (flag) {
					var strong = document.createElement('strong');
					strong.textContent = 'Jumlah Kejahatan : ';
					strong.textContent += arrCount[index];
					infowincontent.appendChild(strong);
					infowincontent.appendChild(document.createElement('br'));
				}

				var lat = document.createElement('text');
				lat.textContent = 'Latitude : ';
				lat.textContent += arrLat[index];
				infowincontent.appendChild(lat);
				infowincontent.appendChild(document.createElement('br'));
				var lng = document.createElement('text');
				lng.textContent = 'Longitude';
				lng.textContent += arrLng[index];
				infowincontent.appendChild(lng);
				var marker = new google.maps.Marker({
					map: map,
					position: point,
					info: infowincontent
				});
				var infoWindow = new google.maps.InfoWindow;
				marker.addListener('click', function() {
					infoWindow.setContent(this.info);
					infoWindow.open(map, this);
				});
			}
        }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBu8UApuBkCiHxXgUhkSQg816w40AHEMDY&callback=initMap">
    </script>
  </body>
</html>