<?php
/**
 * @file
 * Template for the Landing Page layout.
 *
 * Variables:
 * - $css_id: An optional CSS id to use for the layout.
 * - $content: An array of content, each item in the array is keyed to one
 * panel of the layout. This layout supports the following sections:
 */
?>
<div<?php print $attributes ?>>
  <div<?php print drupal_attributes($region_attributes_array['top'])?>>
    <?php print $content['top']; ?>
  </div>
  <div<?php print drupal_attributes($region_attributes_array['middle'])?>>
    <?php print $content['middle']; ?>
  </div>
  <div<?php print drupal_attributes($region_attributes_array['bottom'])?>>
    <?php print $content['bottom']; ?>
  </div>
</div>