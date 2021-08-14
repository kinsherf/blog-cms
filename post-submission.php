<html>
<?php include 'head.php' ?>
    <body>
    <?php include 'header.php' ?>
    <?php include 'nav.php' ?>
    <div id="main">
        <main>
            <div id="form">
                <h2>New Blog Post Submission</h2>
            <form action="submit-post.php" method="post">
                <label for="title">Title</label><br>
                <input type="text" id="title" name="title"><br><br>
                <label for="author">Author</label><br>
                <input type="text" id="author" name="author"><br><br>
                <label for="date">Date</label><br>
                <input type="date" id="date" name="date"><br><br>
                <label for="content"></label>Content</label><br>
                <textarea id="content" name="content" rows="4" cols="50">
                </textarea> <br><br>
                <input type="submit" value="Submit">
              </form> 
              </div><!--close for form-->
        </main>
    </div><!--close for main-->
        <?php include 'footer.php' ?>
    </body>
</html>