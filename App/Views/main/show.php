<div class="container">
    <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
            <h3><?= htmlspecialchars($realty['name'], ENT_QUOTES) ?></h3>
        </div>
        <div class="col-lg-8 col-md-10 mx-auto">
            <img src="/img/<?= htmlspecialchars($realty['image'], ENT_QUOTES) ?>">
        </div>
        <div class="col-lg-8 col-md-10 mx-auto">
            <p>Адрес: <?= htmlspecialchars($realty['address'], ENT_QUOTES) ?></p>
        </div>
        <div class="col-lg-8 col-md-10 mx-auto">
            <p><?= htmlspecialchars($realty['description'], ENT_QUOTES) ?></p>
        </div>
        <div class="col-lg-8 col-md-10 mx-auto">
            <p>Цена: <?= htmlspecialchars($realty['price'], ENT_QUOTES) ?></p>
        </div>
    </div>
</div>