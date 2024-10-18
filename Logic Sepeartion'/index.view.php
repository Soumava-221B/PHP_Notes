<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Lambda Function</title>
</head>

<body>
    <div>
        <ul>
            <?php foreach ($fileteredBooks as $book): ?>
                <li>
                    <a href="<?= $book['purchaseUrl'] ?>">
                        <?= $book['name'] ?> (<?= $book['releaseYear'] ?>) - By <?= $book['author'] ?>
                    </a>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>

</body>

</html>