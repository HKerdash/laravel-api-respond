<?php

namespace HassanKerdash\LaravelApiRespond\Services;

use Illuminate\Http\JsonResponse;

class Respond
{
    public $status_key = "status";
    public $enable_status_key = true;
    public $data_key = "data";
    public $message_key = "message";
    public $messages_key = "messages";

    public function __construct(
        $status_key = "status",
        $enable_status_key = true,
        $data_key = "data",
        $message_key = "message",
        $messages_key = "messages"
    ) {
        $this->status_key = $status_key;
        $this->enable_status_key = $enable_status_key;
        $this->data_key = $data_key;
        $this->message_key = $message_key;
        $this->messages_key = $messages_key;
    }

    public function response(string|array $data, string|array $message = null, $code = 200, $status = true): JsonResponse
    {
        if ($this->enable_status_key) {
            $response_data = collect([$this->status_key => true]);
        } else {
            $response_data = collect([]);
        }

        if (!is_null($message)) {
            if (is_array($message)) {
                $response_data->put($this->messages_key, $message);
            } else {
                $response_data->put($this->message_key, $message);
            }
        }

        $response_data->put($this->data_key, $data);

        return response()->json(data: $response_data, status: $code);
    }

    public function success(string|array $data, string|array $message = null, $code = 200, $status = true): JsonResponse
    {
        return $this->response($data, $message, $code);
    }

    public function error(string|array $message, string|array $data = null, $code = 400, $status = false): JsonResponse
    {
        return $this->response($data, $message, $code);
    }

    public function ok(string|array $data, string|array $message = null, $code = 200, $status = true): JsonResponse
    {
        return $this->response($data, $message, $code);
    }

    public function created(string|array $data, string|array $message = null, $code = 201, $status = true): JsonResponse
    {
        return $this->response($data, $message, $code);
    }

    public function accepted(string|array $data, string|array $message = null, $code = 202, $status = true): JsonResponse
    {
        return $this->response($data, $message, $code);
    }

    public function noContent(string|array $message = null, $code = 204, $status = true): JsonResponse
    {
        return $this->response([], $message, $code);
    }

    public function badRequest(string|array $message, string|array $data = null, $code = 400, $status = false): JsonResponse
    {
        return $this->response($data, $message, $code);
    }

    public function notFound(string|array $message, string|array $data = null, $code = 404, $status = false): JsonResponse
    {
        return $this->response($data, $message, $code);
    }

    public function methodNotAllowed(string|array $message, string|array $data = null, $code = 405, $status = false): JsonResponse
    {
        return $this->response($data, $message, $code);
    }

    public function conflict(string|array $message, string|array $data = null, $code = 409, $status = false): JsonResponse
    {
        return $this->response($data, $message, $code);
    }

    public function internalServerError(string|array $message, string|array $data = null, $code = 500, $status = false): JsonResponse
    {
        return $this->response($data, $message, $code);
    }

    public function unauthorized(string|array $message, string|array $data = null, $code = 401, $status = false): JsonResponse
    {
        return $this->response($data, $message, $code);
    }

    public function forbidden(string|array $message, string|array $data = null, $code = 403, $status = false): JsonResponse
    {
        return $this->response($data, $message, $code);
    }

    public function gone(string|array $message, string|array $data = null, $code = 410, $status = false): JsonResponse
    {
        return $this->response($data, $message, $code);
    }

    public function lengthRequired(string|array $message, string|array $data = null, $code = 411, $status = false): JsonResponse
    {
        return $this->response($data, $message, $code);
    }

    public function preconditionFailed(string|array $message, string|array $data = null, $code = 412, $status = false): JsonResponse
    {
        return $this->response($data, $message, $code);
    }

    public function unprocessableEntity(string|array $message, string|array $data = null, $code = 422, $status = false): JsonResponse
    {
        return $this->response($data, $message, $code);
    }

    public function tooManyRequests(string|array $message, string|array $data = null, $code = 429, $status = false): JsonResponse
    {
        return $this->response($data, $message, $code);
    }

    public function notImplemented(string|array $message, string|array $data = null, $code = 501, $status = false): JsonResponse
    {
        return $this->response($data, $message, $code);
    }

    public function serviceUnavailable(string|array $message, string|array $data = null, $code = 503, $status = false): JsonResponse
    {
        return $this->response($data, $message, $code);
    }

    public function badGateway(string|array $message, string|array $data = null, $code = 502, $status = false): JsonResponse
    {
        return $this->response($data, $message, $code);
    }

    public function gatewayTimeout(string|array $message, string|array $data = null, $code = 504, $status = false): JsonResponse
    {
        return $this->response($data, $message, $code);
    }
}