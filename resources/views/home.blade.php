@extends('layout')
<head>
	<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
<!--Get your own code at fontawesome.com-->
 <script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js">
      </script>
      
      <script>
         function getMessage() {
            $.ajax({
               type:'POST',
               url:'getmsg',
               data:'_token = <?php echo csrf_token() ?>',
               success:function(data) {
                  $("#msg").html(data.msg);
               }
            });
         }
      </script>
</head>
<style type="text/css">
	body{
			margin: 0;
			background-color: white;
		}
		.ba1{
			background-image: url(https://24smi.org/public/media/news/2017/09/07/yFW6T37u9gJ1_uchenye-nashli-sviaz-mezhdu-smertnostiu-i-dnem-pop.jpg);
			background-size: cover;
			background-repeat: no-repeat;
			background-attachment: fixed;
			height: 550px;
			background-position-y: -200px;
		}
		.ba1 >h1{
			margin: 0;
			padding-top: 230px;
        }
        .header1{
        	margin: 0;
			display: flex;
			text-align: center;
			justify-content: space-around;
			text-transform: uppercase;
			font-size: 35px;
			color: #87CEEB;
			cursor:pointer;
			background-color: white;
			padding: 30px;
		}
		.m1{
			display: flex;
			padding: 100px;
			background-color: #87CEEB;
		}
			#img{
				height: 350px;
				width: 100%;
			}
			#inone{
				margin-top: 25px;
				width: 200px;
				height: 200px;
				padding-bottom: 30px;
			}
			.btnBack{
				border-radius: 40px; 
				padding: 3px 29px; 
				background-color: white; 
				border:1px solid white; 
				font-size:25px;
				margin-top: 40px; 
				margin-left: 50px; 
				color: #87CEEB;
			}

</style>
@section('content')
<div class="ba1">
		<h1 style="color: #4682B4; padding-left: 40px; font-family: 'Ubuntu', sans-serif;">{{ trans('sentence.Our teams lead the way to better medicine.')}}</h1>
		<p style="color: #4682B4;padding-top: 20px; padding-left: 40px; font-family: 'Ubuntu', sans-serif;">{{ trans('sentence.See how Northwestern Medicines physicians collaborate to solve the toughest cases.')}}</p>
		<button style="border-radius: 20px; padding: 3px 29px; background-color: white; border:1px solid white; font-size:25px;margin-top: 40px; margin-left: 50px; color: #87CEEB;">{{ trans('sentence.Learn now')}}</button>
	</div>
	<div class="header1">
	    
		<div onclick="change(this)" onmouseover="big1(this)" onmouseout="sml1(this)">
			<i style="color:#87CEEB;" class="fas fa-user-md"></i> 
		<h4 style="padding-top: 15px;">{{ trans('sentence.Find results')}}</h4>
	</div>
		<div onclick="change(this)" onmouseover="big1(this)" onmouseout="sml1(this)">
		 <i style="color:#87CEEB;" class="fas fa-capsules"></i>
		<h4 style="padding-top: 15px;">{{ trans('sentence.pharmacy')}}</h4>
	</div>
		<div onclick="change(this)" onmouseover="big1(this)" onmouseout="sml1(this)">
			<i style="color:#87CEEB;" class="fas fa-map-marker-alt"></i>
		<h4 style="padding-top: 15px;">{{ trans('sentence.Our location')}}</h4>
	</div>
</div>
<div class="m1">
	<div style="padding-right: 150px;">
		<h2 id="h22" style="padding-bottom: 30px;color: #B22222;">{{ trans('sentence.COVID-19 Resource Center')}}</h2>
		<div id = 'msg' style="font-size: 17px; color: #B22222;">{{ trans('sentence.Now more than ever, better medicine matters. Get the latest information on how COVID-19 may affect you, including vaccination, testing, symptoms, treatment, safety and current visitor policies.')}}</div>
		<img id="inone" src="https://pngimg.com/uploads/attention/attention_PNG16.png">
		<?php
         echo Form::button('new information', ['onClick'=>'getMessage()', 'style' => 'border-radius: 20px; padding: 3px 29px; background-color: white; border:1px solid #DAA520; font-size:20px;margin-top: 20px;text-transform: uppercase; color: #DAA520']);
      ?>
	</div>
	<img id="img" src="https://img.pravda.com/images/doc/a/f/afe77c7-b09600d-covid-19-21.jpg">
</div>
<div class="blog">
	<div class="blog1">
		
	</div>
	<div class="blog2"></div>
</div>
@endsection