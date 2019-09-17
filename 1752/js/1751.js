$(".dropdown-menu li a").click(function(){

$(".dropdown-menu li a").removeClass('selected');

$(this).addClass('selected');
var selText = $(this).text();  
$(this).parents('.btn-group').find('.dropdown-toggle').html(selText+' <span class="caret"></span>');

});

