<!-- includes
1. styling admin boundaries
2. changing default all point layers styles
3. popup for admins and points 
 -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="leaflet.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Leaflet.awesome-markers/2.0.2/leaflet.awesome-markers.css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="bootstrap/css/leaflet.zoomhome.css"/>
    <link rel="stylesheet" href="bootstrap/css/Control.MousePosition.css">
    <!--this is new-->

    <script src="leaflet.js"></script>
    <script src="jquery/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Leaflet.awesome-markers/2.0.2/leaflet.awesome-markers.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="bootstrap/js/leaflet.zoomhome.min.js"></script>
    <script src="bootstrap/js/Control.MousePosition.js"></script>
    <script src="json/region.js"></script>
    <script src="json/zone.js"></script>
    <script src="json/woreda.js"></script>
    <script src="json/covidlab.js"></script>
    <script src="json/quarantine.js"></script>
    <script src="json/healthcenter.js"></script>
    <style type="text/css">
    #map {
        width: auto;
        height: 540px;
        margin-left: 20px;
        margin-bottom: 10px;
        margin-top: auto;
    }
    /* This is new */
    
    /* button {
        width: 100px;
    } */
    </style>
</head>
<body class="container-fluid" style="margin-top:10px; margin-bottom:5px;">
    <div class="container-fluid" style="background-color:#51bcc8; width:100%; margin-bottom:5px;">
        <h6  style="color:Black; font-weight:bolder; text-align:center; padding-top:2px; padding-bottom:2px;">National Data Management Center Geo-Spatial Viz</h6>
    </div>
    <div class="row">
        <div class="col-md-11 bg-light" id="map">
            <!-- map -->
        </div>
        <!-- <div class="col-md-3 bg-white" id="side-map">
            <label for="" style="margin-top:20px; font-weight:bolder;">Select Component</label><br>
            <select id="component" style="margin-top:5px; margin-bottom:5px; visibility: visible; padding: 5px;">
                <option value="All">All</option>
                <option value="comp1">Component1</option>
                <option value="comp2">Component2</option>
                <option value="comp3">Component3</option>
                <option value="comp4">Component4</option>
            </select><br>
            <button type="submit" id="cbutton" class="btn btn-primary" style="margin-top:10px; visibility: visible">Submit</button> -->
        <script>
            var damicon = L.icon({
            iconUrl:'images/dam.png',
            iconSize: [12,12],
        })

        var allicon = L.icon({
            iconUrl:'images/all.png',
            iconSize: [12,12],
        })

        var watericon = L.icon({
            iconUrl:'images/water.png',
            iconSize: [12,12],
        })
        
        var healthc = L.geoJson(healthcenter,{
            pointToLayer: function(feature, latlng) {
                return L.marker(latlng, {
                    icon: allicon
                }).on('click', function() {
                    this.bindPopup(feature.properties.Name);
                });
            }
        });

        var covid19 = L.geoJson(covidlab,{
            pointToLayer: function(feature, latlng) {
                return L.marker(latlng, {
                    icon: damicon
                })
            }
        });

        var quarantinec = L.geoJson(quarantine,{
            pointToLayer: function(feature, latlng) {
                return L.marker(latlng, {
                    icon: watericon
                })
            }
        });
    //possible colors 'red', 'darkred', 'orange', 'green', 'darkgreen', 'blue', 'purple', 'darkpuple', 'cadetblue'
    /* var cafeIcon = L.AwesomeMarkers.icon({
        prefix: 'fa', //font awesome rather than bootstrap
        markerColor: 'red', // see colors above
        icon: 'coffee' //http://fortawesome.github.io/Font-Awesome/icons/
    }); */
    var national = new L.geoJson(null,{style:{
        fillColor: 'none',
        weight: 3,
        opacity: 1,
        color: 'black',  //Outline color
        fillOpacity: 0.7
    }});
    $.ajax({
                dataType: "json",
                url: "json/national.geojson",
                success: function(data) {
                    $(data.features).each(function(key, data) {
                        national.addData(data);
                    });
                }
                }).error(function() {});

    /* function pop(feature, layer) {
    // does this feature have a property named popupContent?
       return layer.bindPopup(feature.properties.name);
} */

//Region
var region = L.geoJson(region_data,{
            style:{
        fillColor: 'transparent',//creates a popup inside a polygon
        weight: 2,
        opacity: 1,
        color: 'black',  //Outline color
        fillOpacity: 0.7
    },    onEachFeature: function(feature, layer) {
        if (feature.properties && feature.properties.name) {
        layer.bindPopup(feature.properties.name);
    }
        // layer.bindPopup(feature.properties.name);
}
        })
        // map.fitBounds(feature.getBounds());
//Zone
var zone = L.geoJson(zone_data,{
            style:{
        fillColor: 'transparent',
        weight: 2,
        opacity: 1,
        color: 'black',  //Outline color
        fillOpacity: 0.7
    },    onEachFeature: function(feature, layer) {
        layer.bindPopup(feature.properties.NAME_2);
        layer.bindPopup('<p>Region: '+feature.properties.NAME_1+'</p1><p>Zone: '+feature.properties.NAME_2+'</p>');
}
        })
        
//Woreda
var woreda = L.geoJson(woreda_data,{
            style:{
        fillColor: 'transparent',
        weight: 2,
        opacity: 1,
        color: 'black',  //Outline color
        fillOpacity: 0.7
    },    onEachFeature: function(feature, layer) {
        // layer.bindPopup(feature.properties.name);
        layer.bindPopup('<p>Region: '+feature.properties.REGIONNAME+'</p1><p>Zone: '+feature.properties.ZONENAME+'</p1><p>Woreda: '+feature.properties.WOREDANAME+'</p>');
}
        })
                // var admin = L.layerGroup([national]);
                var admin1 = L.layerGroup([region]);
                var admin2 = L.layerGroup([zone]);
                var admin3 = L.layerGroup([woreda]);
                var hc = L.layerGroup([healthc]);
                var covid = L.layerGroup([covid19]);
                var qr = L.layerGroup([quarantinec]);

    var googleSat = L.tileLayer('http://{s}.google.com/vt/lyrs=s&x={x}&y={y}&z={z}',{
            maxZoom: 20,
            subdomains:['mt0','mt1','mt2','mt3']
            });
    /* var mapTiler = L.tileLayer('https://api.maptiler.com/maps/basic/{z}/{x}/{y}@2x.png?key=IUeCNYM9SGc3rWC9OKo3', {
            attribution: '<a href="https://www.maptiler.com/copyright/" target="_blank">&copy; MapTiler</a> <a href="https://www.openstreetmap.org/copyright" target="_blank">&copy; OpenStreetMap contributors</a>'
             });
    var Stadia_Outdoors = L.tileLayer('https://tiles.stadiamaps.com/tiles/outdoors/{z}/{x}/{y}{r}.png', {
            maxZoom: 20,
            attribution: '&copy; <a href="https://stadiamaps.com/">Stadia Maps</a>, &copy; <a href="https://openmaptiles.org/">OpenMapTiles</a> &copy; <a href="http://openstreetmap.org">OpenStreetMap</a> contributors'
            }); */
    var OpenTopoMap = L.tileLayer('https://{s}.tile.opentopomap.org/{z}/{x}/{y}.png', {
            maxZoom: 17,
            attribution: 'Map data: &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, <a href="http://viewfinderpanoramas.org">SRTM</a> | Map style: &copy; <a href="https://opentopomap.org">OpenTopoMap</a> (<a href="https://creativecommons.org/licenses/by-sa/3.0/">CC-BY-SA</a>)'
            });
        // map.fitBounds(feature.getBounds());
        // .setView([38.36, 12.45], 5);
        // .addLayer(googleSat)
    var map = L.map('map', {
            center: [9.0141, 38.7054],
            zoom: 6,
            layers:[national,googleSat],
            zoomControl: false
            })

    var baseMaps = {
            'Google Earth': googleSat,
            /* 'Out Doors': Stadia_Outdoors,
            'Map Tiler': mapTiler, */
            'Open Topo Map': OpenTopoMap
            // 'National':region 

    }
    var overlay = { 
            // 'National':admin,
            'Region':admin1,
            'Zone':admin2,
            'Woreda':admin3,
            'Health Center':hc,
            'Covid-19 Lab':covid,
            'Quarantine Center':qr

        }

    L.control.layers(baseMaps, overlay).addTo(map);
    L.control.mousePosition().addTo(map);
    L.control.scale({position:'bottomleft', metric:true}).addTo(map);
    L.Control.zoomHome().addTo(map);

    </script>
    </div>
    <div class="container-fluid" style="height:auto; background-color:#51bcc8">
            <p class="font-wight-bold" style="color:black; text-align:center;">Copyright &copy; 2021, NDMC</p>  
    </div>
</div>
</body>
</html>