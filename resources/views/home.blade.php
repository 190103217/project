@extends('layout')
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
            
            height: 750px;
        }
        .ba1 >h1{
            margin: 0;
            padding-top: 230px;
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
            margin-bottom: 100px;
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
        .m2{
            background-image: url(https://www.kickative.com/wp-content/uploads/2020/04/networking_illustration.png);
            background-size: cover;
            background-repeat: no-repeat;
            height: 550px;
            background-position-y: -400px;
        }
    <title>First task</title>
</style>

@section('content')
<body>
    <div class="ba1">
        <h1 style="color: black; padding-left: 40px; font-family: 'Ubuntu', sans-serif;">Best health care service!</h1>
        <button style="border-radius: 20px; color: white; padding: 3px 29px; background-color: #6699ff; border:1px solid white; font-size:25px;margin-top: 40px; margin-left: 50px; ">Learn more</button>
    </div>
    <div id="s1">
        
        <h3 style="padding-left: 100px; margin-top: 110px; font-family: 'Ubuntu', sans-serif;">Services</h3>
        
    </div>
      
        <div class="box">
     
        <div class="box-it">
            <img src="https://preview.pixlr.com/images/800wm/1077/1/1077100334.jpg" alt="photo" style="width: 230px; height: 200px; border-radius: 10%;cursor:pointer;" onclick="change3()">
            <b><p class="p1" style="font-size: 18px;text-align: center;">Appintment</p></b>           
        </div>

        <div class="box-it">
            <img src="https://media.istockphoto.com/vectors/woman-is-consulting-with-a-doctor-in-the-office-vector-id1248555232?k=6&m=1248555232&s=612x612&w=0&h=We1Sjm1AqIz7FX2l7TsYg2MRrs3WX2VOOxACBJOFpvc=" alt="photo" style="width: 230px; height: 200px; border-radius: 10%;cursor:pointer;" onclick="change4()">
            <b><p class="p1" style="font-size: 18px;text-align: center;">Results</p></b>
        </div>

        <div class="box-it">
            <img src="https://cdni.iconscout.com/illustration/premium/thumb/hospital-and-medical-assistants-and-ambulance-2681143-2233471.png" alt="photo" style="width: 230px; height: 200px; border-radius: 10%;cursor:pointer;"onclick="change2()">
            <b><p class="p1" style="font-size: 18px;text-align: center;">Location</p></b>       
        </div>
    </div>
    <div class = "b1">
    <div class="g1">
    <div>   
    <h1 style="font-family: 'Luckiest Guy', cursive; color: #9400D3;">Health care</h1>
    <p style="color: #DDA0DD;">Health care, health-care, or healthcare is the maintenance or improvement of health via the prevention, diagnosis, treatment, recovery, or cure of disease, illness, injury, and other physical and mental impairments in people. Health care is delivered by health professionals and allied health fields.</p>
   </div>
   </div>
   <img id="img4" src="images/clip-1075.png">
    </div>

    <div class="m2">
        <h1 style="text-align: center;font-family: 'Ubuntu', sans-serif; color: #E9967A; text-transform: uppercase; padding-top: 12px; ">create your own group</h1>
    </div>
</body>
@endsection
