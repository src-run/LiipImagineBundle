<?php

/*
 * This file is part of the `liip/LiipImagineBundle` project.
 *
 * (c) https://github.com/liip/LiipImagineBundle/graphs/contributors
 *
 * For the full copyright and license information, please view the LICENSE.md
 * file that was distributed with this source code.
 */

require_once __DIR__.'/autoload.php';

if (!interface_exists('Symfony\Component\ExpressionLanguage\ExpressionFunctionProviderInterface')) {
    require_once __DIR__.'/ExpressionFunctionProviderInterface.php';
}
