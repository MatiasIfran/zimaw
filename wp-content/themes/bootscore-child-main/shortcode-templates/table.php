<?php 
    $headers = get_field('table')['header'];
    $bodys = get_field('table')['body'];
?>

<div class="container h-100">
    <h2 class="title_table"><?php echo get_field('title_table')?></h2>
    
    <table class="table table-striped">
        <thead>
            <tr>
                <?php foreach($headers as $key=>$header) : ?>
                    <th class="<?php echo 'header_'.$key?> pb-5 text-center" scope="col"><?php echo $header['c'];?></th>
                <?php endforeach; ?>
            </tr>
        </thead>
        <tbody>
            <?php foreach($bodys as $body) : ?>
            <tr>
                <?php foreach($body as $key=>$element): ?>
                    <td class="<?php echo 'element_'.$key?>"><?php echo $element['c'];?></td>
                <?php endforeach;?>
            </tr>
            <?php endforeach; ?>
        </tbody>
        <a id="button_show" class="btn btn-primary show_table"><?php echo get_field('text_button') ?></a>
    </table>
    
</div>