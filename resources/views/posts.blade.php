<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="app.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php foreach($posts as $post): ?>
        
            <article>
                <?= $post; ?>
            </article>

    <?php endforeach; ?>
</body>

</html>