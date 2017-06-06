<?php
echo "Hello world";
?>


<html>
<body>

<p>Click the button to display the engine name of the browser.</p>

<button onclick="myFunction()">Try it</button>

<p>The navigator.product property is not supported in IE10 and earlier versions, or Opera 12 and earlier versions.</p>

<p id="brows"></p>
<p id="position"></p>


<script>
function myFunction() {
    var x = "Browser's Engine Name: " + navigator.product;
    document.getElementById("brows").innerHTML = x;
    getLocation();
}

var x = document.getElementById("position");

function getLocation() {
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(showPosition);
    } else { 
        x.innerHTML = "Geolocation is not supported by this browser.";
    }
}

function showPosition(position) {
    x.innerHTML = "Latitude: " + position.coords.latitude + 
    "<br>Longitude: " + position.coords.longitude;
}

</script>

</body>
</html>
