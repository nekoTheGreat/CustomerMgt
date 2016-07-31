$( document ).ready(function(){
	$(".dropdown-button").dropdown();
	$(".right-button-collapse").sideNav({
		edge: 'right'
	});
	$(".left-button-collapse").sideNav({
		
	});
});

function showFloatMenu(el, isShow){
	if(isShow){
		$(el).showFAB();
	}else{
		$(el).closeFAB();
	}
}