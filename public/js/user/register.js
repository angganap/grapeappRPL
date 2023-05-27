$('form').on('submit',function(e){
    e.preventDefault();
    console.log("hello");
    var nama = $('#nama').val();
    var username = $('#username').val();
    var email = $('#email').val();
    var password = $('#password').val();
    $.ajax({
        url: "./register/add",
        type: "POST",
        data: {
            nama: nama,
            username: username,
            email: email,
            password: password
        },
        cache: false,
        success: function(dataResult){
            var dataResult = JSON.parse(dataResult);
            console.log(dataResult);
            if(dataResult.statusCode == 200){
                Swal.fire(
                    'Good job!',
                    'Berhasil mendaftar',
                    'success'
                );
                $('#nama').val('');
                $('#username').val('');
                $('#email').val('');
                $('#password').val('');
            }else if(dataResult.statusCode == 201){
                Swal.fire({
                    title: 'Error!',
                    text: 'Terdapat masalah dalam database',
                    icon: 'error'
                  });
            }else{
                Swal.fire({
                    title: 'Error!',
                    text: 'Username atau Email sudah terdaftar',
                    icon: 'error'
                  });
            }

        }
    });
    return false;
});