<?php

declare(strict_types=1);

namespace HassanKerdash\LaravelApiRespond\Traits;

use HassanKerdash\LaravelApiRespond\Services\Respond;

trait ApiRespond
{
    public $status_key = "status";
    public $enable_status_key = true;
    public $data_key = "data";
    public $message_key = "message";
    public $messages_key = "messages";

    public function respond(): Respond
    {
        return new Respond(
            $this->status_key,
            $this->enable_status_key,
            $this->data_key,
            $this->message_key,
            $this->messages_key,
        );
    }
}