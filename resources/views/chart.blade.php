


  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chart.js Bar Chart</title>
    <!--Chart.js JS CDN--> 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.js"></script> <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Bad+Script&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Cuprum&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@500&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Luckiest+Guy&family=Open+Sans&family=Raleway&family=Roboto&display=swap" rel="stylesheet">
  </head>

  <style type="text/css">
    body{
        background-color: #FFFFFF;
    }
      #s1{
            
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
         .b1{
            margin-top: 180px;
            margin-bottom: 100px;
            background-color: #b6b8dc; 
            width: 1200px;
            height: 400px;
            margin-right: auto;
            margin-left: auto;
            
        }
        .g1{
            display: flex;
            padding-top: 20px;
            padding-left: 120px;
            padding-right: 120px;
            
        }
        .b11{
            margin-top: 180px;
            margin-bottom: 100px;
            background-color: #f8c1b8; 
            width: 1200px;
            height: 400px;
            margin-right: auto;
            margin-left: auto;
            
        }
        .g11{
            display: flex;
            padding-top: 20px;
            padding-left: 120px;
            padding-right: 120px;
            
        }
        .b21{
            margin-top: 180px;
            margin-bottom: 100px;
            background-color: rgb(62,149,205,0.1); 
            width: 1200px;
            height: 400px;
            margin-right: auto;
            margin-left: auto;
            
        }
        .g21{
            display: flex;
            padding-top: 20px;
            padding-left: 120px;
            padding-right: 120px;
            
        }
        .m1{
            display: flex;
            padding: 100px;
            background-color: #F0F8FF;
        }
  </style>
 
  <body>
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

    <div class="m1">
    <div style="padding-right: 150px;">
        <h2 id="h22" style="padding-bottom: 30px;color: #E03C31;">Health care</h2>
        <p id="p1" style="font-size: 17px; color: #820024;">Health care, health-care, or healthcare is the maintenance or improvement of health via the prevention, diagnosis, treatment, recovery, or cure of disease, illness, injury, and other physical and mental impairments in people. Health care is delivered by health professionals and allied health fields.
        </p>
        
    </div>
    <img id="img" src="https://pbs.twimg.com/media/EuAfzUVXUAAJh45.jpg" style="width: 600px;">
</div>

<div class = "b1">
    <div style="padding-top: 70px; padding-left: 120px; color: white;"><h3>Percent of patients</h3></div>
    <div class="g1" >
    <div style="width: 60%">
    <canvas class="myChart" id="myChart" height="200"></canvas>
    </div>
    <div style="padding-left: 150px; padding-top: 30px; color: white;">The gender gap is not unique to America. In fact, every country with reliable health statistics reports that women live longer than men. The longevity gap is present both in industrialized societies and in developing countries. It's a universal observation that suggests a basic difference between the health of men and women.</div>

    <script>
      var ctx = document.getElementById('myChart').getContext('2d');
      var myChart = new Chart(ctx, {
          type: 'bar',
          data: {
            labels: ["Male", "Female"],
            datasets: [{ 
                data: [86,114],
                label: "Recovered",
                borderColor: "rgb(62,149,205)",
                backgroundColor: "rgb(62,149,205,0.1)",
                borderWidth:2
              }, { 
                data: [70,30,0],
                label: "Expired",
                borderColor: "rgb(60,186,159)",
                backgroundColor: "rgb(60,186,159,0.1)",
                borderWidth:2
              }
            ]
          },
        });
    </script>
   </div>
   
    </div>

<div class = "b11">
    <div style="padding-top: 70px; padding-left: 120px; color: #820024;"><h3>Popular type of medical analysis</h3></div>
    <div class="g11" >
    <div style="width: 60%;">
    <canvas id="myChart1" height="200" ></canvas>
    </div>
    <div style="padding-left: 150px; padding-top: 30px; color: #820024;">This is a list of medical tests and procedures used to obtain health information and diagnose pathological and nonpathological conditions of the human body. This info based on statics by 2018-2021</div>

    <script>
      var ctx1 = document.getElementById('myChart1').getContext('2d');
      var myChart1 = new Chart(ctx1, {
          type: 'pie',
          data: {
            labels: ["Biochemical and clinical blood analysis","Assessment of the immune status", "Allergy diagnostics (tests for allergens)","Hormonal status"],
            datasets: [{ 
                data: [55,21,12,7],
                borderColor:[
                  "#3cba9f",
                  "#ffa500",
                  "#c45850",
                  "rgb(62,149,205)",
                ],
                backgroundColor: [
                  "rgb(60,186,159,0.1)",
                  "rgb(255,165,0,0.1)",
                  "rgb(196,88,80,0.1)",
                  "rgb(62,149,205,0.1)",
                ],
                borderWidth:2,
              }]
          },
        options: {
          scales: {
            xAxes: [{ 
               display: false,
            }],
            yAxes: [{
               display: false,
            }],
          }
        },
      });

    </script>
    </div>
    </div>

    <div class = "b21">
    <div style="padding-top: 70px; padding-left: 120px; color: rgb(62,149,205);"><h3>Total visits of the week</h3></div>
    <div class="g21" style="padding-bottom: 60;">
    <div style="width: 60%;">
    <canvas id="myChart2" height="160" ></canvas>
    </div>
    <div style="padding-left: 150px; padding-top: 30px; color: rgb(62,149,205);">This is a chart of vists our organization in this week from 5th April to 11th April 2021.</div>

    <script>
       var ctx2 = document.getElementById('myChart2').getContext('2d');
      var myChart2 = new Chart(ctx2, {
          type: 'line',
          data: {
            labels: ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"],
            datasets: [{ 
                data: [86,114,106,106,107,111,133],
                label: "Total visits of the week",
                borderColor: "#3e95cd",
                backgroundColor: "#7bb6dd",
                fill: false,
              }
            ]
          },
        });
    </script>

    </div>
    </div>
  </body>
