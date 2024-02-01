<?php
/*
Template Name: map-test-Anton
*/
?>




<?php
get_header();
?>








<style>
    #map {
        width: 100%;
        height: 700px;
    }
    .map-container {
        margin-bottom: 50px;
    }
    </style>

<div class="map-container">
    <div id="map"></div>
</div>



<script type="text/javascript" src="https://api-maps.yandex.ru/2.1/?load=package.full&lang=ru-RU"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script>
    ymaps.ready(init);
    function init() {
        var myMap = new ymaps.Map('map', {
            center: [55.76, 37.64],
            zoom: 11
        }, {
            searchControlProvider: 'yandex#search'
        });
        $.getJSON( "/wp-content/uploads/points.json", function( data ) {
            objectManager = new ymaps.ObjectManager({
                clusterize: true,
                gridSize: 50,
                clusterDisableClickZoom: false
            });
            objectManager.clusters.options.set('preset', 'islands#invertedNightClusterIcons');
            myMap.geoObjects.add(objectManager);
            objectManager.add(data);
        });
    }
</script>

    <?php
get_footer();
?>








