var elements = document.querySelectorAll('.editor');
let corrrect = 0;

elements.forEach(function(element) {
    var editor = ace.edit(element);
    editor.setTheme("ace/theme/twilight");
    editor.session.setMode("ace/mode/c_cpp");
})

function getValue(index){
    let i=0;
    let value = "";
    elements.forEach(function(element) {
        var editor = ace.edit(element);
        if(i==index){
            value = editor.getValue();
        }
        i++;
    });
    return value;
}
function evalCode(res,index, coin,id,chlgName,maxTest){
	var code = getValue(index);
	$('#preview'+index).html('<span id="output">Running...</span>');
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
			$('#preview'+index).html('<span id="output">'+output+'</span>');
            if(output==res){
                updateUser(id,2,coin,chlgName);
                corrrect++;
                if(corrrect==maxTest){
                    getBadges(id,1);
                }
                let currPoint = parseInt($('#coin').text());
                currPoint += coin;
                $('#coin').html(currPoint);
                console.log('benar');
                $('#run'+index).attr('style','background-color: #00f46e !important');
                $('#run'+index).removeAttr('onclick');
            }
            console.log(output);
		}else{
			error = error.replace(/\"/g, "");
			error = error.replace(/\\\\/g, "\\");
			$('#preview'+index).html('<span id="output" class="error">'+error+'</span>');
		}
	});
};

function updateUser(id,type,earns,chlgName){
    let desc = "Telah menyelesaikan challenge "+chlgName;
    $.ajax({
        url: "../../../course/challenge",
        type: "POST",
        data: {
            id:id,
            type: type,
            earns: earns,
            desc: desc
        },
        cache: false,
        success: function(dataResult){
            var dataResult = JSON.parse(dataResult);
            console.log(dataResult);
        }
    });
}

function getBadges(id,type){
    let desc = "Telah menyelesaikan seluruh challenge pada Course "+type;
    $.ajax({
        url: "../../../course/getBadges",
        type: "POST",
        data: {
            id:id,
            type: type,
            desc:desc,
        },
        cache: false,
        success: function(dataResult){
            var dataResult = JSON.parse(dataResult);
            console.log(dataResult);
            if(dataResult.statusCode==200){
                var myModal = new bootstrap.Modal(document.getElementById("getBadges"));
                myModal.show();
            }
        }
    });
}