<?php views('/layouts/header.php') ?>

<h2>Portfolios Page - <?php echo env('APP_TITLE'); ?></h2>

<div class="container mb-5">
    <div class="row justify-content-center">
        <div class="col-lg-6">

            <form method="POST" action="<?php url('portfolios') ?>">
                <div class="mb-3">
                    <label class="form-label">Name</label>
                    <input type="text" name="title" class="form-control">
                </div>
                <div class="mb-3">
                    <label class="form-label">Phone</label>
                    <input type="text" name="description" class="form-control">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>

<?php foreach ($portfolios as $portfolio) : ?>
    <ul>
        <li>
            <?php echo $portfolio['title'] ?>
            <a href="<?php echo url('portfolios' . '/' . $portfolio['id']) ?>">Delete</a>
        </li>
    </ul>
<?php endforeach; ?>


<?php views('/layouts/footer.php') ?>