<?php if ($block_html_id != 'block-block-3') { ?>
<div class="span3 sidestuffsec sidestuffsec-login">
    <div class="padding-sidebar">
    <?php print render($title_prefix); ?>
    <?php if ($title): ?>
        <legend<?php print $title_attributes; ?>><?php print $title; ?></legend>
    <?php endif;?>
    <?php print render($title_suffix); ?>

    <?php print $content ?>
    </div>
</div>
<!--</section>-->
<?php }else{
    print $content;
}?>
