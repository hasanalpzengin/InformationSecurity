$("#injectionSendButton").click(function () {
    ajax("injection");
});

$("#csrfSendButton").click(function () {
    ajax("csrf");
});

$("#xssSendButton").click(function () {
    ajax("xss");
});
//ajax("injection")
function ajax(type) {
    var location = "/index.php/page/pratik";
    var idName = "#"+type+"Area";
    var expected = "injected";
    if (type=="xss") {
        location = "/index.php/page/pratik?girdi=<marquee>Hacked</marquee>"
        expected = "<marquee>Hacked</marquee>";
    }
    $.post(location,
        {
            type: type,
            code: ($(idName).val())
        },
        function (data, status) {
            console.log(data);
            if (data.includes(expected)){
                alert("Önleme Başarısız");
            }else{
                alert("Önleme Başarılı");
            }
        });
}