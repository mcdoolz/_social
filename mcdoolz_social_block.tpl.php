<?php

/**
 * @file
 * Template for mcdoolz_social_block.
 */

foreach($links as $network => $link) :
?>

<a href="<?php print $link['link']; ?>" target="_blank" class="mcdoolz-social-network-link mcdoolz-social-network-<?php print $network; ?>-link">
  <?php if ($displaymode == "both" || $displaymode == "label") : ?>
    <span class="mcdoolz-social-network-name mcdoolz-social-network-<?php print $network; ?>-name"><?php print $network; ?></span>
  <?php endif; ?>
  <?php if ($displaymode == "both" || $displaymode == "icons") : ?>
    <i class="<?php print $link['classes']; ?>" aria-hidden="true"></i>
  <?php endif; ?>
</a>

<?php
endforeach;
?>
