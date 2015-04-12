$(document).ready(function(){
    
    var latitude;
    var longitude;
    var email;
    
 $("#enviar").on("click",function(){
     
  //console.log($("#email").val())   
     email = $("#email").val();
     console.log('http a' + latitude + ' ' + longitude + ' ' + email);
     
 })
 
 var x = document.getElementById("demo");
function getLocation() {
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(showPos);
    } else {
        x.innerHTML = "Geolocation is not supported by this browser.";
    }
}
    
function showPos(position) {
    x.innerHTML = "Latitude: " + position.coords.latitude + 
    "<br>Longitude: " + position.coords.longitude; 
     var map = L.map('map', {center:[position.coords.latitude, position.coords.longitude],zoom: 13});
    latitude = position.coords.latitude;
                console.log(latitude);
longitude = position.coords.longitude;
                console.log(longitude);
                         
             L.tileLayer('http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
attribution: 'Map data &copy; <a href="http://openstreetmap.org">OpenStreetMap</a> contributors, <a href="http://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="http://cloudmade.com">CloudMade</a>',
maxZoom: 18
}).addTo(map);
    
}
showPos(getLocation());
 
});