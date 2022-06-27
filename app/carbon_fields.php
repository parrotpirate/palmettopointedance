<?php

namespace App;

use Carbon_Fields\Container;
use Carbon_Fields\Field;

function crb_load()
{
    \Carbon_Fields\Carbon_Fields::boot();
}
add_action('after_setup_theme', __NAMESPACE__ . '\\crb_load');