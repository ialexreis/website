<?php

use App\Models\Stack;

it('has stack data', function () {
    $data = Stack::all();

    expect($data)->toBeIterable();
    expect($data->isNotEmpty())->toBeTrue();
});

it('has experienced stack data', function () {
    $data = Stack::where('tag', 'XP')->get();

    expect($data)->toBeIterable();
    expect($data->isNotEmpty())->toBeTrue();
});

it('has learning stack data', function () {
    $data = Stack::where('tag', 'LRN')->get();
    expect($data)->toBeIterable();
    expect($data->isNotEmpty())->toBeTrue();
});


it('has stack section', function () {
    $response = $this->get('/');

    $response->assertSeeLivewire(App\Http\Livewire\StackBanner::class);
});
