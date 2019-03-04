// JavaScript Document
$(function(){
	"use strict"; $(document).on('submit','#chatForm',function(){
	var text = $.trip ($("#text").val());
	var name = $.trip ($("#name").val());
	
	if(text !=="" && name !==""){
		$.post('ChatPoster.php',{text: text, name: name}, function(data){
			$(".chatMessages").append(data);
		});
	}else{
		alert ("Data missing");
	}
});
	
	function getMessages() {
		$.get('getMessages.php',function(data){
			$(".chatMessages").html(data);
		});
	}
	setInterval(function(){
		getMessages();
	},500);
  });