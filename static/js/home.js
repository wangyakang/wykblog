$(function () {
        $(".touxiang").on("click",function () {
            $(".up-box").toggle("fast","linear");
        })
        $(".close").on("click",function (){
            $(".up-box").toggle("fast","linear");
        })
    // $(".tijiao").on("click",function () {
        var hiddenFile=$(".hidden");
        var newobj=new upload("index.php?m=index&f=my&a=upload",".file","",".aa");
        newobj.up(function (e) {
            hiddenFile.attr("value",e);
            $(".baocun").on("click",function () {
                $.ajax({
                    url:"index.php?m=index&f=my&a=uploadPersonImg",
                    data:{
                        uid:$(".baocun").attr("uid"),
                        picture:hiddenFile.attr("value")
                    },
                    success:function (e) {
                        $(".up-box").hide("fast","linear");
                        if(e=="yes"){
                            $(".notice").css("display","block").html("上传头像成功");
                        }else{
                            $(".notice").css("display","block").html("上传头像失败");
                        }
                        setTimeout(function () {
                            $(".notice").css("display","none");
                            self.location="index.php?m=index&f=my";
                        },2000)

                    }
                })
            })
        });
    // })
})
