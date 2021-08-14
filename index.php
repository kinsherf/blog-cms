<html>
    <head>
        <title>
            Meghan Kinsherf
        </title>
        <script src="hello.js"></script>
        <link rel="stylesheet" type="text/css" href="format.css"/>
        <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet"> 
<link href="https://fonts.googleapis.com/css2?family=Roboto+Slab&display=swap" rel="stylesheet"> 
</head>
    <body>
    <?php include 'header.php' ?>
    <?php include 'nav.php' ?>
    <div id="main">
        <main>
<?php 
function getPostTitlesFromDatabase() {
    // Get all the post titles from the posts table
    include_once 'db_connect.php';
    $sql = "SELECT title FROM posts";
    $result = mysqli_query($conn, $sql);
    
    // Get each result row as an assoc array, then add title to $postTitles
    $postTitles = array();
    while($row = mysqli_fetch_assoc($result)){
        array_push($postTitles, $row['title']);
    }
    return $postTitles;
}
?>
            <br><br><br>
            <ul>
                <?php
                    $postTitles = getPostTitlesFromDatabase();

                    foreach($postTitles as $postTitle) {
                        echo "<li><a href='post.php?title=" . $postTitle . "'>" . $postTitle . 
                        "</a></li>";
                    }
                ?>
        </ul>
        </main>
    </div> <!--close for main-->
        <?php include 'footer.php' ?>
    </body>
</html>