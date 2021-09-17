<!-- header added here -->
<?php 
    include ('header.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap-grid.min.css">
    <style>
        #content{
            height:auto;
            width:auto;
            background:#f0f5f5;
            padding:10px 10px 5px 10px;
            text-align:justify;
        }
        #imgdiv{
            display:inline-block;
            border:solid none;
            margin:20px 40px 10px 40px;
            
        }
        #imgdiv p h6{
            padding:10px 20px 10px 10px;
            font-family:Serif;
            text-align:justify;
        }
        img{
            height: 270px;
            width:350px;
            float:left;
            padding-right:20px;
        }

    </style>
    <script src="jquery/jquery.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <div class="container">
        <div id="content">
            <h5>Geospatial Visualization</h5>
            <p>Geospatial visualizations are one of the earliest forms of information visualizations. They were used historically for navigation and were essential tools before the modern technological era of humanity. Data maps were first popularized in the seventeenth century and have grown in complexity and detail since then. Consider Google Maps, the sheer volume of data depicted, and the analytical pathways available to its users. Of course geospatial data visualizations do not require computational skills to generate.</p>
            <p>National Data Management Center, NDMC at EPHI is producing standard datasets having GIS attributes to promote the use of GIS in health data analytics, evidence generation and to inform decision. 
                Thus interactive and dynamic web maps can be used for dessiminating up-to-date geospatial information to users timely.</p>
        </div>
    </div>
    <div class="content">
        <div id="imgdiv">
            <p><span><img src="img/hf.jpg"><h6>Health Facility Distribution</h6>
            Health care facilities are centers providing health care services. 
            GIS enables for mapping their distribution across regions (space), 
            which helps us to identify equity gaps, to support surveillance activities, 
            emergency responses and resource allocation. NDMC has produced Health facility maps using health facility data with GIS attributes. 
            The data has been pre-processed to meet the spatial quality and standard requirements.
    </p>The map shows the number of government health facilities per 100,000 population which includes 
                Hospitals, Health Centers, Health Posts, Health Stations.<a href="#">Map visualize</a></span> </p>
        </div>
    </div>
    <!-- footer added here -->
    <?php 
    include ('footer.php');
?>
</body>
</html> 