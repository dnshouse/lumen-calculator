<?php

namespace Tests\Http\Controllers;

use Tests\TestCase;

class CalculatorControllerTest extends TestCase
{
    /**
     * @return void
     */
    public function test_plus_calculate_response()
    {
        /**
         * Given
         */
        $requestData = [
            'a' => 56,
            'b' => 2,
            'operation' => '+'
        ];

        /**
         * When
         */
        $this->post('/api/v1/calculate', $requestData);
        $response = json_decode($this->response->getContent(), true);

        /**
         * Then
         */
        $this->assertResponseOk();
        $this->assertEquals(56+2, $response['result']);
    }

    /**
     * @return void
     */
    public function test_minus_calculate_response()
    {
        /**
         * Given
         */
        $requestData = [
            'a' => 56,
            'b' => 2,
            'operation' => '-'
        ];

        /**
         * When
         */
        $this->post('/api/v1/calculate', $requestData);
        $response = json_decode($this->response->getContent(), true);

        /**
         * Then
         */
        $this->assertResponseOk();
        $this->assertEquals(56-2, $response['result']);
    }

    /**
     * @return void
     */
    public function test_multiplication_calculate_response()
    {
        /**
         * Given
         */
        $requestData = [
            'a' => 56,
            'b' => 2,
            'operation' => '*'
        ];

        /**
         * When
         */
        $this->post('/api/v1/calculate', $requestData);
        $response = json_decode($this->response->getContent(), true);

        /**
         * Then
         */
        $this->assertResponseOk();
        $this->assertEquals(56*2, $response['result']);
    }

    /**
     * @return void
     */
    public function test_division_calculate_response()
    {
        /**
         * Given
         */
        $requestData = [
            'a' => 56,
            'b' => 2,
            'operation' => '/'
        ];

        /**
         * When
         */
        $this->post('/api/v1/calculate', $requestData);
        $response = json_decode($this->response->getContent(), true);

        /**
         * Then
         */
        $this->assertResponseOk();
        $this->assertEquals(56/2, $response['result']);
    }

    /**
     * @return void
     */
    public function test_division_by_zero_calculate_response()
    {
        /**
         * Given
         */
        $requestData = [
            'a' => 56,
            'b' => 0,
            'operation' => '/'
        ];

        /**
         * When
         */
        $this->post('/api/v1/calculate', $requestData);

        /**
         * Then
         */
        $this->assertResponseStatus(422);
    }

    /**
     * @return void
     */
    public function test_unknown_operation_calculate_response()
    {
        /**
         * Given
         */
        $requestData = [
            'a' => 56,
            'b' => 0,
            'operation' => '.'
        ];

        /**
         * When
         */
        $this->post('/api/v1/calculate', $requestData);

        /**
         * Then
         */
        $this->assertResponseStatus(422);
    }
}