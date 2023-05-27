var editor = ace.edit("editor");
editor.setTheme("ace/theme/twilight");
editor.session.setMode("ace/mode/c_cpp");


$("#run").click(function(){
	var code = editor.getValue();
	$('.preview-code').html('<span id="output">Running...</span>');
	const settings = {
        async: true,
        crossDomain: true,
        url: 'https://code-compiler.p.rapidapi.com/v2',
        method: 'POST',
        headers: {
            'content-type': 'application/x-www-form-urlencoded',
            'X-RapidAPI-Key': '85ac28cfffmsh84879a54684706dp123e37jsn09146353da11',
            'X-RapidAPI-Host': 'code-compiler.p.rapidapi.com'
        },
        data: {
            LanguageChoice: '6',
            Program: code
        }
    };
	
	$.ajax(settings).done(function (response) {
		$("#output").remove();
		var error = JSON.stringify(response.Errors);
		if(error === "null"){
			var output = JSON.stringify(response.Result);
			output = output.replace(/\"/g, "");
			output = output.replace(/\\n/g, "<br />");
			output = output.replace(/\\t/g, "&nbsp;&nbsp;&nbsp;&nbsp;");
			output = output.replace(/\\s/g, "&nbsp;");
			$('.preview-code').html('<span id="output">'+output+'</span>');
		}else{
			error = error.replace(/\"/g, "");
			error = error.replace(/\\\\/g, "\\");
			$('.preview-code').html('<span id="output" class="error">'+error+'</span>');
		}
		
	});
});

$('.pilgan-box').click(function(){
	$('.pilgan-box').removeClass('choose');
	$(this).addClass('choose');
})

function result(id){
	var id = $(id).data('id');
	console.log(id);
	$.ajax({
        url: "./awal/result",
        type: "POST",
        data: {
            id: id
        },
        cache: false,
        success: function(dataResult){
            var dataResult = JSON.parse(dataResult);
            console.log(dataResult);
            if(dataResult.statusCode == 200){
            }
        }
    });
}