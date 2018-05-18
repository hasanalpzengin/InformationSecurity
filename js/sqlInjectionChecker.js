var key_words = [
    "1 or 1=1",
    '"" "or" 1"="1',
    "' or 1=1",
    '" or 1=1',
    "'' or 1=1",
];

$("#submit").click(function () {
    ajax($("#link").val());
})

function ajax(location) {
    var loc = location;
    var out1="", out2="";
    for(i=0; i<key_words.length; i++){
        word = key_words[i];
        console.log(word);
        //check get
        $.ajax({
            type: 'GET',
            async: false,
            url: loc,
            data: "",
            success: function(data) {out1 = data;}
        });
        $.ajax({
            type: 'GET',
            async: false,
            url: loc,
            data: word,
            success: function(data) {out2 = data;}
        });
        if (out1.length != out2.length){
                alert("SQL injection founded");
                return;
        }else{
            console.log("failed");
        }
        //check post
        $.ajax({
            type: 'POST',
            async: false,
            url: loc,
            data: "",
            success: function(data) {out1 = data;}
        });
        $.ajax({
            type: 'GET',
            async: false,
            url: loc,
            data: word,
            success: function(data) {out2 = data;}
        });
        if (out1.length != out2.length){
            alert("SQL injection founded");
            return;
        }else{
            console.log("failed");
        }
    }
}