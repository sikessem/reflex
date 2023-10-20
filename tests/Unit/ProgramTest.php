<?php

declare(strict_types=1);

namespace Sikessem\Reflex\Tests\Unit;

use Sikessem\Reflex\Program;

it('should output "Hello World!"', function () {
    ob_start();
    Program::main();
    expect(ob_get_clean())->toEqual('Hello World!');
});
