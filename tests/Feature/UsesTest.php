<?php

it('has uses page', function () {
    $response = $this->get('/uses');

    $response->assertStatus(200);
});
