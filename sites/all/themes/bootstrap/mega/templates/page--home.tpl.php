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
                                <img src="/sites/all/themes/bootstrap/mega/img/body/smiler.png" alt="smile" height="108" width="140" />
                            </div>
                            <div class="span4 homecon-topsec homecon-topsec-b">
                                <h3>Mega Minnesota</h3>
                                <h4>Welcome to our Portal</h4>
                <span>We are a non-profit and non-trading organization devoted to its member's welfare.This Association is not a political one nor is it to be associated or affiliated to any political organization or party.
                </span>
                            </div>
                        </div>
                        <div class="span6 homecon homecon-bot">
                            <span class="xlead">Our key objectives are:</span> </br>
                            <ul>
                                <li>
                                    a) To promote unity and solidarity of the members and other organizations with similar goals, eg: the church.
                                </li>
                                <li>
                                    b) To do and carry out those objectives that are generally and naturally related to the main objectives.
                                </li>
                                <li>
                                    c) To support members both financially and emotionally in the event of loss of a member or a close relative.
                                </li>
                            </ul>
                            <h5>Our Mission</h5>
                            <p>Our mission is to promote unity, solidarity and cultural practices and to support our members in social issues and total well being.</p>
                            <p>Mega Minnesota is a non- Profit and non-trading organization to be devoted to its member's welfare. It is non-political and is not to
                                be associated or affiliated with any political party or organization.</p>
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