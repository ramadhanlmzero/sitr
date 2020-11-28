@extends('layouts.master')

@section('content')
<main id="main">
    <section class="maps mt-5 pb-0">
        <div id="maps" class="mt-3"></div>
    </section>
</main> 
@endsection
@section('css')
     <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"/>
    <style>
        #maps {
			height:100vh;
		}
    </style>
@endsection
@section('js')
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
    <script src="https://d3js.org/d3.v4.min.js"></script>
    <script src="https://npmcdn.com/geotiff@0.3.6/dist/geotiff.js"></script>
    <script src="https://ihcantabria.github.io/Leaflet.CanvasLayer.Field/dist/leaflet.canvaslayer.field.js"></script>
    <script type="text/javascript">
		var mapOptions = {
			center: [-6.913534, 112.474311],
			zoom: 15
        } 
        var maps = L.map('maps', mapOptions);
        L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token={accessToken}', {
            attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, <a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
            maxZoom: 18,
            id: 'mapbox.streets',
            accessToken: 'pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw'
        }).addTo(maps);
        d3.text("{{ url('assets/img/dalegan.tiff') }}", function (asc) {
            var s = L.ScalarField.fromASCIIGrid(asc);
            var layer = L.canvasLayer.scalarField(s).addTo(maps);

            maps.fitBounds(layer.getBounds());
        });
	</script>
@endsection