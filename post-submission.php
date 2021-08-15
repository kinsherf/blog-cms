<html>
    <head>
<?php include 'head.php' ?>

</head>
    <body>
    <?php include 'header.php' ?>
    <?php include 'nav.php' ?>
    <div id="main">
        <main>
            <div id="form">
                <h2>New Blog Post Submission</h2>
                <form action="submit-post.php" method="post">
<label for="title">Title</label><br>
<input type="text" id="title" name="title" placeholder="title"></input><br><br>
<label for="author">Author</label><br>
<input type="text" id="author" name="author" placeholder="Author"></input><br><br>
<label for="date">Date</label><br>
<input type="date" id="date" name="date" placeholder="Date"></input><br><br>
<div id="editor"></div>
    
<script src="/ace-builds/src-noconflict/ace.js" type="text/javascript" charset="utf-8"></script>
<script>
    var editor = ace.edit("editor");
    editor.setTheme("ace/theme/eclipse");
    editor.session.setMode("ace/mode/javascript");
</script>
<button type="submit" value="Submit">Submit</button>
</form>
        </main>
    </div><!--close for main-->
        <?php include 'footer.php' ?>
    </body>
</html>