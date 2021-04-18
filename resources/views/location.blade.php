@extends('layout')
<head>
  <link href="https://fonts.googleapis.com/css2?family=Luckiest+Guy&family=Open+Sans&family=Raleway&family=Roboto&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Bad+Script&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Cuprum&display=swap" rel="stylesheet">
<script src="https://api-maps.yandex.ru/2.1/?lang=en_RU&amp;apikey=edd33cae-b1c6-4d9a-b377-00f7e61dcfb8" type="text/javascript"></script>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
  
</head>
<style type="text/css">
	body{
			margin: 0;

		}
		button{
			font-family: 'Cuprum', sans-serif;
		}
		.header{
			display: flex;
			justify-content: space-around;
			text-transform: uppercase;
			padding-top: 15px;
			padding-bottom: 15px;
			padding-left: 70px;
			font-size: 15px;
			color: #820024;
			cursor:pointer;
			margin-top: -57px;
		}
		#btn1{
			background-color: transparent;
			border:1px solid #820024;
		}
		#logo1{
			font-size: 30px;
			color: #820024;
			cursor:pointer;
			text-transform: uppercase;
			padding: 15px 20px;
		}
		.nv{
			float: right;
		}
		#logo{
			font-size: 30px;

		}
		#btn4{
			background-color: transparent;
			border:1px solid white;
		}
		label{
			margin: -62px 30px 0 0;
			font-size: 40px;
			color: #820024;
			cursor: pointer;
			display: none;
		}
		#toggle{
			display: none;
		}
		#map{
		   width:60%;
		   height: 500px;
		   height: 785px;
		   float: right;
		   display: flex;
		}
		.locations-list__item{
		    width: 400px;
		    margin: auto;
		    padding: 1.25rem;
		    display: block;
		    color: #3282b8;
		    border-bottom: 2px solid rgba(0,0,0,.1);
		    
		}
		.bakeryloc{
			display: block;
			width: 40%;
			background-color: #d6e6f2;
		}
		</style>
@section('content')
<body>
	<div class="s1" style="display: flex;">
		<div class="bakeryloc" style="">
	<h1 style="color: #07689f; font-family: 'Luckiest Guy', cursive; padding-top: 100px; text-align: center;">{{ trans('sentence.Organization locations')}}</h1>
	<div id="locations-list" class="locations-list" style="padding-top: 40px;">
					<div class="locations-list__item">
						<h3 class="trailer--quarter">Santa Monica </h3>
						<span class="location-list__meta">Santa Monica</span>
						<span class="location-list__meta">{{ trans('sentence.open until 6:00 pm')}}</span>
						<p style="margin-top: -26px; font-size: 40px; float: right;">&#707;</p>
					</div>
					<div class="locations-list__item">
						<h3 class="trailer--quarter">Beverly Hills</h3>
						<span class="location-list__meta">Beverly Hills</span>
						<span class="location-list__meta">{{ trans('sentence.open until 6:00 pm')}}</span>
						<p style="margin-top: -26px; font-size: 40px; float: right;">&#707;</p>
					</div>
					<div class="locations-list__item">
						<h3 class="trailer--quarter">Los Angles</h3>
						<span class="location-list__meta">Los Angles</span>
						<span class="location-list__meta">{{ trans('sentence.open until 6:00 pm')}}</span>
						<p style="margin-top: -26px; font-size: 40px; float: right;">&#707;</p>
					</div>
					<div class="locations-list__item">
						<h3 class="trailer--quarter">Miami</h3>
						<span class="location-list__meta">Miami</span>
						<span class="location-list__meta">{{ trans('sentence.open soon')}}</span>
						<p style="margin-top: -26px; font-size: 40px; float: right;">&#707;</p>
					</div>
		</div>
</div>
	<div id="map"></div>
</div>

</div>
@endsection
	<script type="text/javascript">
  ymaps.ready(init);

function init() {
    var myMap = new ymaps.Map("map", {
            center: [34.024212, -118.406475],
            zoom: 11
        }, {
            searchControlProvider: 'yandex#search'
        });
    var myGeoObject = new ymaps.GeoObject({   
            geometry: {                
                type: "LineString",
               
                coordinates: [
                    [34.072235, -118.243683],
                    [34.083620, -118.400352],
                    [34.034212, -118.496475]
                ]
            },
            
            properties:{
                
                hintContent: "I'm a geo object",
                
                balloonContent: "You can drag me"
            }
        }, {
           
            draggable: true,
         
            strokeColor: "#3282b8",
            
            strokeWidth: 5
        });

    myMap.geoObjects
        .add(myGeoObject)
        .add(new ymaps.Placemark([34.034212, -118.496475], {
            balloonContent: 'bakery in Santa Monica'
        }, {
            preset: 'islands#greenDotIconWithCaption',
            iconColor: '#3282b8'
        }))
        .add(new ymaps.Placemark([34.083620, -118.400352], {
            balloonContent: 'bakery in Beverly Hills'
        }, {
            preset: 'islands#greenDotIconWithCaption',
            iconColor: '#3282b8'
        }))
         .add(new ymaps.Placemark([34.072235, -118.243683], {
            balloonContent: 'bakery in Los Angles',
            
        }, {
            preset: 'islands#greenDotIconWithCaption',
            iconColor: '#3282b8'
        }))      
}

</script>