<!DOCTYPE html>
<html><head><title>pad</title></head><body>
<h1><?php echo state_clock($s["clock"]); ?></h1>
<?php if (!empty($s["stale"])) { echo "<p class=\"stale\">STALE</p>"; } ?>
<!-- clock and stale banner -->
