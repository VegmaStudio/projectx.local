<footer class="main-footer">
    <div class="row">
        <div class="col-sm-12">
            <div class="hidden-xs">
                <strong><?= $app_name ?></strong>.
                Copyright &copy; <?= $copy_date ?> <?= $this->tag->linkTo([$phalcon_url, $phalcon_team, false]) ?>. All rights reserved.<br>
                <strong><?= $lte_name ?></strong>.
                Copyright &copy; <?= $lte_date ?> <?= $this->tag->linkTo([$lte_url, $lte_team, false]) ?>. All rights reserved.
            </div>
        </div>
    </div>
</footer>
