<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" width="device-width, initial-scale=1.0, shrink-to-fit=no">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="bootstrap-4.6.0-dist/css/bootstrap.min.css">
    <script src="bootstrap-4.6.0-dist/js/bootstrap.bundle.min.js"></script>
    <style>
        #header{
            position:sticky;
            margin:5px 10px;
            height:50px;
            top:0;
            background-image:linear-gradient(to right, #99e699, #29a329);
            z-index:1;
        }
        
        #header h3, a{
            padding-top:5px;
            font-family:Serif;
            font-weight:bolder;
            text-align:center;
        }     
        #header .row a{
            color:brown;
            text-decoration:underline;
        }

        #header .row a:hover{
            color:#000099;
        }
        .row .h-col{
            margin:-10px;
        }
    </style>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="bootstrap-4.6.0-dist/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container-fluid" id="header">
        <div class="row justify-content-center align-items-center">
            <div class="col-md-8">
                <h3>NDMC Geospatial Data Visualization</h3>
            </div>
            <div class="col-md-1 h-col">
                <a href="https://ndmc.ephi.gov.et/" target="_blank" rel="noopener noreferrer">NDMC</a>
            </div>
            <div class="col-md-1 h-col">
                <a href="https://rtds.ephi.gov.et/public/" target="_blank" rel="noopener noreferrer">HDAV</a>
            </div>
            <div class="col-md-1 h-col">
                <a href="https://rtds.ephi.gov.et/public/" target="_blank" rel="noopener noreferrer">RTDS</a>
            </div>
        </div>
    </div>
</body>
</html>