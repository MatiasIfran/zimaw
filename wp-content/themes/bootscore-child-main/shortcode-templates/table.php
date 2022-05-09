<?php 
    $headers = get_field('table')['header'];
    $bodys = get_field('table')['body'];
?>

<div class="container">
    <div id="elements_hide" class="mb-5">
        <h2 class="title_table"><?php echo get_field('title_table')?></h2>
        <a id="button_hide" class="btn btn-primary close_table"></a>
    </div>
    <table class="table table-striped table-borderless">
        <thead class="thead">
            <tr>
                <?php foreach($headers as $key=>$header) : ?>
                <th class="<?php echo 'header_'.$key?> pb-5 text-center" scope="col"><?php echo $header['c'];?></th>
                <?php endforeach; ?>
            </tr>
        </thead>
        <tbody class="tbody">
            <?php foreach($bodys as $rows=>$body) : ?>
            <tr style="<?php if($rows>3){ echo 'display:none'; } ?>">
                <?php foreach($body as $key=>$element): ?>
                    <td class="<?php echo 'element_'.$key?> text-center">
                        <?php if($key==0) { 
                                echo $element['c'];
                                }
                                else if(!empty($element['c']) && $element['c'] == '*'){ ?>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                    class="bi bi-check-circle-fill svg_circle" viewBox="0 0 16 16">
                                    <path
                                        d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                                </svg>
                            <?php } else {
                                echo $element['c'];
                        }?>
                    </td>
                     
                <?php endforeach;?>
            </tr>
            <?php endforeach; ?>
        </tbody>
        <div class="d-flex justify-content-center">
            <a id="button_show" class="btn btn-primary show_table px-5 d-flex align-items-center"><?php echo get_field('text_button') ?></a>
        </div>
    </table>
</div>
<div class="line_gradient"></div>