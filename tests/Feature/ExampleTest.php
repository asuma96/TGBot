<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function test_the_application_returns_a_successful_response(): void
    {
        $json = '
        {
    "update_id": 724612375,
    "message": {
        "message_id": 98,
        "from": {
            "id": 445374290,
            "is_bot": false,
            "first_name": "asuma_atua⛩️",
            "username": "asuma96",
            "language_code": "en"
        },
        "chat": {
            "id": 445374290,
            "first_name": "asuma_atua⛩️",
            "username": "asuma96",
            "type": "private"
        },
        "date": 1731538798,
        "text": "привет"
    }
}';
        $response = $this->post('/webhook',json_decode($json,true));

        $response->assertStatus(200);
    }
}
