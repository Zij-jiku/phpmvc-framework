<h2>Portfolios Page</h2>

<?php foreach ($portfolios as $portfolio) : ?>
    <ul>
        <li> <?php echo $portfolio['title'] ?> </li>
    </ul>
<?php endforeach; ?>