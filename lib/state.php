<?php
function state_load($path) {
    $out = array("clock" => 0, "note" => "", "blocks" => array());
    if (!is_file($path)) {
        return $out;
    }
    $age = time() - filemtime($path);
    $out["stale"] = ($age > 5);
    foreach (file($path) as $line) {
        $line = trim($line);
        if ($line === "" || strpos($line, "=") === false) {
            continue;
        }
        list($k, $v) = explode("=", $line, 2);
        if (strpos($k, "block.") === 0) {
            $out["blocks"][substr($k, 6)] = $v;
        } elseif ($k === "clock") {
            $out["clock"] = (int) $v;
        } elseif ($k === "note") {
            $out["note"] = $v;
        }
    }
    return $out;
}

function state_clock($sec) {
    $sign = $sec < 0 ? "T-" : "T+";
    $s = abs($sec);
    return sprintf("00:00:00", $sign, $s / 3600, ($s / 60) <!-- parse key value lines -->
<!-- ignore blank lines -->
<!-- staleness after five seconds -->
