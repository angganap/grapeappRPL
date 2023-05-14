$('#profile-pic').click(function(){
   const $elem = $(".change-pic-pop-up");
   $elem[0].style.setProperty('display', 'block', 'important');
   $elem[1].style.setProperty('display', 'block', 'important');
})
	
$("#close").click(function(){
   const $elem = $(".change-pic-pop-up");
   $elem[0].style.setProperty('display', 'none', 'important');
   $elem[1].style.setProperty('display', 'none', 'important');
});

$('#sign-out').click(function(){
	window.location.href = "./logout.php";
})

$('#inputGroupFile02').change(function(){
    var input = this;
    var url = $(this).val();
    var ext = url.substring(url.lastIndexOf('.') + 1).toLowerCase();
    if (input.files && input.files[0]&& (ext == "gif" || ext == "png" || ext == "jpeg" || ext == "jpg")) 
     {
        var reader = new FileReader();

        reader.onload = function (e) {
           $('#change-img').attr('src', e.target.result);
        }
       reader.readAsDataURL(input.files[0]);
    }
    else
    {
      $('#change-img').attr('src', '/assets/no_preview.png');
    }
});