@extends('layout')
<head>
  <link href="https://fonts.googleapis.com/css2?family=Luckiest+Guy&family=Open+Sans&family=Raleway&family=Roboto&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Bad+Script&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Cuprum&display=swap" rel="stylesheet">
</head>
<style>
        body{
            margin: 0;
            background-color: #ffffff;
        }
        button{
            font-family: 'Cuprum', sans-serif;
        }
        .header{
            display: flex;
            justify-content: flex-end;
            padding: 20px;
            font-size: 18px;
            font-family: 'Ubuntu', sans-serif;
            text-indent: 30px;
            padding-right: 150px;
            cursor:pointer;
            
        }
        .ba1{
            background-image: url(images/back.JPEG);
            background-size: cover;
            background-repeat: no-repeat;
            
            height: 771px;
        }
        .ba1 >h1{
            margin: 0;
            padding-top: 290px;
        }
        .w1{
            border:1px solid white;
            width: 400px;
            padding: 20px 0 20px 0;
            text-align: center;
            color: white;
            margin-top: 20px;
            margin-right: auto;
            margin-left: auto;
        }
         .box{
             display: flex;
             justify-content: space-around;
             flex-wrap: wrap;
         }
         .box-it{
            background-attachment: fixed;
            margin-bottom:50px;
            
         }
         .box-it button{
             background-color: #820024;
             border-radius: 20px;
             padding: 3px 29px;
             color: white;
             ;
         }
         .p1{
            padding-top: 20px;
         }
         #s1{
            padding: 30px;
         }
         .b1{
            margin-top: 180px;
            margin-bottom: 200px;
            background-color: #E6E6FA; 
            width: 1200px;
            height: 400px;
            margin-right: auto;
            margin-left: auto;
            
        }
        .g1{
            padding-left: 700px;
            padding-top: 80px;
            padding-right: 80px;
            
        }
        #img4{
            position: absolute;
            margin-top: -390px;
            margin-left: 80px;
            width: 450px;
            height: 650px;
        }
        .k1{
            margin-top: 180px;
            margin-bottom: 200px;
            background-color: #cbf1f5; 
            width: 1200px;
            height: 400px;
            margin-right: auto;
            margin-left: auto;
            
        }
        .n1{
            padding-left: 700px;
            padding-top: 80px;
            padding-right: 80px;
            
        }
        #img5{
            position: absolute;
            margin-top: -370px;
            margin-left: 140px;
            width: 350px;
            height: 500px;
        }
    <title>First task</title>
</style>

@section('content')
<body>
    <div class="ba1">
        <h1 style="color: black; padding-left: 40px; font-family: 'Ubuntu', sans-serif;">{{ trans('sentence.Best health care service!')}}</h1>
        <a href="chart"><button style="border-radius: 20px; color: white; padding: 3px 29px; background-color: #6699ff; border:1px solid white; font-size:25px;margin-top: 40px; margin-left: 50px; ">{{ trans('sentence.Learn more')}}</button></a>
    </div>
    <div id="s1">
        
        <h3 style="padding-left: 100px; margin-top: 110px; font-family: 'Ubuntu', sans-serif;">{{ trans('sentence.Services')}}</h3>
        
    </div>
      
        <div class="box">
     
        <div class="box-it">
            <a href="email" style="text-decoration: none; color: black;">
            <img src="https://preview.pixlr.com/images/800wm/1077/1/1077100334.jpg" alt="photo" style="width: 230px; height: 200px; border-radius: 10%;cursor:pointer;" onclick="change3()">
            <b><p class="p1" style="font-size: 18px;text-align: center;">{{ trans('sentence.Appointment')}}</p></b>   
             </a>       
        </div>

        <div class="box-it">
            <a href="searc" style="text-decoration: none; color: black;">
            <img src="https://media.istockphoto.com/vectors/woman-is-consulting-with-a-doctor-in-the-office-vector-id1248555232?k=6&m=1248555232&s=612x612&w=0&h=We1Sjm1AqIz7FX2l7TsYg2MRrs3WX2VOOxACBJOFpvc=" alt="photo" style="width: 230px; height: 200px; border-radius: 10%;cursor:pointer;" onclick="change4()">
            <b><p class="p1" style="font-size: 18px;text-align: center;">{{ trans('sentence.Results')}}</p></b>
        </a>
        </div>

        <div class="box-it">
            <a href="location" style="text-decoration: none; color: black;">
            <img src="https://cdni.iconscout.com/illustration/premium/thumb/hospital-and-medical-assistants-and-ambulance-2681143-2233471.png" alt="photo" style="width: 230px; height: 200px; border-radius: 10%;cursor:pointer;"onclick="change2()">
            <b><p class="p1" style="font-size: 18px;text-align: center;">{{ trans('sentence.Location')}}</p></b> 
            </a>      
        </div>
    </div>
    <div class = "b1">
    <div class="g1">
    <div>   
    <h1 style="font-family: 'Luckiest Guy', cursive; color: #9400D3;">{{ trans('sentence.Health care')}}</h1>
    <p style="color: #DDA0DD;">{{ trans('sentence.Health care, health-care, or healthcare is the maintenance or improvement of health via the prevention, diagnosis, treatment, recovery, or cure of disease, illness, injury, and other physical and mental impairments in people. Health care is delivered by health professionals and allied health fields.')}}</p>
   </div>
   </div>
   <img id="img4" src="images/clip-1075.png">
    </div>
    <div style="display: flex; ">
    <div style="width: 34%; background-color: #cadefc; padding: 100px 60px; height: 770px; ">
        <h1 style="font-family: 'Luckiest Guy', cursive; color:#f9f3f3;">{{ trans('sentence.Quick results')}}</h1>
        <img src="images/pale-doctor.png" style="width:400px; height: 350px; margin-top: 60px;">
    </div>
    <div style="width: 33%; background-color: #c3bef0; padding: 100px 40px; height: 770px; ">
        <h1 style="font-family: 'Luckiest Guy', cursive; color:#f9f3f3;">{{ trans('sentence.Best specialits')}}</h1>
        <img src="images/clip-medical-doctor.png" style="width:430px; height: 440px; margin-top: 30px;">
    </div>
    <div style="width: 33%; background-color: #cca8e9; padding: 100px 40px; height: 770px; ">
        <h1 style="font-family: 'Luckiest Guy', cursive; color:#f9f3f3;">{{ trans('sentence.Good communication')}}</h1>
        <img src="images/clip-doctor-sent-me-a-message.png" style="width:400px; height: 350px; margin-top: 50px;">
    </div>
</div>

<div class = "k1">
    <div class="n1">
    <div>   
    <h1 style="font-family: 'Luckiest Guy', cursive; color: #5aa897;">{{ trans('sentence.Largest Biomedical Academic Research')}}</h1>
    <p style="color: #8fd9a8;">{{ trans('sentence.Northwestern is the fastest-growing research enterprise among all U.S. medical schools – climbing from 39th to 15th in National Institutes of Health funding since 2002. The new center provides much-needed biomedical research space to continue Northwestern’s projected growth.')}}</p>
   </div>
   </div>
   <img id="img5" src="images/clip-doctor-and-patient.png">
    </div>
</body>
@endsection
