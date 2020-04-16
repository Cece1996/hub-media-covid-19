<div class="footer">
    <div class="float-right">
        by <strong><?= $app['author']['name']; ?></strong>
    </div>
    <div>
        <strong>Copyright</strong> <?= (isset($app['owner']) ? $app['owner'] : $app['author']['name']); ?> &copy; <?= date('Y') ?>
    </div>
</div>

</div>
</div>

<!-- Mainly scripts -->
<script src="<?= asset('js/jquery-3.1.1.min.js', 'inspinia'); ?>"></script>
<script src="<?= asset('js/popper.min.js', 'inspinia'); ?>"></script>
<script src="<?= asset('js/bootstrap.js', 'inspinia'); ?>"></script>
<script src="<?= asset('js/plugins/metisMenu/jquery.metisMenu.js', 'inspinia'); ?>"></script>
<script src="<?= asset('js/plugins/slimscroll/jquery.slimscroll.min.js', 'inspinia'); ?>"></script>

<!-- Custom and plugin javascript -->
<script src="<?= asset('js/inspinia.js', 'inspinia'); ?>"></script>
<script src="<?= asset('js/plugins/pace/pace.min.js', 'inspinia'); ?>"></script>

<!-- SUMMERNOTE -->
<script src="<?= asset('js/plugins/summernote/summernote-bs4.js', 'inspinia'); ?>"></script>

<script>
    $(document).ready(function() {

        $('.summernote').summernote();

    });
</script>

<!-- Toastr -->
<script src="<?= asset('js/plugins/toastr/toastr.min.js', 'inspinia'); ?>"></script>

<?php $flash = get_flash(); ?>
<?php if ($flash) : ?>
    <script>
        $(document).ready(function() {
            setTimeout(function() {
                toastr.options = {
                    closeButton: true,
                    progressBar: true,
                    showMethod: 'slideDown',
                    timeOut: 8 * 1000
                };
                <?php if ($flash['type'] == 'success') : ?>
                    toastr.success("<?= $flash['message']; ?>", 'Opération réussie');
                <?php elseif ($flash['type'] == 'error') : ?>
                    toastr.error("<?= $flash['message']; ?>", 'Opération échouée');
                <?php endif; ?>
            }, 1300);
        });
    </script>
<?php endif; ?>

</body>

</html>