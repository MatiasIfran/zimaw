<?php 
    $headers = get_field('table')['header'];
    $bodys = get_field('table')['body'];
?>

<div class="container h-100">
    <h2 class="title_table"><?php echo get_field('title_table')?></h2>
    
    <table class="table table-striped">
        <thead class="thead">
            <tr>
                <?php foreach($headers as $key=>$header) : ?>
                    <th class="<?php echo 'header_'.$key?> pb-5 text-center" scope="col"><?php echo $header['c'];?></th>
                <?php endforeach; ?>
            </tr>
        </thead>
        <tbody class="tbody">
            <?php foreach($bodys as $body) : ?>
            <tr>
                <?php foreach($body as $key=>$element): ?>
                    <td class="<?php echo 'element_'.$key?> text-center">
                        <?php if($key==0) { 
                            echo $element['c'];
                            }
                            else if(!empty($element['c'])){ ?>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-check-circle-fill svg_circle" viewBox="0 0 16 16">
                                    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
                                </svg>
                            <?php } else {'';}?>                        
                    </td>
                <?php endforeach;?>
            </tr>
            <?php endforeach; ?>
        </tbody>
        <a id="button_show" class="btn btn-primary show_table"><?php echo get_field('text_button') ?></a>
    </table>
    
</div>