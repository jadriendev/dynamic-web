<?php
include_once 'config.php';

$sql = "SELECT * FROM products";
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="en" style="font-family: 'Roboto', sans-serif;">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Google+Sans:ital,opsz,wght@0,17..18,400..700;1,17..18,400..700&family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Quattrocento:wght@400;700&family=Roboto+Mono:ital,wght@0,100..700;1,100..700&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Products</title>
</head>
<body class="min-h-screen flex flex-col">
    <header class="w-full bg-white">
        <nav class="flex items-center justify-between py-2 px-5 border-b border-black">
            <div class="flex items-center gap-2">
                <img class="w-[50px]" src="https://static.vecteezy.com/system/resources/thumbnails/042/535/463/small/sport-shoes-free-png.png" alt="">
                <h1 class="text-2xl font-bold tracking-wide">JB Shoes</h1>
            </div>

            <div class="">
                <ul class="flex items-center gap-16">
                    <li class="font-bold text-lg transition-all duration-300 lg:hover:scale-105"><a href="#">Men</a></li>
                    <li class="font-bold text-lg transition-all duration-300 lg:hover:scale-105"><a href="#">Women</a></li>
                    <li class="font-bold text-lg transition-all duration-300 lg:hover:scale-105"><a href="#">Apparel</a></li>
                    <li class="font-bold text-lg transition-all duration-300 lg:hover:scale-105"><a href="#">Shoes</a></li>
                </ul>
            </div>

            <div class="flex items-center gap-5">
                <a href="#"><i class="text-xl transition-all duration-300 lg:hover:scale-105 fa fa-magnifying-glass"></i></a>
                <a href="#"><i class="text-xl transition-all duration-300 lg:hover:scale-105 fa fa-user"></i></a>
                <a href="#"><i class="text-xl transition-all duration-300 lg:hover:scale-105 fa fa-heart"></i></a>
                <a href="#"><i class="text-xl transition-all duration-300 lg:hover:scale-105 fa fa-shopping-cart"></i></a>
            </div>
        </nav>
    </header>

    <section class="max-w-7xl mx-auto">
        <h1 class="text-3xl font-bold text-center tracking-wide mt-5">Top Products</h1>
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-[2px] mt-4">
            <?php while ($row = $result->fetch_assoc()) { ?>
                <a href="#">
                    <div class="border-2 border-transparent pb-3 w-[350px] flex flex-col gap-2 lg:hover:border-2 lg:hover:border-black">
                        <div class="flex items-center bg-gray-100 w-full justify-center">
                            <img class="object-cover w-[330px]" src="images/<?= $row['product_img']; ?>" alt="<?= $row['product_name']; ?>">
                        </div>
                        
                        <div class="flex flex-col">
                            <h1 class="text-md ml-3 font-bold">₱<?php echo $row['price'] ?></h1>
                            <p class="text-md ml-3 mt-4"><?php echo $row['product_name'] ?></p>
                            <p class="text-sm ml-3 text-gray-500"><?php echo $row['category'] ?></p>
                            <p class="text-sm ml-3 text-gray-500"><?php echo $row['number_color'] ?> <span>Colours</span></p>
                        </div>
                    </div>
                </a>
            <?php } ?>
        </div>
    </section>
</body>
</html>