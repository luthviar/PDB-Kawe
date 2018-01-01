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
			var arrLat = {{ json_encode($arrLat) }};
			var arrLng = {{ json_encode($arrLng) }};
			var flag = false;
			var color = 'FFFFFF';
			var iconBase = 'https://dummyimage.com/15x15/';
			var icons = {
				high: {
					name: '> 4.000.000',
					icon: iconBase + 'ff0000/ff0000.gif'
				},
				med_end: {
					name: '3.000.000 - 3.999.999',
					icon: iconBase + 'ff9500/ff9500.png'
				},
				med: {
					name: '2.000.000 - 2.999.999',
					icon: iconBase + 'fff200/fff200.png'
				},
				low_end: {
					name: '1.000.000 - 1.999.999',
					icon: iconBase + 'bbff00/bbff00.png'
				},
				low: {
					name: '0 - 999.999',
					icon: iconBase + '40ff00/40ff00.png'
				}
			};

			if ({{ json_encode($arrCount) }} === undefined || {{ json_encode($arrCount) }} === null) {
				flag = false;
			}
			else {
				var arrCount = {{ json_encode($arrCount) }};
				flag = true;
			}

			if (flag){
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
			}

			for (let index = 0; index < arrLat.length; index++) {
				if (flag){
					if (arrCount[index] > 0 && arrCount[index] <= 1000000) {
						color = '#3EFF00'; 					
					}
					else if (arrCount[index] > 1000000 && arrCount[index] <= 2000000) {
						color = '#BDFF00'; 
					}
					else if (arrCount[index] > 2000000 && arrCount[index] <= 3000000) {
						color = '#FFF300'; 
					}
					else if (arrCount[index] > 3000000 && arrCount[index] <= 4000000) {
						color = '#FF9300'; 
					}
					else if (arrCount[index] > 4000000) {
						color = '#FF0000'; 
					}
					else {
						color = '#FFFFFF';					
					}
				}
				else {
					color = '#FF0000';
				}

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