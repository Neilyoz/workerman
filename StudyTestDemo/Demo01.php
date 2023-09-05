<?php
declare(strict_types=1);

function handle01() {
    var_dump('Handle01', debug_backtrace());
}

function handle02() {
    var_dump("Handle02");
    handle01();
}

// handle02();
