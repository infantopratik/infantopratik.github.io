
/*$.ajax({
    url: "https://api.github.com/repos/AnushaRaghunadhan/reversing-a-string/contents/reversing-a-string/rev",
    dataType: 'jsonp',
    success: function(data, textStatus)
    {
        console.log(data.name);
		console.log(textStatus);
	},
	error: function(textStatus){
		console.log(textStatus);
	}
	
});  */

var url = "https://api.github.com/user?acess_token=a17535b1405573b0096810139e67bfd6009b037a/repos/ARAVINDRAJ1138/hunter/contents/hunter/lar";
$.ajax(url , {
	dataType : "json",
	success : function(response){
		console.log("Success");
	},
	error : function(textStatus){
		console.log(textStatus);
	}
});


/*https://github.com/AnushaRaghunadhan/reversing-a-string/blob/master/rev

GET /repos/:owner/:repo/contents/:path

GET /repos/AnushaRaghunadhan/contents/reversing-a-string/rev

https://api.github.com/user?acess_token=a17535b1405573b0096810139e67bfd6009b037a/repos/ARAVINDRAJ1138/hunter/contents/hunter/lar

$.get( "https://api.github.com/repos/AnushaRaghunadhan/reversing-a-string/contents/reversing-a-string/rev", function( data ) {
   console.log(data);
   
   https://github.com/ARAVINDRAJ1138/hunter/blob/master/lar
   
   
   https://api.github.com/user?access_token=...
   
   https://raw.githubusercontent.com/:owner/:repo/master/:path
   
   https://raw.githubusercontent.com/AnushaRaghunadhan/reversing-a-string/master/reversing-a-string/rev
   
   
});*/