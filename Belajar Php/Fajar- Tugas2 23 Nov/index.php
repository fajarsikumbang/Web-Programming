<?php
$profiles = [
    [
        'name' => 'John Doe',
        'title' => 'Full Stack Developer',
        'desc' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Repudiandae veniam vitae vel, iure expedita doloremque tempore eaque voluptate voluptas odit!',
        'image' => 'man.jpg',
    ],
    [
        'name' => 'Isabella Rodriguez',
        'title' => 'Front-end Developer',
        'desc' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Repudiandae veniam vitae vel, iure expedita doloremque tempore eaque voluptate voluptas odit!',
        'image' => 'woman.jpg',
    ],
    [
        'name' => 'William Hill',
        'title' => 'Back-end Developer',
        'desc' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Repudiandae veniam vitae vel, iure expedita doloremque tempore eaque voluptate voluptas odit!',
        'image' => 'man2.jpg',
    ],
];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Position | Card Profile</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div>
        <?php foreach ($profiles as $profile) : ?>
            <div class="card">
                <div class="card-layer"></div>
                <div class="card-content">
                    <div class="card-image">
                        <img src="<?php echo $profile['image']; ?>" alt="<?php echo $profile['name']; ?>">
                    </div>
                    <div class="card-details">
                        <div class="name"><?php echo $profile['name']; ?></div>
                        <div class="title"><?php echo $profile['title']; ?></div>
                        <div class="desc"><?php echo $profile['desc']; ?></div>
                        <button>Lihat Profil</button>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</body>

</html>