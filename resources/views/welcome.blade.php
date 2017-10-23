
<html>
    <head>
        <title>

        </title>
    </head>
    <body>
        <h1>Hello, <?=  $name; ?> </h1>
        <ul>
            <?php foreach ($tasks as $task): ?>
                <li><?= $task; ?></li>
            <?php endforeach; ?>

            @foreach($tasks as $task)
                <li>{{$task}}</li>
            @endforeach
        </ul>

    </body>
</html>
