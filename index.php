<?php
require "lib/state.php";
require "lib/render.php";

$s = state_load("data/state.txt");
render_board($s);
