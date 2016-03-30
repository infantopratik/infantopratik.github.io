function myFunc()

{

	var currentTime = new Date()
	var hours = currentTime.getHours()
	var minutes = currentTime.getMinutes()
  var seconds = currentTime.getSeconds();

  var date= currentTime.getDate();
  var day= 35-date;

  document.getElementById('days').innerHTML=day;

  if(seconds == 0)
  {
  var audio = new Audio('music.wav');
  audio.play();
  }

  minutes = checkTime(minutes);
  seconds = checkTime(seconds);
  hours = checkTime(hours);


		document.getElementById('date').innerHTML="<b>" + hours + ":" + minutes + ":" + seconds +"</b>";

 var t = setTimeout(myFunc, 500);
}

function checkTime(i) {
    if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
    return i;
}