<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lem's Teams</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">      
    
    <style>
        
        body{
            margin: 0;
            background: black; 
            color: #ddd;
        }

        h1, strong, svg{
            color: white;
        }
        .text-sm{ font-size: 0.875rem;}
        .text-xs{ font-size: 0.7rem;  }

    </style>

</head>
<body>
    <main class="container mt-4">
        <!--1rem == 16px-->
        <nav class="d-flex align-items-center justify-content-between">
            <div class="d-flex align-items-center" style="gap: 0.7rem;">
                <h1>Lems Teams</h1>
                
            </div>

            <div class="d-flex align-items-center" style="gap: 0.7rem;">
                <div class="d-flex flex-column text-end">
                    <strong class="text-sm">Meu Carrinho</strong>
                    <span class="text-xs fw-light">0 Itens</span>
                </div>
                <div>
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" style="fill: currentColor;transform: ;msFilter:;"><path d="M21.822 7.431A1 1 0 0 0 21 7H7.333L6.179 4.23A1.994 1.994 0 0 0 4.333 3H2v2h2.333l4.744 11.385A1 1 0 0 0 10 17h8c.417 0 .79-.259.937-.648l3-8a1 1 0 0 0-.115-.921zM17.307 15h-6.64l-2.5-6h11.39l-2.25 6z"></path><circle cx="10.5" cy="19.5" r="1.5"></circle><circle cx="17.5" cy="19.5" r="1.5"></circle></svg>
                </div>
            </div>
        </nav>

        <section class="mt-5">
        
            <div class="card-product card" style="width: 18rem;">
                <div class="card-body">
                    <img src="./src/images/SANTOS2022.1.jpg" class="rounded shadow card-img-top" alt="Imagem da camisa do Santos 2022">
                    <div class="d-flex flex-column mt-3">    
                        <h5 class="card-title fs-6 mb-0">Camisa do Santos 2022</h5>
                        <span class="fs-4 fw-semibold">R$ 160,00</span>

                        <button type="button" class="btn btn-primary mt-3 d-flex align-items-center p-0 overflow-hidden text-sm">
                            <div 
                                class="d-flex align-items-center" 
                                style="gap: .3rem; background: var(--bs-btn-active-bg); padding: .375rem .5rem;"
                            >
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" style="fill: white;transform: ;msFilter:;"><circle cx="10.5" cy="19.5" r="1.5"></circle><circle cx="17.5" cy="19.5" r="1.5"></circle><path d="M13 13h2v-2.99h2.99v-2H15V5.03h-2v2.98h-2.99v2H13V13z"></path><path d="M10 17h8a1 1 0 0 0 .93-.64L21.76 9h-2.14l-2.31 6h-6.64L6.18 4.23A2 2 0 0 0 4.33 3H2v2h2.33l4.75 11.38A1 1 0 0 0 10 17z"></path></svg> 
                                0
                            </div>
                            <span class="text-uppercase text-center text-xs fw-semibold px-2" style="flex:1">Adicionar ao Carrinho</span>
                        </button>
                    </div>  
                </div>
            </div>

        </section>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

</body>
</html>

