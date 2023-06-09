<?php 
    $products = [
        (object)[
        'id' => 1,
        'name' => 'Camiseta básica',
        'slug' => 'camiseta-basica',
        'description' => 'Camiseta básica de algodão',
        'price' => 29.90,
        'image' => 'https://cdn.awsli.com.br/1000x1000/608/608801/produto/133246931/44b83527a3.jpg',
        'additional_images' => null,
        'size' => 'M',
        'color' => 'Branco',
        'stock_qtd' => 50,
        'category_id' => 1,
        'group_id' => null
        ],
        (object)[
            'id' => 2,
            'name' => 'Camiseta estampada',
            'slug' => 'camiseta-estampada',
            'description' => 'Camiseta estampada em algodão',
            'price' => 39.90,
            'image' => 'https://hugobossstore.vtexassets.com/arquivos/ids/241400/4063535199447-Conjunto-3-Camisetas-BOSS-Gola-Redonda-Classic-Multicolorido_1.jpg?v=638025897554430000',
            'additional_images' => null,
            'size' => 'L',
            'color' => 'Azul',
            'stock_qtd' => 30,
            'category_id' => 2,
            'group_id' => null
        ],
        (object)[
            'id' => 3,
            'name' => 'Camiseta polo',
            'slug' => 'camiseta-polo',
            'description' => 'Camiseta polo em algodão',
            'price' => 59.90,
            'image' => 'https://ae01.alicdn.com/kf/H5d9ddc1882fb4700aff0eb5ca0f5199eX/Camiseta-con-estampado-Vintage-hecho-en-1993-para-hombre-con-todas-las-partes-originales-Camisa-de.jpg',
            'additional_images' => null,
            'size' => 'XL',
            'color' => 'Preto',
            'stock_qtd' => 20,
            'category_id' => 1,
            'group_id' => null
        ],
    ];
    $products = array_map(function($product){
        $product->price_formatted = 'R$ ' . number_format($product->price, 2, ',','.');
        return $product;
    }, $products);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lem's Teams</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">      
    
    <link rel="stylesheet" href="./src/css/global.css"/>
    <link rel="stylesheet" href="./src/css/home.css"/>
</head>
<body>
    <main class="container mt-4">
        <!--1rem == 16px-->
        <nav class="d-flex align-items-center justify-content-between">
            <div class="d-flex align-items-center" style="gap: 0.7rem;">
                <h1>Lems Teams</h1>
                
            </div>

            <div class="d-flex align-items-center" style="gap: 0.7rem;">
                <div class="d-none d-sm-flex flex-column text-end">
                    <strong class="text-sm">Meu Carrinho</strong>
                    <span class="text-xs fw-light">0 Itens</span>
                </div>
               
                <button 
                    class="btn p-0 m-0" 
                    type="button" 
                    data-bs-toggle="offcanvas" 
                    data-bs-target="#cartOffcanvas" 
                    aria-controls="cartOffcanvas"
                >
                    <?php include 'src/components/icons/cart.php'; ?> 
                </button>
            </div>
        </nav>

        <section id="container-products" class="mt-3 mt-sm-4 mt-sm-5" >
            <?php
                foreach($products as $product){
                    include 'src/components/product-item.php';    
                }   
            ?>
        </section>
            <?php include 'src/components/cart-offcanvas.php'; ?>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <script> const products = <?php echo json_encode($products);?>; </script>            
    <script src="./src/js/cart.js"></script>

</body>
</html>

