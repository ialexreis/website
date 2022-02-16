<?php

it('has app pages', function () {
    $data = DB::table('app_pages')->get()->toArray();

    $this->assertFalse(empty($data));
});
