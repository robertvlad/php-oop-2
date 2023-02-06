<main>
    <div class="container margin">
        <div class="row">
            <div class="col-4">
                <div class="card" style="width: 25rem;">
                    <img src="./img/<?php echo $foodDog->getImage()?>" class="card-img-top" alt="<?php echo $foodDog->getImage()?>">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <h4 class="card-title"><?php echo $foodDog->getTitle()?></h4>
                            <div class="d-flex align-items-center mb-4">
                                <p class="m-0 me-2"><?php echo $foodDog->category->getSpecies()?></p>
                                <img src="./img/<?php echo $foodDog->category->getIconCategory()?>" alt="<?php echo $foodDog->category->getIconCategory()?>" class="icon">
                            </div>
                        </div>
                        <p class="card-text">Prezzo: <strong><?php echo $foodDog->getPrice() ?>&euro;</strong></p>
                        <p class="card-text">Peso: <strong><?php echo $foodDog->getWeight() ?> Kg</strong></p>
                        <p class="card-text">Ingredienti: <strong><?php foreach($foodDog->getIngredients() as $ingredients) echo $ingredients ?></strong></p>
                        <p class="card-text">Data scadenza: <strong><?php echo $foodDog->getExpirationDate() ?></strong></p>
                        <p class="card-text">
                            <?php
                                if($foodDog->getAvailable()) {
                                    echo "<span class='text-success'><strong>Disponibile</strong></span>";
                                } else {
                                    echo "<span class='text-danger'><strong>Non Disponibile</strong></span>";
                                }
                            ?>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card" style="width: 25rem;">
                    <img src="./img/<?php echo $gameDog->getImage()?>" class="card-img-top" alt="<?php echo $foodDog->getImage()?>">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <h4 class="card-title"><?php echo $gameDog->getTitle()?></h4>
                            <div class="d-flex align-items-center mb-4">
                                <p class="m-0 me-2"><?php echo $foodDog->category->getSpecies()?></p>
                                <img src="./img/<?php echo $gameDog->category->getIconCategory()?>" alt="<?php echo $gameDog->category->getIconCategory()?>" class="icon">
                            </div>
                        </div>
                        <p class="card-text">Prezzo: <strong><?php echo $gameDog->getPrice() ?>&euro;</strong></p>
                        <p class="card-text">Taglia: <strong><?php echo $gameDog->getSize() ?> cm</strong></p>
                        <p class="card-text">Materiali: <strong><?php foreach($gameDog->getMaterials() as $materials) echo $materials ?></strong></p>
                        <p class="card-text">
                            <?php
                                if($gameDog->getAvailable()) {
                                    echo "<span class='text-success'><strong>Disponibile</strong></span>";
                                } else {
                                    echo "<span class='text-danger'><strong>Non Disponibile</strong></span>";
                                }
                            ?>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card" style="width: 25rem;">
                    <img src="./img/<?php echo $boxDog->getImage()?>" class="card-img-top" alt="<?php echo $boxDog->getImage()?>">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <h4 class="card-title"><?php echo $boxDog->getTitle()?></h4>
                            <div class="d-flex align-items-center mb-4">
                                <p class="m-0 me-2"><?php echo $foodDog->category->getSpecies()?></p>
                                <img src="./img/<?php echo $boxDog->category->getIconCategory()?>" alt="<?php echo $boxDog->category->getIconCategory()?>" class="icon">
                            </div>
                        </div>
                        <p class="card-text">Prezzo: <strong><?php echo $boxDog->getPrice() ?>&euro;</strong></p>
                        <p class="card-text">Tipo: <strong><?php echo $boxDog->getWhere() ?></strong></p>
                        <p class="card-text">Taglia: <strong><?php echo $boxDog->getSize() ?> cm</strong></p>
                        <p class="card-text">Materiali: <strong><?php foreach($boxDog->getMaterials() as $materials) echo $materials ?></strong></p>
                        <p class="card-text">
                            <?php
                                if($boxDog->getAvailable()) {
                                    echo "<span class='text-success'><strong>Disponibile</strong></span>";
                                } else {
                                    echo "<span class='text-danger'><strong>Non Disponibile</strong></span>";
                                }
                            ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-4">
                <div class="card" style="width: 25rem;">
                    <img src="./img/<?php echo $foodCat->getImage()?>" class="card-img-top" alt="<?php echo $foodCat->getImage()?>">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <h4 class="card-title"><?php echo $foodCat->getTitle()?></h4>
                            <div class="d-flex align-items-center mb-4">
                                <p class="m-0 me-2"><?php echo $foodCat->category->getSpecies()?></p>
                                <img src="./img/<?php echo $foodCat->category->getIconCategory()?>" alt="<?php echo $foodCat->category->getIconCategory()?>" class="icon">
                            </div>
                        </div>
                        <p class="card-text">Prezzo: <strong><?php echo $foodCat->getPrice() ?>&euro;</strong></p>
                        <p class="card-text">Peso: <strong><?php echo $foodCat->getWeight() ?> Kg</strong></p>
                        <p class="card-text">Ingredienti: <strong><?php foreach($foodCat->getIngredients() as $ingredients) echo $ingredients ?></strong></p>
                        <p class="card-text">Data scadenza: <strong><?php echo $foodCat->getExpirationDate() ?></strong></p>
                        <p class="card-text">
                            <?php
                                if($foodCat->getAvailable()) {
                                    echo "<span class='text-success'><strong>Disponibile</strong></span>";
                                } else {
                                    echo "<span class='text-danger'><strong>Non Disponibile</strong></span>";
                                }
                            ?>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card" style="width: 25rem;">
                    <img src="./img/<?php echo $gameCat->getImage()?>" class="card-img-top" alt="<?php echo $gameCat->getImage()?>">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <h4 class="card-title"><?php echo $gameCat->getTitle()?></h4>
                            <div class="d-flex align-items-center mb-4">
                                <p class="m-0 me-2"><?php echo $gameCat->category->getSpecies()?></p>
                                <img src="./img/<?php echo $gameCat->category->getIconCategory()?>" alt="<?php echo $gameCat->category->getIconCategory()?>" class="icon">
                            </div>
                        </div>
                        <p class="card-text">Prezzo: <strong><?php echo $gameCat->getPrice() ?>&euro;</strong></p>
                        <p class="card-text">Taglia: <strong><?php echo $gameCat->getSize() ?> cm</strong></p>
                        <p class="card-text">Materiali: <strong><?php foreach($gameCat->getMaterials() as $materials) echo $materials ?></strong></p>
                        <p class="card-text">
                            <?php
                                if($gameCat->getAvailable()) {
                                    echo "<span class='text-success'><strong>Disponibile</strong></span>";
                                } else {
                                    echo "<span class='text-danger'><strong>Non Disponibile</strong></span>";
                                }
                            ?>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card" style="width: 25rem;">
                    <img src="./img/<?php echo $boxCat->getImage()?>" class="card-img-top" alt="<?php echo $boxCat->getImage()?>">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <h4 class="card-title"><?php echo $boxCat->getTitle()?></h4>
                            <div class="d-flex align-items-center mb-4">
                                <p class="m-0 me-2"><?php echo $boxCat->category->getSpecies()?></p>
                                <img src="./img/<?php echo $boxCat->category->getIconCategory()?>" alt="<?php echo $boxCat->category->getIconCategory()?>" class="icon">
                            </div>
                        </div>
                        <p class="card-text">Prezzo: <strong><?php echo $boxCat->getPrice() ?>&euro;</strong></p>
                        <p class="card-text">Tipo: <strong><?php echo $boxCat->getWhere() ?></strong></p>
                        <p class="card-text">Taglia: <strong><?php echo $boxCat->getSize() ?> cm</strong></p>
                        <p class="card-text">Materiali: <strong><?php foreach($boxCat->getMaterials() as $materials) echo $materials ?></strong></p>
                        <p class="card-text">
                            <?php
                                if($boxCat->getAvailable()) {
                                    echo "<span class='text-success'><strong>Disponibile</strong></span>";
                                } else {
                                    echo "<span class='text-danger'><strong>Non Disponibile</strong></span>";
                                }
                            ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>