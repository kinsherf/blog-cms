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
                function getPostDetailsFromDatabase() {
                    //TODO in Module 4
                    // get this data from a database instead of hardcoding it
                    $postDetails = array('title' => 'Blog Post 1',
                                        'postcontent' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum gravida, magna nec ultricies accumsan, risus mauris fringilla magna, id lacinia leo lacus id nisi. Nam tempor diam id ipsum sodales vulputate. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean lorem est, maximus non leo vitae, bibendum fringilla justo. Praesent ut pharetra enim. Duis sodales nibh at sagittis dictum. Interdum et malesuada fames ac ante ipsum primis in faucibus. </p>
                                        <p>Vivamus vestibulum mollis ligula, in venenatis sem. Donec in nibh porttitor, aliquam quam at, vulputate dui. Etiam ultrices urna nibh, porta convallis quam hendrerit quis. Vestibulum congue ultricies elementum. Aliquam pulvinar tellus quis aliquam tincidunt. Proin egestas a tortor consequat molestie. Nunc eu vestibulum eros. </p>
                                        <p>Proin sed eros ut dolor imperdiet varius. Vestibulum dolor nulla, auctor nec sagittis in, volutpat ac eros. Quisque interdum, nisi nec porta finibus, nibh erat interdum nulla, ut convallis est felis eu velit. In in placerat leo, in facilisis nisl. Praesent odio enim, fermentum nec dignissim ac, hendrerit quis dolor. Mauris eu purus fringilla, bibendum dui ullamcorper, luctus erat. Aliquam at diam eget tellus elementum rutrum. Pellentesque semper fringilla dolor, eu ornare tellus malesuada eu. Donec pretium dolor quis dui aliquam, non hendrerit erat consectetur. In lobortis maximus nunc quis scelerisque. Vestibulum gravida nisi dui, at porta lorem semper sit amet. Nulla nec metus tempor lacus sodales laoreet ac eget lorem. Aenean quis ex interdum, semper dui eu, pellentesque libero. Maecenas gravida et nibh at elementum. Nunc mollis nulla neque, ut egestas mi feugiat vel. Vestibulum semper orci tellus. </p>  ',
                                        'datepublished' => 'August 1, 2021',
                                        'author' => 'Meghan Kinsherf');
                    return $postDetails;
                }
            ?>
            <?php
                // Post details contains all the data to generate the blog from
                $postDetails = getPostDetailsFromDatabase();
            ?>
            <h2> <?php echo $postDetails ["title"]; ?> </h2>
            <div id="datepublished"> <?php echo $postDetails ["datepublished"]; ?> </div>
            <div id="postcontent"> <?php echo $postDetails ["postcontent"]; ?> </div>
            <div id="author"> <?php echo $postDetails ["author"]; ?> </div>
        </main>
        <?php include 'footer.php' ?>
    </body>
</html>