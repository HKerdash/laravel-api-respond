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

    public function response(string|array|object|null $data=null, string|array|object|null $message = null, $code = 200, bool $status = true, string|array|object|null $response = null): JsonResponse
    {
        if(!is_null($response))
            return response()->json(data: $response, status: $code);

        if ($this->enable_status_key) {
            $response_data = collect([$this->status_key => $status]);
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

        if (!is_null($data))
            $response_data->put($this->data_key, $data);

        return response()->json(data: $response_data, status: $code);
    }

    public function success(string|array|object|null $data=null, string|array|object|null $message = null, $code = 200, bool $status = true, string|array|object|null $response = null): JsonResponse
    {
        return $this->response($data, $message, $code, $status, $response);
    }

    public function error(string|array|object|null $message, string|array|object|null $data = null, $code = 400, bool $status = false, string|array|object|null $response = null): JsonResponse
    {
        return $this->response($data, $message, $code, $status, $response);
    }

    public function ok(string|array|object|null $message = null, string|array|object|null $data = null, $code = 200, bool $status = true, string|array|object|null $response = null): JsonResponse
    {
        return $this->response($data, $message, $code, $status, $response);
    }

    public function created(string|array|object|null $data = null, string|array|object|null $message = null, $code = 201, bool $status = true, string|array|object|null $response = null): JsonResponse
    {
        return $this->response($data, $message, $code, $status, $response);
    }

    public function accepted(string|array|object|null $message = null, string|array|object|null $data = null, $code = 202, bool $status = true, string|array|object|null $response = null): JsonResponse
    {
        return $this->response($data, $message, $code, $status, $response);
    }

    public function noContent(string|array|object|null $message = null, $code = 204, bool $status = true, string|array|object|null $response = null): JsonResponse
    {
        return $this->response([], $message, $code, $status);
    }

    public function badRequest(string|array|object|null $message, string|array|object|null $data = null, $code = 400, bool $status = false, string|array|object|null $response = null): JsonResponse
    {
        return $this->response($data, $message, $code, $status, $response);
    }

    public function notFound(string|array|object|null $message, string|array|object|null $data = null, $code = 404, bool $status = false, string|array|object|null $response = null): JsonResponse
    {
        return $this->response($data, $message, $code, $status, $response);
    }

    public function methodNotAllowed(string|array|object|null $message, string|array|object|null $data = null, $code = 405, bool $status = false, string|array|object|null $response = null): JsonResponse
    {
        return $this->response($data, $message, $code, $status, $response);
    }

    public function conflict(string|array|object|null $message, string|array|object|null $data = null, $code = 409, bool $status = false, string|array|object|null $response = null): JsonResponse
    {
        return $this->response($data, $message, $code, $status, $response);
    }

    public function internalServerError(string|array|object|null $message, string|array|object|null $data = null, $code = 500, bool $status = false, string|array|object|null $response = null): JsonResponse
    {
        return $this->response($data, $message, $code, $status, $response);
    }

    public function unauthorized(string|array|object|null $message, string|array|object|null $data = null, $code = 401, bool $status = false, string|array|object|null $response = null): JsonResponse
    {
        return $this->response($data, $message, $code, $status, $response);
    }

    public function forbidden(string|array|object|null $message, string|array|object|null $data = null, $code = 403, bool $status = false, string|array|object|null $response = null): JsonResponse
    {
        return $this->response($data, $message, $code, $status, $response);
    }

    public function gone(string|array|object|null $message, string|array|object|null $data = null, $code = 410, bool $status = false, string|array|object|null $response = null): JsonResponse
    {
        return $this->response($data, $message, $code, $status, $response);
    }

    public function lengthRequired(string|array|object|null $message, string|array|object|null $data = null, $code = 411, bool $status = false, string|array|object|null $response = null): JsonResponse
    {
        return $this->response($data, $message, $code, $status, $response);
    }

    public function preconditionFailed(string|array|object|null $message, string|array|object|null $data = null, $code = 412, bool $status = false, string|array|object|null $response = null): JsonResponse
    {
        return $this->response($data, $message, $code, $status, $response);
    }

    public function unprocessableEntity(string|array|object|null $message, string|array|object|null $data = null, $code = 422, bool $status = false, string|array|object|null $response = null): JsonResponse
    {
        return $this->response($data, $message, $code, $status, $response);
    }

    public function tooManyRequests(string|array|object|null $message, string|array|object|null $data = null, $code = 429, bool $status = false, string|array|object|null $response = null): JsonResponse
    {
        return $this->response($data, $message, $code, $status, $response);
    }

    public function notImplemented(string|array|object|null $message, string|array|object|null $data = null, $code = 501, bool $status = false, string|array|object|null $response = null): JsonResponse
    {
        return $this->response($data, $message, $code, $status, $response);
    }

    public function serviceUnavailable(string|array|object|null $message, string|array|object|null $data = null, $code = 503, bool $status = false, string|array|object|null $response = null): JsonResponse
    {
        return $this->response($data, $message, $code, $status, $response);
    }

    public function badGateway(string|array|object|null $message, string|array|object|null $data = null, $code = 502, bool $status = false, string|array|object|null $response = null): JsonResponse
    {
        return $this->response($data, $message, $code, $status, $response);
    }

    public function gatewayTimeout(string|array|object|null $message, string|array|object|null $data = null, $code = 504, bool $status = false, string|array|object|null $response = null): JsonResponse
    {
        return $this->response($data, $message, $code, $status, $response);
    }
}
