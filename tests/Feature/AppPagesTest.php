<?php

it('has app pages', function () {
    $data = DB::table('app_pages')->get();

    $this->assertTrue($data->isNotEmpty());
});
