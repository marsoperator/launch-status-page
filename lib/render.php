<?php
function render_board($s) {
    include "templates/header.php";
    foreach ($s["blocks"] as $id => $st) {
        include "templates/block.php";
    }
    include "templates/footer.php";
}
