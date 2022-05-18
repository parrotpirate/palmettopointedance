<?php

namespace App;

use Carbon_Fields\Container;
use Carbon_Fields\Field;

function crb_attach_theme_options()
{
    Container::make('theme_options', __('Theme Options'))
        ->add_fields(array(
            Field::make('text', 'crb_text', 'Text Field'),
        ));
}
add_action('carbon_fields_register_fields', __NAMESPACE__ . '\\crb_attach_theme_options');

function crb_load()
{
    \Carbon_Fields\Carbon_Fields::boot();
}
add_action('after_setup_theme', __NAMESPACE__ . '\\crb_load');