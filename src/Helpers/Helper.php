<?php

use HassanKerdash\LaravelApiRespond\Services\Respond;

if (!function_exists('respond')) {
    function respond() {
        return new Respond();
    }
}