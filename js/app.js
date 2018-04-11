var width = 10;
$(window).scroll(function()
{
   $('#myProgressBar').attr('aria-valuenow', 20).css('width',$(window).scrollTop() *1.65);

});


