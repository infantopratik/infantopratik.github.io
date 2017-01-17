
$("#modalbox").hide();
$("#myBtn1").hide();

$("#myBtn").click(function(e){
	e.preventDefault();
	$("#modalbox").fadeIn();
	$("#myBtn").hide();
	$("#myBtn1").fadeIn("slow");
});

$("#myBtn1").click(function(p){
	p.preventDefault();
	$("#modalbox").fadeOut();
	$("#myBtn").fadeIn();
	$("#myBtn1").fadeOut();
});

function goBack(){
	window.history.back();
}

function goNext(){
	window.history.forward();
}

$scope.text = function() {
	console.log('test')
}
