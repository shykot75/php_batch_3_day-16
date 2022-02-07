<?php require_once('header.php'); ?>

<section class="py-5 bg-light">
    <div class="container">
        <div class="row">

            <?php foreach($products as $pro) { ?>
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="assets/img/<?php echo $pro['image']; ?>" alt="" class="card-img-top" style="height: 300px;"/>
                    <div class="card-body">
                        <h3 class="card-title"><?php echo $pro['title']; ?></h3>
                        <h3><?php echo $pro['price']; ?></h3>
                        <hr>
                        <a href="action.php?pages=product-detail&&id=<?php echo $pro['id']; ?>" class="btn btn-outline-success">Detail</a>
                    </div>
                </div>
            </div>

            <?php }?>
        </div>
    </div>
</section>






<?php require_once('footer.php'); ?>