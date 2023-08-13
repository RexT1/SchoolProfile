<?php

class Login_test extends TestCase
{
    public function setUp(): void
    {
        $this->resetInstance(); // Reset instance of CodeIgniter
    }

    public function test_successful_login()
    {
        $output = $this->request(
            'POST',
            'admin/login/auth',
            [
                'username' => 'aqmal',
                'password' => '123',
            ]
        );

        // Check if the response code is a redirect
        $this->assertEquals(302, $this->response->getStatusCode());

        // Check if redirected to the correct URL after successful login
        $this->assertRedirect('admin/dashboard');

        // You can add more assertions based on your specific implementation
    }

    public function test_failed_login()
    {
        $output = $this->request(
            'POST',
            'admin/login/auth',
            [
                'username' => 'aqmal',
                'password' => '122',
            ]
        );

        // Check if the response code is not a redirect (failed login)
        $this->assertEquals(200, $this->response->getStatusCode());

        // Check if the flash data is set for an error message
        $this->assertTrue($this->session->has('msg'));
    }
}
