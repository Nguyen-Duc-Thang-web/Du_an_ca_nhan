<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>
        <table border="1" class="table container">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Tên</th>
                    <th>PRICE</th>
                    <th class="text-center">Hành động</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($data as $a) { ?>
                    <tr>
                        <th><?= $a['id'] ?></th>
                        <th><?= $a['name'] ?></th>
                        <th><?= $a['price'] ?></th>
                        <th class="text-center"></th>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </h1>
</body>

</html>