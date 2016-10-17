var slider_timer;
var slider_current = 1;
var slider_next = 2;
// change this to be the max number of items you will count through
var slider_size = 6;

function rotate_interval() {
	if (slider_current < slider_size) {
		slider_next = slider_current + 1;	
	} else {
		slider_next = 1;
	}
    
	var current = "#slide-item-"+slider_current;
    var next= "#slide-item-"+slider_next;
    $(next).css({left: "530px"});
    $(current).animate({"left": "-530"},1200);
    $(next).animate({"left": "0"},1200);
	
	slider_current = slider_next;
    $("#dumb_btnr").unbind("click",rotate_right);
    $("#dumb_btn").unbind("click",rotate_left);
    setTimeout(function(){
            $("#dumb_btnr").click(rotate_right);
        },200);
    setTimeout(function(){
            $("#dumb_btn").click(rotate_left);
        },200);
}

function rotate_left() {
	clearInterval(slider_timer);
	if(slider_current < slider_size) {
		slider_next = slider_current + 1;	
	}else{
		slider_next = 1;
	}

    var current = "#slide-item-"+slider_current;
    var next= "#slide-item-"+slider_next;
    $(next).css({left: "5300px"});
    $(current).animate({"left": "-530"},1200);
    $(next).animate({"left": "0"},1200);
	
	slider_current = slider_next;
    $("#dumb_btnr").unbind("click",rotate_right);
    $("#dumb_btn").unbind("click",rotate_left);
    setTimeout(function(){
            $("#dumb_btnr").click(rotate_right);
        },2000);
    setTimeout(function(){
            $("#dumb_btn").click(rotate_left);
        },2000);
}

function rotate_right() {
	clearInterval(slider_timer);
	if(slider_current > 1 ) {
		slider_next = slider_current - 1;	
	} else {
		slider_next = slider_size;
	}

    var current = "#slide-item-"+slider_current;
    var next= "#slide-item-"+slider_next;
    $(next).css({left: "-530px"});
    $(current).animate({"left": "530"},1200);
    $(next).animate({"left": "0"},1200);
	
	slider_current = slider_next;
    $("#dumb_btnr").unbind("click",rotate_right);
    $("#dumb_btn").unbind("click",rotate_left);
    setTimeout(function(){
            $("#dumb_btnr").click(rotate_right);
        },200);
    setTimeout(function(){
            $("#dumb_btn").click(rotate_left);
        },200);
}


$(document).ready(function() {
    var link;    
    $("#slide-item-1").css({display:"block"});
    $("#slide-item-2").css({display:"block"});
    $("#slide-item-3").css({display:"block"});
    $("#slide-item-4").css({display:"block"});
    $("#slide-item-5").css({display:"block"});
    $("#slide-item-6").css({display:"block"});
    $("#dumb_btn").css({display:"block"});
    $("#dumb_btnr").css({display:"block"});
    slider_timer = setInterval(function(){
		rotate_interval();
	},5000);
    $("#dumb_btn").click(rotate_left);
    $("#dumb_btnr").click(rotate_right);
});

