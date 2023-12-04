<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar PHP | Array</title>
    <style>
        .box {
            width: 50px;
            height: 50px;
            line-height: 50px;
            background-color: salmon;
            float: left;
            text-align: center;
            margin: 5px;
            transition: all 500ms ease-in-out;
        }
        .box:hover {
            transform: rotate(360deg);
            border-radius: 50%;
        }

        .clear {
            clear: both;
        }
    </style>
</head>
<body>
    <?php $angka = [69, 66, 76, 'memek', 911, 720, 144, 240]; ?>
    <!-- Perulangan For -->
    <?php for ($i=0; $i < count($angka); $i++) { ?>
    <div class="box"> <?php echo $angka[$i]; ?> </div>
    <?php } ?>
    <div class="clear"></div>
    <!-- Foreach -->
    <?php

     foreach ($angka as $a) : ?>
        <div class='box'><?= $a ?></div>
     <?php endforeach ?>
</body>
</html>