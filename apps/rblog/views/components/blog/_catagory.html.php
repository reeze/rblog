<h2>Catagory</h2>
<ul>
    <?php foreach ($catagories as $catagory): ?>
        <?php echo link_to($catagory['name'], "@catagory?slug={$catagory['slug']}"); ?><hr />
    <?php endforeach;?>
</ul>