<?php
$month = intval(date("m")); ?>

<?php if ($month >= 6 && $month <= 8){ ?>
<p> It is <?=date("M")?>, it is summer time!</p>
<?php } else { ?>
    <p>Sorry, it is not summer.</p>
<?php } ?>
