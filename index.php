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
    <?php include 'header.php' ?>
    <?php include 'nav.php' ?>
        <main>
            <?php
                function getPostTitlesFromDatabase() {
                    //TODO in Module 4
                    //get this data from a database instead of hardcoding it
                    $postTitles = array("Blog Post 1", "Blog Post 2", "Blog Post 3");
                    return $postTitles;
                }
            ?>
            <br><br><br>
            <ul>
                <?php
                    $postTitles = getPostTitlesFromDatabase();

                    foreach($postTitles as $postTitle) {
                        echo "<li><a href='post.php?title=>" . $postTitle . "'>" . $postTitle . 
                        "</a></li>";
                    }
                ?>
        </ul>
        </main>
        <?php include 'footer.php' ?>
    </body>
</html>