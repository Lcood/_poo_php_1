<?php require_once _ROOTPATH_.'\templates\header.php'; ?>

<?php if ($error) { ?>

    <section class="container">
        <div class="alert alert-danger">
            <?=$error; ?>
        </div>

    </section>
<?php } ?>

<?php require_once _ROOTPATH_.'\templates\footer.php'; ?>