<!DOCTYPE html>
<html lang="en">
<head>
    <title>
        CSS combinators
    </title>
    <style>
        h1,p{
            color:red;
        }
        body h1 p{
            color:brown;
        }
       #class1 .myclass1 h1 p{
            color:green;
        }
        .myclass2 h1 p{
            border:solid 2px;
        }
        div.myclass h1,p{
            color:cyan;
        }
    </style>
</head>
<body>
    <div class="myclass" id="class1">
        <h1>my class</h1>
        <div class="myclass1 myclass2 myclass3">
            <h1>my class2 <p>p in h1</p></h1>
            <p>my class 2</p>
        </div>
    </div>
</body>
</html>