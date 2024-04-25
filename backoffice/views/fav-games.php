<div class="col text-center">
    <div class="position-relative">
        <div class="gray-scale">
        <img class="img-games rounded-1 game-box" srcset="assets/<?php echo $game['photo'] ?>">
        <h6 class="custom-title"><?php echo $game['title'] ?></d>
        <button type="button" class="btn btn-sm btn-danger btn-unfav" gameID="<?php echo $game['id'] ?>">
            <i class="fa-solid fa-heart-crack"></i>
        </button>
        </div>
    </div>
</div>

