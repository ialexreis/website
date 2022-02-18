<?php

it('has home page', function () {
    $response = $this->get('/');

    $response->assertStatus(200);
});

it('has navigation component', function () {
    $response = $this->get('/');
    $response->assertSeeLivewire(App\Http\Livewire\NavigationBar::class);
});

it('has hero component', function () {
    $response = $this->get('/');
    $response->assertSeeLivewire(App\Http\Livewire\HeroBanner::class);
});


it('has about component', function () {
    $response = $this->get('/');
    $response->assertSeeLivewire(App\Http\Livewire\AboutBanner::class);
});

it('has stack component', function () {
    $response = $this->get('/');
    $response->assertSeeLivewire(App\Http\Livewire\StackBanner::class);
});

it('has blog highlights component', function () {
    $response = $this->get('/');
    $response->assertSeeLivewire(App\Http\Livewire\HighlightsBanner::class);
});

it('has footer component', function () {
    $response = $this->get('/');
    $response->assertSeeLivewire(App\Http\Livewire\Footer::class);
});



