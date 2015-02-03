$(document).ready(function(){
  
  var updateThumbnail = function () {
    var background = $('input[name=background]:checked').val();
    var foreground = $('input[name=foreground]:checked').val();
    var title = $("#text").val();
    $("#foreground").css('background','url(./foregrounds/'+foreground+'.png)');
    $("#background").css('background','url(./backgrounds/'+background+'.png)');
    $("#title span").text(title);
  }
   
  $("input[name=foreground]").change(function(){
    updateThumbnail();
  });
  
  $("input[name=background]").change(function(){
    updateThumbnail();
  });
  
  $("#text").keyup(function(){
    updateThumbnail();
  });
  
  $("#fontsize").change(function(){
    console.log($(this).val());
    $("#title").css('font-size',$(this).val()+'pt');
    $("#title").css('max-height',$(this).val()*2);
  });
  
  //initial run
  updateThumbnail();
  
  $( "#upload" ).validate({
    rules: {
      backgroundFile: {
        extension: "jpg|png|gif"
      },
      text: {
        required: true
      }
    },
		messages: {
			backgroundFile: "Please upload a .jpg, .png, or .gif",
			text: "Please enter a title"
		}
  });
});

