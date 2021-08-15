$(document).ready(function () {
    $("button").click(function(){
     new List ('sortable-blog-list', options);
    })
});

var options = {
    valueNames: [ 'title' ]
};

var editor = ace.edit("editor");
editor.session.setMode("ace/mode/html");

$(document).ready(function() {
$("#submit").click(function() {
     var title = $("#title").val(title);
     var author = $("#author").val(author);
     var date = $("#date").val(date);
     var content = editor.getValue(content);
})
});

$.submit("submit-post.php", {
    title: title,
    content: content,
    author: author,
    date: date
}).document(function() {
    window.location = "index.php";
});