<html>
    <head>
<?php include 'head.php' ?>
</head>
    <body>
    <?php include 'header.php' ?>
    <?php include 'nav.php' ?>
    <div id="main">
        <main>
            <button onclick="revealMessage()" style="display:none">Hello</button>
            <p id="hiddenMessage" style="display:none; text-align: center; color: blue;" >Hi there!</p>
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
            <div id="sortable-blog-list">
            <input class="search" placeholder="Search"/>
            <button class="sort" data-sort="title">Sort</button>
            <ul class="list">
                <?php
                    $postTitles = getPostTitlesFromDatabase();

                    foreach($postTitles as $postTitle) {
                        echo "<li><a href='post.php?title=" . $postTitle
                        . " ' class='title'>" . $postTitle . "</a></li>";
                    }
                ?>
        </ul>
                </div><!--close for sortlist>
        </main>
    </div> <!--close for main-->
        <?php include 'footer.php' ?>
    </body>
</html>