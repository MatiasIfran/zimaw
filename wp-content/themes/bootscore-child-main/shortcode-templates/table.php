<div class="container h-100">
    <h2><?php echo get_field('title_table') ?></h2>
    <?php echo '<script> console.log('. json_encode(  dirname(__FILE__) ) .') </script>'; ?>
    <?php echo get_field('table')?>

</div>