<?php 
    $flag_danish = '<svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 37 28"><path fill="#c60c30" d="M0,0H37V28H0Z" /><path fill="#fff" d="M0,12H12V0H16V12H37V16H16V28H12V16H0Z" /></svg>';
    $flag_english = '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 60 30" width="40" height="40"><clipPath id="s"><path d="M0,0 v30 h60 v-30 z"/></clipPath><clipPath id="t"><path d="M30,15 h30 v15 z v15 h-30 z h-30 v-15 z v-15 h30 z"/></clipPath>
        <g clip-path="url(#s)"><path d="M0,0 v30 h60 v-30 z" fill="#012169"/><path d="M0,0 L60,30 M60,0 L0,30" stroke="#fff" stroke-width="6"/><path d="M0,0 L60,30 M60,0 L0,30" clip-path="url(#t)" stroke="#C8102E" stroke-width="4"/><path d="M30,0 v30 M0,15 h60" stroke="#fff" stroke-width="10"/><path d="M30,0 v30 M0,15 h60" stroke="#C8102E" stroke-width="6"/></g></svg>';
?>

<?php  ?>
<div class="dropdown">
    <button class="btn btn-secondary bg-white dropdown-toggle d-flex align-items-center justify-content-center" style="height: 48px" type="button" id="dropdownMenuChangeFlag"
        data-bs-toggle="dropdown" aria-expanded="false">
        <?php 
            if($post->post_name == 'danish'): echo $flag_danish;
            else : echo $flag_english;
            endif;
        ?>
    </button>
    <ul class="dropdown-menu w-100" style="min-width:0px" aria-labelledby="dropdownMenuChangeFlag">
        <?php if($post->post_name == 'danish'): ?>
            <li><a class="dropdown-item" href="<?php echo get_home_url().'/english'?>"><?php echo $flag_english;?></a></li>
        <?php else: ?>
            <li><a class="dropdown-item" href="<?php echo get_home_url()?>"><?php echo $flag_danish;?></a></li>
        <?php endif;?>
    </ul>
</div>