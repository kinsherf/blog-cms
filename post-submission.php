<html>
    <head>
        <title>
            Meghan Kinsherf
        </title>
        <link rel="stylesheet" type="text/css" href="format.css"/>
        <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet"> 
<link href="https://fonts.googleapis.com/css2?family=Roboto+Slab&display=swap" rel="stylesheet"> 
</head>
    <body>
        <div id="header">
            <header>
                <h1>Blog CMS</h1>
            </header>
            <nav>
                <a href="index.php">Home</a>
                <a href="post-submission.php">Post Submission</a>
            </nav>
        </div><!--close for header-->
        <main>
            <div id="form">
                <h2>New Blog Post Submission</h2>
            <form action="/action_page.php" method="get">
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
        <footer>
            Website with Apache and PHP by Meghan Kinsherf
        </footer>
    </body>
</html>