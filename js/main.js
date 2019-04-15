$(document).ready(function() {
  var APIKEY="de56988ca7cc1e68723ffcbe2b5e548b";
  var url = "https://api.openweathermap.org/data/2.5/weather?q=Tashkent&units=metric&appid="+APIKEY;
  var icons = "https://openweathermap.org/img/w/"
    
    fetch(url)
      .then(function(data) {
        return data.json();
      })
      .then(function(res) {
        console.log(res);
        var city=document.getElementById('city');
        //document.getElementById('hone').innerHTML = res.name;
        city.innerHTML + = '<p>'+Math.round(res.main.temp)+'</p>';
        document.getElementById('icon').src = icons+res.weather[0].icon+'.png';
      })
      .catch(function(err) {
        console.log(err);
      })
})