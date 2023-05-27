$('form').on('submit',function(e){
    e.preventDefault();
    console.log("hello");
    var username = $('#username').val();
    var password = $('#password').val();
    $.ajax({
        url: "./login/logUser",
        type: "POST",
        data: {
            username: username,
            password: password
        },
        cache: false,
        success: function(dataResult){
            var dataResult = JSON.parse(dataResult);
            console.log(dataResult);
            if(dataResult.statusCode == 200){
                var isTest = dataResult.isTest;
                if(isTest==0){
                    window.location = './test/awal';
                }else{
                    window.location = './home';
                }
            }else if(dataResult.statusCode == 201){
                Swal.fire({
                    title: 'Error!',
                    text: 'Username atau password salah',
                    icon: 'error'
                  });
            }

        }
    });
    return false;
});