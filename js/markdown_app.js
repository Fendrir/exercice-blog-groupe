$("document").ready(function(){
    var text = $("#content").text();
    
    text = markdown.toHTML(text);
    $("#content").html(text);
});


