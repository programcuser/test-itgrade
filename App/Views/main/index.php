<div class="row col-3 mt-3 mx-1">
    <form class="d-flex flex-row align-items-center">
        <input class="form-control mx-1" type="search" placeholder="Введите номер дома" aria-label="Search">
        <button class="btn btn-outline-primary mx-1" type="submit">Поиск</button>
    </form>
</div>

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
