<?php

it('can test', function () {
    dd(config()->all());
    expect(true)->toBeTrue();
});
