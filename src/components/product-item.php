<div class="card-product card">
    <div class="card-body">
        <img src="<?php echo $product->image; ?>" class="rounded shadow card-img-top" alt="Imagem da camisa do Santos 2022">
        <div class="d-flex flex-column mt-3">    
            <h5 class="card-title fs-6 mb-0"> <?php echo $product->name; ?></h5>
            <span class="fs-4 fw-semibold"><?php echo $product->price_formatted; ?></span>

            <button 
                type="button" 
                class="btn btn-primary mt-3 d-flex align-items-center p-0 overflow-hidden text-sm"
                onclick="addProductToCart(<?php echo $product->id; ?>)"
            >
                <div 
                    class="d-flex align-items-center" 
                    style="gap: .3rem; background: var(--bs-btn-active-bg); padding: .375rem .5rem;"
                >
                    <?php include 'src/components/icons/add-cart.php'; ?>
                    0
                </div>
                <span class="text-uppercase text-center text-xs fw-semibold px-2" style="flex:1">Adicionar ao Carrinho</span>
            </button>
        </div>  
    </div>
</div>