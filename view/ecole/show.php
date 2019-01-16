<!DOCTYPE html>
<head>
	<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate">
    <meta http-equiv="Pragma" content="no-cache">
    <meta http-equiv="Expires" content="0">

    <title>Ecole El-Nadjah</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href=<?php echo '"'.BASE_URL.'/public/css/bootstrap.min.css"'; ?>>
	<link rel="stylesheet" type="text/css" href=<?php echo '"'.BASE_URL.'/public/css/school-style.css"'; ?>>
</head>
<body class="body">
    <header>
        <div class="container">
            <div class="school-logo-area">
                <img src=<?php echo '"'.BASE_URL.'/public/assets/logo-school.png"'; ?> class="logo">
                <h1><?php echo $ecole->nom; ?></h1>
            </div>
            <div class="slideshow">
                <img src=<?php echo '"'.BASE_URL.'/public/assets/slides-school/slide-img-01.jpg"'; ?> class="slide">
                <img src=<?php echo '"'.BASE_URL.'/public/assets/slides-school/slide-img-02.jpg"'; ?> class="slide">
                <img src=<?php echo '"'.BASE_URL.'/public/assets/slides-school/slide-img-03.jpg"'; ?> class="slide">
                <img src=<?php echo '"'.BASE_URL.'/public/assets/slides-school/slide-img-04.jpg"'; ?> class="slide">
            </div>
            <nav class="menu">
                <ul class="nav">
                	<?php 
                		foreach ($typeFormation as $type) {
                			echo '<li class="nav-item">';
		                        echo '<a class="nav-link active" href="#">'.$type->designation.'</a>';
		                    echo '</li>';
                		}
                	?>
                </ul>
                <div class="form-group has-search">
                    <span class="fa fa-search form-control-feedback"></span>
                    <input type="text" class="form-control" id="search-input" placeholder="Search">
                </div>
            </nav>
        </div>
    </header>
    <main>
        <section class="formations">
            <div class="container">
                <h2>Liste des formations</h2>
                <div class="table">
                    <!-- Formations array -->
                    <table class="tableau table-bordered" id="table">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col">Formations</th>
                                <th scope="col">Volume horaire (H)</th>
                                <th scope="col">Prix HT (DA)</th>
                                <th scope="col">Taxe (%)</th>
                                <th scope="col">Prix TTC (DA)</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                                foreach ($typeFormation as $type) {
                                	foreach ($formations as $formation) {
                                		if ($formation->id_type==$type->id) {
                                			echo '<tr>';
		                                        echo '<th>'.$formation->designation.'</th>';
		                                        echo '<td>'.$formation->vol_hor.'</td>';
		                                        echo '<td class="ht">'.$formation->prix_ht.'</td>';
		                                        echo '<td class="taxe">'.$formation->taxe.'</td>';
		                                        echo '<td class="ttc"></td>';
		                                    echo '</tr>';
                                		}
                                	}
                                }
                            ?>
                        </tbody>
                    </table>
                    <!-- End Formations array -->
                </div>
            </div>
        </section>
        <section class="video">
        </section>
        <section class="add-comment">
            <div class="container">
                <a class="btn btn-primary" href="#" role="button">
                    <i data-feather="message-square"></i>
                    <span>Commenter</span>
                </a>
            </div>
        </section>
    </main>
    <div id="map"></div>
    <button class="btn" id="get">Obtenir le chemin</button>
    <script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDb8yMqeuYGS5nZCevAh-0KGG0XK5I3SfI&callback=initMap">
    </script>
    <script>
        // Initialize and add the map
        function initMap() {
            var pointA = new google.maps.LatLng(36.7098628, 3.1595939);
            var pointB = new google.maps.LatLng(36.7596098, 2.893234);
            mapOptions = {
                zoom: 13,
                center: pointA
            };
            map = new google.maps.Map(document.getElementById('map'), mapOptions);
            directionsService = new google.maps.DirectionsService,
            directionsDisplay = new google.maps.DirectionsRenderer({
                map: map
            }),
            markerA = new google.maps.Marker({
                position: pointA,
                title: "point A",
                label: "A",
                map: map
            }),
            markerB = new google.maps.Marker({
                position: pointB,
                title: "point B",
                label: "B",
                map: map
            });
            calculateAndDisplayRoute(directionsService, directionsDisplay, pointA, pointB);
        }
        
        function calculateAndDisplayRoute(directionsService, directionsDisplay, pointA, pointB) {
        directionsService.route({
            origin: pointA,
            destination: pointB,
            travelMode: google.maps.TravelMode.DRIVING
        }, function(response, status) {
            if (status == google.maps.DirectionsStatus.OK) {
            directionsDisplay.setDirections(response);
            } else {
            window.alert('Directions request failed due to ' + status);
            }
        });
        }

        initMap();

    </script>
    <footer class="footer">

    </footer>

    <script type="text/javascript" src=<?php echo '"'.BASE_URL.'/public/js/jquery-3.3.1.js"'; ?>></script>
    <script type="text/javascript" src=<?php echo '"'.BASE_URL.'/public/js/bootstrap.min.js"'; ?>></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://unpkg.com/feather-icons"></script>
    <script type="text/javascript" src=<?php echo '"'.BASE_URL.'/public/js/script.js"'; ?>></script>
</body>