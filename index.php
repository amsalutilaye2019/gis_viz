<!-- header included as php file here -->
<?php 
    include ('header.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" width="device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="bootstrap-4.6.0-dist/css/bootstrap.min.css">
    <script src="bootstrap-4.6.0-dist/js/bootstrap.bundle.min.js"></script>
    <style>
        img {
            max-width:300px;
            max-height:270px;
            border:solid 2px green;
        }
        .my-row{
            /* background: #339933; */
            margin:20px 0px 20px 0px;
            color:	white;
            padding:10px 10px;
            font-size:18px;
            background-image:linear-gradient(to right, #70db70,#339933)
        }
        .my-row a{
            font-family:Serif;
            text-align: justify;
        }
        .my-col{
            padding:0px 10px 0px 10px;
        }
         p, h5, h4{
            font-family:Serif;
            text-align: justify;
        }
        h5{
            text-decoration: underline
        }
        .container{
            margin-top:10px;
        }
        .jumbotron h4{
            font-weight:bolder;
            font-family:Serif;
        }
        .jumbotron{
            font-size:18px;
            margin-top:10px;
        }
    </style>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="bootstrap-4.6.0-dist/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
        <div class="jumbotron" style="background-color:#c2c2a3;">
            <h4>Geospatial Data Visualization</h4>
            <hr class="my-4">
            <p>
            Geospatial data visualization is one of the earliest forms of information visualizations. 
            It focuses on the relationship between data and its location to create insight.   
            Maps are the primary focus of geospatial visualizations. 
            It ranges from depicting a street, town, or park or subdivisions to showing the boundaries of a country, continent, or the whole planet. 
            It acts as a container for extra data. This allows you to create context using shapes and color to change the visual focus. 
            It helps identify problems, track change, understand trends, and perform forecasting related to specific places and times.</p>
            <p>National Data Management Center, NDMC at EPHI is producing standard datasets 
                    having GIS attributes to promote the use of GIS in health data analytics, evidence generation and to inform decision. 
                    Thus interactive and dynamic web maps are produced for dessiminating up-to-date geospatial information to users timely.
        </div>
    </div>
    <div class="container">
        <div class="row my-row justify-content-start align-items-center">
            <div class="col-md-4 my-col">
                <img src="img/hf.jpg" alt="">
            </div>
            <div class="col-md-8 my-col">
                <h5>Health Facility Mapping</h5>
                <p>Health care facilities are centers providing health care services. GIS enables for mapping their distribution across regions (space), which helps us to identify equity gaps, to support surveillance activities, emergency responses and resource allocation.
                           </p> <p>NDMC has produced Health facility maps using health facility data with GIS attributes. The health care facility map is produced using the Ethiopian Health Tier System which consists of
                    health post, health center, primary hospital, generalized hospital and specialized hospital.
                <span><a href="#" class="btn btn-primary">visualize spatial data</a></span></p>    
                
    
            </div>
        </div>
        <div class="row my-row justify-content-start align-items-center">
            <div class="col-md-4 my-col">
                <img src="img/malaria.jpg" alt="">
            </div>
            <div class="col-md-8 my-col">
                <h5>Malaria Case Rate & Death Rate</h5>
                <p>Despite major progresses have been made to improve the health status of the population through reducing the burden of malaria; 
                    it is still a major health problem in Ethiopia. It is among the 10 top leading causes of morbidity and mortality in children 
                    under the age of five and adults. Malaria is also ranked at the top of hospital based admissions, outpatient visit and mortality.</p>
                <p> NDMC has used ten years malaria surveillance  data at EPHI to map the malaria case rate and death rate. The case rate is produced as per 
                    the mid year population of each year where as the death rate is calculated as per the total number of patients for that year. 
                        <span><a href="#" class="btn btn-primary">visualize spatial data</a></span>
                </p>
            </div>
        </div>
        <div class="row my-row justify-content-start align-items-center">
            <div class="col-md-4 my-col">
                <img src="img/malaria.jpg" alt="">
            </div>
            <div class="col-md-8 my-col">
                <h5>Covid-19 Positivity and Severity</h5>
                <p>National Data Management Center, NDMC at EPHI is producing standard datasets 
                    having GIS attributes to promote the use of GIS in health data analytics, evidence generation and to inform decision. 
                    Thus interactive and dynamic web maps can be used for dessiminating up-to-date geospatial information to users timely.
                    <span><a href="#" class="btn btn-primary">visualize spatial data</a></span>
                </p>
            </div>
        </div>
    </div>
    </div>
    <!-- footer added here -->
    <?php 
    include ('footer.php');
?>
</body>
</html> 