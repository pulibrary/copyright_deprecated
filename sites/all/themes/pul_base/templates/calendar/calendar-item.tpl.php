<?php
/**
 * @file
 * Template to display view fields as a calendar item.
 * 
 * $item 
 *   A result object for this calendar item. Note this is
 *   not a complete entity. It will contain various
 *   values as added by the row plugin, which may depend
 *   on the entity type.
 * 
 * $rendered_fields
 *   An array of the rendered html for the fields in the item,
 *   as generated by Views. This does not include excluded
 *   fields and should take into account any special processing
 *   added in the field settings.
 * 
 * Calendar info for this individual calendar item is in local time --
 * the user timezone where configurable timezones are allowed and set,
 * otherwise the site timezone. If this item has extends over more than
 * one day, it has been broken apart into separate items for each calendar
 * date and calendar_start will be no earlier than the start of
 * the current day and calendar_end will be no later than the end
 * of the current day.
 * 
 * $calendar_start - A formatted datetime start date for this item.
 *   i.e. '2008-05-12 05:26:15'.
 * $calendar_end - A formatted datetime end date for this item,
 *   the same as the start date except for fields that have from/to
 *   fields defined, like Date module dates. 
 * $calendar_start_date - a PHP date object for the start time.
 * $calendar_end_date - a PHP date object for the end time.
 * 
 * You can use PHP date functions on the date object to display date
 * information in other ways, like:
 * 
 *   print date_format($calendar_start_date, 'l, j F Y - g:ia');
 * 
 * @see template_preprocess_calendar_item.
 */
$index = 0;

if (substr($item->date_id, -1)==0) {

?>
<?php if (isset($cur_week)): ?>
  <?php print $cur_week ?>
<?php endif; ?>
<?php print theme('calendar_stripe_stripe', array('item' => $item)); ?>
<div class="<?php print $item->date_id ?> contents <?php print $item->granularity; ?>view">
  <?php foreach ($rendered_fields as $field): ?>
    <?php if ($index++ == 0 && (isset($item->continuation) && $item->continuation)) : ?>
    <div class="continuation"></div>
    <?php endif;?>
    <?php print $field; ?>
  <?php endforeach; ?>
</div>  
<?php if (isset($item->continues) && $item->continues) : ?>
<div class="continues"></div>
<?php else : ?>
<?php endif;?>
<?php 
}
?>	