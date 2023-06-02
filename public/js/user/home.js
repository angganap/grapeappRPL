function goToCourse(lvlCourse,lvlUser,id){
    if(lvlUser<lvlCourse){
        $('#toastBody').html('Kamu harus menyelesaikan level '+lvlUser+' terlebih dahulu');
        const toastLiveExample = document.getElementById('liveToast');
        const toastBootstrap = bootstrap.Toast.getOrCreateInstance(toastLiveExample);
        toastBootstrap.show();
    }else{
        var level = 'level'+lvlCourse;
        $.ajax({
            url: "./home/getCurrCourse",
            type: "POST",
            data: {
                id:id,
                level:level
            },
            cache: false,
            success: function(dataResult){
                var dataResult = JSON.parse(dataResult);
                console.log(dataResult);
                if(dataResult.statusCode == 200){
                    window.location.href = "../course/"+id+"/"+lvlCourse+"/"+dataResult.lvlCurrCourse;
                }
            }
        });
    }
}