<?php

it('has home settings model', fn() => $this->assertTrue(class_exists('\App\Models\HomeSetting')));

it('has home settings page', function () {
    $response = $this->get('/');

    $response->assertStatus(200);
});

it('has home settings data', function () {
    $data = \App\Models\HomeSetting::all();

    $this->assertTrue($data->isNotEmpty());
});

it('has about me data', function() {
    $aboutMe = \App\Models\HomeSetting::where('code', 'about-me')->get();

    $this->assertTrue($aboutMe->isNotEmpty());
});
