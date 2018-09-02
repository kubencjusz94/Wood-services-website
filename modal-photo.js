$(document).ready(function() {
	var number;
	var minaturesItems=document.querySelectorAll('.minatures');
		
	$('.minatures').on('click',function(){
		var current_src=$(this).attr('src');
		var to_next;
		number=$(".minatures").index(this)+1;
		//alert(number);
		$('#modal-img').attr('src',current_src);
	})
	
	$('#next-slide').on('click',function(){
		if(number==minaturesItems.length)
			number=0;
		number++;
		if(number<=minaturesItems.length){
			to_next='gallery_img/'+number+'.jpg';
			$('#modal-img').attr('src',to_next);
		}
		
	})
	$('#prev-slide').on('click',function(){
		if(number==1)
			number=minaturesItems.length+1;
		number--;
		if(number>=1){
			to_next='gallery_img/'+number+'.jpg';
			$('#modal-img').attr('src',to_next);
		}
	})
});