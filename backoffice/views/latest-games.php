<div class="col text-center pb-5">
    <div class="background-box rounded custom-div-color">
        <img class="img-games mt-3 hvr-grow-shadow game-box rounded-3" srcset="assets/<?php echo $game['photo'] ?>">
        <h6 class="fst-normal"><?php echo $game['title'] ?></h6>
        <button class="btn btn-sm btn-custom btn-margen" gameID="<?php echo $game['id'] ?>">Más info</button>
        <button class="btn btn-sm btn-add btn-margen" gameID="<?php echo $game['id'] ?>"><i class="fa-solid fa-plus"></i></button>
        <button class="btn btn-sm btn-danger btn-fav btn-margen" gameID="<?php echo $game['id'] ?>"><i class="fa-solid fa-heart"></i></button>
    </div>
</div>
