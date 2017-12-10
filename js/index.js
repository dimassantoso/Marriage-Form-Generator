$(document).ready(function(){
	var i=0;
	$('.nextButton1').one('click', function(x){
		x.preventDefault();
		$('#data-mempelai').animate('slow', function(){
			if(i>0){
				$('#data-mempelai').removeClass('transition visible');
				$('#data-mempelai').addClass('transition hidden');
			}
			$('#data-mempelai').css('display', 'none');
			$('#info-mempelai').addClass('disabled');
			$('#info-ortu-mempelai').addClass('active');
			$('#info-ortu-mempelai').removeClass('disabled');
			$('#data-ortu-mempelai').transition('fly left');
			i++;
		});
	});
	$('.prevButton1').one('click', function(x){
		x.preventDefault();
		$('#info-mempelai').addClass('active');
		$('#info-mempelai').removeClass('disabled');
		$('#info-ortu-mempelai').addClass('disabled');
		$('#data-ortu-mempelai').animate('slow', function(){
			$('#data-ortu-mempelai').transition('hide');
			$('#data-mempelai').transition('fly right');
		});
	});
	$('.nextButton2').one('click', function(x){
		x.preventDefault();
		$('#info-ortu-mempelai').addClass('disabled');
		$('#info-saksi').removeClass('disabled');
		$('#info-saksi').addClass('active');
		$('#data-saksi').animate('slow', function(){
			$('#data-ortu-mempelai').transition('hide');
			$('#data-saksi').transition('fly left');
		});
	});
	$('.prevButton2').one('click', function(x){
		x.preventDefault();
		$('#info-ortu-mempelai').addClass('active');
		$('#info-ortu-mempelai').removeClass('disabled');
		$('#info-saksi').addClass('disabled');
		$('#data-saksi').animate('slow', function(){
			$('#data-saksi').transition('hide');
			$('#data-ortu-mempelai').transition('fly right');
		});
	});
	$('.nextButton3').one('click', function(x){
		x.preventDefault();
		$('#info-saksi').addClass('disabled');
		$('#info-lain').removeClass('disabled');
		$('#info-lain').addClass('active');
		$('#data-lain').animate('slow', function(){
			$('#data-saksi').transition('hide');
			$('#data-lain').transition('fly left');
		});
	});
	$('.prevButton3').one('click', function(x){
		x.preventDefault();
		$('#info-saksi').addClass('active');
		$('#info-lain').removeClass('disabled');
		$('#info-lain').addClass('disabled');
		$('#data-saksi').animate('slow', function(){
			$('#data-lain').transition('hide');
			$('#data-saksi').transition('fly right');
		});
	});
	$('.nextButton4').one('click', function(x){
		x.preventDefault();
		$('#info-lain').addClass('disabled');
		$('#info-selesai').removeClass('disabled');
		$('#info-selesai').addClass('active');
		$('#selesai').animate('slow', function(){
			$('#data-lain').transition('hide');
			$('#selesai').transition('fly left');
		});
	});
});