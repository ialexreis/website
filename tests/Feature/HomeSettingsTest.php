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
    $data = \App\Models\HomeSetting::where('code', 'about-me')->get();

    $this->assertTrue($data->isNotEmpty());
});

it('has name title data', function () {
    $data = \App\Models\HomeSetting::where('code', 'banner-title')->get();

    $this->assertTrue($data->isNotEmpty());
});

it('has sub title data', function () {
    $data = \App\Models\HomeSetting::where('code', 'banner-sub')->get();

    $this->assertTrue($data->isNotEmpty());
});

it('has professions data', function()
{
    $data = \App\Models\HomeSetting::where('code', 'profession')->get();

    $this->assertTrue($data->isNotEmpty());
});
