$("document").ready(function(){
    var text = $("#text").text();
    console.log("text");
    text = markdown.toHTML(text);
    $("#text").html(text);
});


