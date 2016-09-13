/*
				for (i = 0; i < 3; i++) { 
					//marker1
					markers.push();
					markers[i] = new google.maps.Marker({
						position: new google.maps.LatLng(lat[i], lng[i])
					});
					markers[i].setMap(map);
					markers[i].setIcon("../../img/assets/icon/pinsmall.png");
					info[i] = '\
					<div style="line-height: 1.35; overflow: hidden; white-space: nowrap;">\n\
						<img src="'+
						'../../img/assets/home1.jpg'+
						'" width="206px" height="100px" alt="'+
						'foto-disini'+
						'"><br>' +
							'<h5 style="padding-left:2%;padding-right:2%"><b>'+
							'Kebun Durian Pak Slamet '+i+
							'</b></h5>' +
							'<div style="padding-left:2%;padding-right:2%">' +
							'<h6>'+
							'Sleman, Jogja'+
							'</h6>' +
							'<table style=" border-spacing: 0;border-collapse: collapse;">\n\
								<tr>\n\
									<td><b><i class="uk-icon-pagelines"></i></td> \n\
									<td>&nbsp;:&nbsp;</td> </b>\n\
									<td>'+
									'Durian Monthong'+i+
									'</td>\n\
								</tr>' +
							'<tr>\n\
									<td><b><i class="uk-icon-calculator"></i></td>\n\
									<td> &nbsp;:&nbsp;</td> </b>\n\
									<td>'+
									'1 ton perbulan'+
									'</td>\n\
								</tr>\n\
							</table><br>\n\
						</div>' +
							'<div class="uk-grid margin-bottom-5" style="padding-left:2%;padding-right:2%">\n\
							<div class="uk-width-1-2" style="margin-left:5px">\n\
								<a href="#">\n\
									<button id="close-btn'+
									i+
									'" class="uk-button white-map-btn">CLOSE</button>\n\
								</a>\n\
							</div>\n\
							<div class="uk-width-1-2" style="margin-left:-16px">\n\
								<a href="#modal" data-uk-modal="{center:true}">\n\
									<button class="uk-button green-map-btn">VIEW</button>\n\
								</a>\n\
							</div>\n\
						</div>\n\
					</div>';
					infowindows.push();
					infowindows[i] = new google.maps.InfoWindow({
						content: info[i]
					});
					var markerTemp = markers[i];
					var infoTemp = infowindows[i];
					google.maps.event.addListener(markerTemp, 'click', function () {
						infoTemp.open(map, markerTemp);
					});
					
					customInfoWindow(infoTemp);
					google.maps.event.addListener(infoTemp, 'domready', function () {
						$('#close-btn'+i).click(function () {
							infoTemp.close();
						});
					});
				}
				*/