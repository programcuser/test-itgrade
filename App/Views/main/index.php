<div class="row justify-content-center mt-5">
    <?php foreach($realties as $realty): ?>
        <div class="col-8 pb-3">
            <div class="card">
                <img src="/img/<?= $realty['image'] ?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><?= $realty['name'] ?></h5>
                    <p class="card-text"><?= $realty['description'] ?></p>
                    <a href="/show" class="btn btn-primary">Подробнее</a>
                </div>
            </div>
        </div>
    <?php endforeach ?>
</div>
