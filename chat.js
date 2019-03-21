// JavaScript Document
$(function(){
	"use strict"; $(document).on('submit','#chatForm',function(){
	var text = $.trip ($("#text").val());
	var name = $.trip ($("#name").val());
	
	if(text !=="" && name !==""){
		$.post('ChatPoster.php',{tetx: text, name: name}, function(data){
			$(".chatMessages").append(data);
		});
	}else{
		alert ("Data missing");
	}
});
  });