<div class="container inner-wrap">
<div class="row mains-wrap head-wrap">
    <div class="span12 spanner header">
        <?php print render($page['horizontal_menu']); ?>
    </div>
</div>
<div class="row mains-wrap neck-wrap">
        <div class="span12 spanner necker">
            <div class="span3 neckspanner neckspanner-a">
                <div class="logo-wrap">
                    <?php echo '<img width="216" height="60" alt="megamin logo"  src="'.base_path().path_to_theme() .'/img/header/megalogo.png"/>';?>
                </div>

                <div class="menu-wrap">
                    <?php print render($page['main_menu']); ?>
                </div>
            </div>

            <div class="span9 neckspanner neckspanner-b">
                <?php echo '<img src="'.base_path().path_to_theme() .'/img/body/welcome_a.jpg" alt="welcome" height="180" width="700" />';?>
            </div>

        </div>

    </div>
<div class="row mains-wrap body-wrap">
<!--<div class="main-container container">-->
    <div class="span12 spanner bodyer">
<!--  <div class="row-fluid">-->

    <?php if (!empty($page['sidebar_first'])): ?>
          <div class="span3 bodyerspanner bodyerspanner-a">
              <div class="span3 sidestuffwrap">
        <?php print render($page['sidebar_first']); ?>

                  </div>
              </div>
    <?php endif; ?>  

        <div class="span9 bodyerspanner bodyerspanner-b">
            <div class="span9 contentrow contentrow-top contentrow-top-home">
        <?php if (!empty($page['highlighted'])): ?>
        <div class="highlighted hero-unit"><?php print render($page['highlighted']); ?></div>
      <?php endif; ?>
      <a id="main-content"></a>
      <?php print $messages; ?>
      <?php if (!empty($tabs)): ?>
        <?php print render($tabs); ?>
      <?php endif; ?>
      <?php if (!empty($page['help'])): ?>
        <div class="well"><?php print render($page['help']); ?></div>
      <?php endif; ?>
      <?php if (!empty($action_links)): ?>
        <ul class="action-links"><?php print render($action_links); ?></ul>
      <?php endif; ?>
                <div class="main-content-pad">
                    <div class="span6 contentsubrow contentsubrow-l">
                        <div class="span6 homecon homecon-top">
                            <div class="span2 homecon-topsec homecon-topsec-a">
                               <?php echo '<img src="'.base_path().path_to_theme().'/img/body/smiler.png" alt="smile" height="108" width="140" />';?>
                            </div>
                            <div class="span4 homecon-topsec homecon-topsec-b">
                                <?php echo $home['welcome_message']; ?>
                            </div>
                        </div>
                        <div class="span6 homecon homecon-bot">
                            <?php  echo $home['objectives_message'];?>
                        </div>
                    </div>
                    <div class="span3 contentsubrow contentsubrow-r">

                            <h5>Announcements</h5>
                        <?php print render($page['twitter']); ?>

                    </div>
                    <?php //print render($page['content']); ?>
                </div>
            </div>
            <div class="span9 contentrow contentrow-bot">
                <?php echo '<img src="'.base_path().path_to_theme() .'/img/body/footlog.jpg" alt="logos" height="100" width="700" />';?>
            </div>
        </div><!--End of bodyerspanner-b-->


    <?php if (!empty($page['sidebar_second'])): ?>
      <aside class="span3" role="complementary">
        <?php print render($page['sidebar_second']); ?>
      </aside>  <!-- /#sidebar-second -->
    <?php endif; ?>

  </div>
</div>
<div class="span12 mains-wrap foot-wrap">
  <?php print render($page['footer']); ?>
</div>
</div>