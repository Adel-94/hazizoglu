$(document).ready(function() {
    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        type: 'GET',
        url:'https://www.instagram.com/huseyn_azizoglu/?__a=1',
        success:function (data) {
        	var clearfix='<div class="clearfix"></div>';
        	var count=0;
        	var instaContent='';
        	console.log(data.user);
        	for(var i=0;i<data.user.media.nodes.length-3;i++){
        		instaContent+='<div class="col-md-4 insta"><a target="_blank" href="https://www.instagram.com/p/'+data.user.media.nodes[i].code+'/?taken-by='+data.user.username+'"><img src="'+data.user.media.nodes[i].thumbnail_src+'" class="img-responsive"></a></div>';
        		count++;
        		if (count==3) {
        			instaContent+=clearfix;
        			count=0;
        		}
        	}
        	$('.instaContent').html(instaContent);

        }
    });
    $('.burger').click(function() {
        $('header').toggleClass('activeNav');
    });
    $('header a[href^="#"]').click(function() {
        $('html, body').animate({
            scrollTop: $($(this).attr('href')).offset().top
        }, 500);
        return false;
    });
});