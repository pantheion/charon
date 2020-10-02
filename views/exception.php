<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exception</title>
    <link href="https://fonts.googleapis.com/css2?family=Kulim+Park:ital,wght@0,200;0,300;0,400;0,600;0,700;1,200;1,300;1,400;1,600;1,700&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
        }

        body {
            background-color: #d7d7d7;
            font-family: 'Kulim Park', sans-serif;
        }

        main {
            margin-top: 28px;
            display: flex;
            justify-content: center;
        }

        .exception__container {
            width: 80%;
            background-color: #f7f7f7;
            border-radius: 8px;
            padding: 0 32px;
        }

        .exception__project {
            border-bottom: 1px solid #ddd;
            padding: 8px 0;
            color: #888;
            font-weight: 300;
            font-size: 12px;
        }

        .exception__main {
            padding: 48px 0;
        }

        .exception__name {
            color: #999;
            font-weight: 400;
            font-size: 28px;
            padding: 4px 0;
        }

        .exception__class {
            color: #888;
            font-weight: 600;
        }

        .exception__message {
            color: #555;
            font-weight: 800;
        }

        .exception__url {
            margin-top: 24px;
        }

        .exception__url a {
            color: #777;
            font-size: 12px;
            font-weight: 600;
        }
    </style>
</head>

<body>
    <main>
        <div class="exception__container">
            <?php if (isset($exception->directory)) : ?>
                <div class="exception__project">
                    <span><?php echo $exception->directory; ?></span>
                </div>
            <?php endif ?>

            <div class="exception__main">
                <?php if (isset($exception->namespace) && isset($exception->shortName)) : ?>
                    <h1 class="exception__name"><?php echo $exception->namespace; ?>\<span class="exception__class"><?php echo $exception->shortName; ?></span></h1>
                <?php endif ?>

                <h1 class="exception__message"><?php echo $exception->getMessage(); ?></h1>

                <?php if (isset($exception->url)) : ?>
                    <div class="exception__url">
                        <a href="<?php echo $exception->resolveUrl(); ?>"><?php echo $exception->resolveUrl(); ?></a>
                    </div>
                <?php endif ?>
            </div>
        </div>
    </main>
</body>

</html>