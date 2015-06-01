<?php

  /**
   *	@file: georoute-page.tpl.php
   *	builds a georoute lookup page for users to see
   *
   *	Available variables
   *	 - $title: name of georoute
   *	 - $body:  description body
   *	 - $link:  link to the game
   */
?>

<div class="georoute">
  <h3><?php print $title ?></h3>
  <div class="description"><?php print $description; ?></div>
  <ul class="links">
    <?php foreach ($links as $link) : ?>
      <li><?php print $link; ?></li>
    <?php endforeach; ?>
  </ul>
</div>