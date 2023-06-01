var elements = document.querySelectorAll('.editor');
let answers = [1,1,3,2,1,4];
let correctB= 0;
let correctI= 0;
let correctA= 0;

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

function evalCode(res,soal,index, level,final){
	var code = getValue(index);
	$('#preview'+soal).html('<span id="output">Running...</span>');
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
			$('#preview'+soal).html('<span id="output">'+output+'</span>');
            if(output==res){
                if(level==1){
                    correctB++;
                }else if(level==2){
                    correctI++;
                }else{
                    correctA++;
                }
                console.log('benar');
                $('#run'+soal).attr('style','background-color: #00f46e !important');
                $('#run'+soal).removeAttr('onclick');
                if(final!=1){
                    $('#next'+soal).html('NEXT');
                }
            }
            console.log(output);
		}else{
			error = error.replace(/\"/g, "");
			error = error.replace(/\\\\/g, "\\");
			$('#preview'+soal).html('<span id="output" class="error">'+error+'</span>');
		}
	});
};



function choose(ini){
	$('.pilgan-box').removeClass('choose');
	$(ini).addClass('choose');
}

function disabledPilgan(soal){
    for(let i=1; i<=5;i++){
        $('#pilgan'+soal+i).removeAttr('onclick');
    }
}

function evaluasi(soal,level){
    var id = $('.choose').data('id');
    id = id === undefined ? -1 : id;
    if(id!=-1){
        disabledPilgan(soal);
        if(id==answers[soal-1]){
            if(level==1){
                correctB++;
            }else if(level==2){
                correctI++;
            }else{
                correctA++
            }
            $('#pilgan'+soal+id).addClass('correct');
        }else{
            $('#pilgan'+soal+answers[soal-1]).addClass('correct');
            $('#pilgan'+soal+id).addClass('wrong');
        }
        $('#evaluasi'+soal).addClass('d-none');
        $('#next'+soal).removeClass('d-none');
        $('#next'+soal).addClass('d-inline-block');
        $('.pilgan-box').removeClass('choose');
    }
}

function result(id){
    var id = $(id).data('id');
	var totalNilai = correctB + correctI + correctA;
    var levelUser = 0;
    var descUser = "";
    if(totalNilai<=4){
        levelUser=1;
        descUser="Pemula";
    }else if(totalNilai<=8){
        levelUser=2;
        descUser="Menengah";
    }else{
        levelUser=2;
        descUser="Mahir";
    }
	console.log(id);
	$.ajax({
        url: "./awal/result",
        type: "POST",
        data: {
            id: id,
            beginner: correctB,
            inter: correctI,
            advanced: correctA,
            descUser: descUser,
            levelUser: levelUser
        },
        cache: false,
        success: function(dataResult){
            var dataResult = JSON.parse(dataResult);
            console.log(dataResult);
            if(dataResult.statusCode == 200){
                $('#result').html(descUser);
                $('#dasar').html(correctB);
                $('#menengah').html(correctI);
                $('#mahir').html(correctA);
            }
        }
    });
}