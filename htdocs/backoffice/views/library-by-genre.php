<div class="col mb-3 text-center">
    <div class="background-box rounded custom-div-color">
        <img class="img-games mt-3 rounded hvr-grow-shadow game-box" src="assets/<?php echo $game['photo'] ?>">
        <h6 class="fst-normal"><?php echo $game['title'] ?></>
        <button class="btn btn-sm btn-custom" gameID="<?php echo $game['id'] ?>">Más info</button>
        <button class="btn btn-sm btn-danger btn-delete" gameID="<?php echo $game['id'] ?>"><i
                class="fas fa-minus"></i></button>
    </div>
</div>

