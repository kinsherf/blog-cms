<html>
<?php include 'header.php' ?>
    <body>
    <?php include 'header.php' ?>
    <?php include 'nav.php' ?>
    <div id="main">
        <main>
        <?php
            ini_set('display_errors', 1); //Show errors for debugging
                function getPostDetailsFromDatabase() {
                    $postTitle = rawurldecode($_GET["title"]);
                    include_once 'db_connect.php';
                    $sql = "SELECT * FROM posts WHERE title='" . $postTitle . "'";
                    $result = mysqli_query($conn, $sql);
                    $postDetails = mysqli_fetch_assoc($result);
                    return $postDetails;
                }
            ?>
            <?php
                // Post details contains all the data to generate the blog from
                $postDetails = getPostDetailsFromDatabase();
            ?>
            <h2> <?php echo $postDetails ["title"]; ?> </h2>
            <div id="datepublished"> <?php echo $postDetails ["date"]; ?> </div>
            <div id="postcontent"> <?php echo $postDetails ["content"]; ?> </div>
            <div id="author"> <?php echo $postDetails ["author"]; ?> </div>
        </main>
     </div> <!--close for main-->
        <?php include 'footer.php' ?>
    </body>
</html>