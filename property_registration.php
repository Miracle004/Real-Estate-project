<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="upload.css">
        <script type="application/javascript">
            function populate(s1,s2){
                var s1 = document.getElementById("s1");
                var s1 = document.getElementById("s2");
                s2.innerHTML = "";
                if (s1.value == "State") {
                    var optionArray = ["|", "mushin|Mushin", "isolo|Isolo", "egbe|Egbe", "ifako-ijaye|Ifako-Ijaye", "idiaraba|Idiaraba"];
                }
                
                for(var option in optionArray){
                    var pair = optionArray[option].split("|");
                    var newOption = document.createElement("option");
                    newOption.value = pair[0];
                    newOption.innerHTML = pair[1];
                    s2.options.add(newOption);
                }
                
            }
        </script>
    </head>
    <body>
        <div class="parent">
        <a href="index.php"><img src="logo.png" alt="" class="site-logo"></a>
        <div class="header">
            Register a Property
        </div>
        <a href="registration.php" class="exit">Register</a>
        <a href="logout.php"><button class="exit" name="logOut" >Sign-out</button></a>

</div>
<div class="myforms">
    <form action="#" class="upload_form">
            <input type="text" name="title" placeholder="Title">
            <input type="text" name="Address" placeholder="Address">

        <select name="select1" class="myselected" id="Select1" onchange="populate('Select1', 'Select2')">
            <option value="">Select a state</option>
            <option name="State" value=""></option>

        </select>

        <select name="select2" class="myselected" id="Select2">
            <option value="">Select a property type</option>
            <option name="property_type" value=""></option>
        </select>

        <select name="select3" class="myselected" id="Select3">
            <option value="">Select a local govt</option>
            <option name="localGovt" value=""></option>
        </select>
        <!--<form action="#" class="upload_form2">-->
            <select name="select4" class="myselected" id="Select4">
                <option value="">Choose an area</option>
                <option name="town-city" value=""></option>
            </select>

            <select name="select5" class="myselected" id="Select5">
                <option value="">Choose a category</option>
                <option name="category" value=""></option>
        </select>

            <select name="select7" class="myselected" id="Select7">
                <option value="">Choose a price</option>
                <option name="price" value=""></option>
            </select>
            <textarea name="description" id="" cols="50" rows="10" placeholder="Input a description"></textarea>

        <input type="submit" name="submit" value="Submit">
    </form>

</div>
    </body>
</html>