<?php

it('has blog page', function () {
    $response = $this->get('/blog');

    $response->assertStatus(200);
});
