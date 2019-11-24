<html>
    <head>
        <title>my posts</title>
        <style>
            ul {
                list-style-type: none;
            }
            li {
                padding:4px;
                border-bottom: 1px solid #c0c0c0;
            }
        </style>
    </head>
    <body>
        <?php
        $url = 'https://jsonplaceholder.typicode.com/posts';

        $data = file_get_contents($url);

        if ($data) {
            $dataObj = json_decode($data);
            ?>
            <ul>
                <?php
                foreach ($dataObj as $post) {
                   echo "<li><a href='$url/$post->id'>$post->title.</a></li>" ;
                }
                ?>
            </ul>
                <?php
            }
            ?>
    </body>
</html>