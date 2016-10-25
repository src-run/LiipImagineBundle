<?php

/*
 * This file is part of the `liip/LiipImagineBundle` project.
 *
 * (c) https://github.com/liip/LiipImagineBundle/graphs/contributors
 *
 * For the full copyright and license information, please view the LICENSE.md
 * file that was distributed with this source code.
 */

if (false !== $loader = @include_once(__DIR__.'/../../vendor/autoload.php')) {
    return $loader;
}

echo <<<DIRECTIONS

You must install the project dependencies using Composer, which can
be installed by following the direction from their website at:

https://getcomposer.org/download/

After downloading Composer, configure the version of Symfony to use
and install the project dependencies using the following commands:

php composer.phar require --no-update "symfony/symfony:~3.0"
php composer.phar install


DIRECTIONS;

exit(1);
