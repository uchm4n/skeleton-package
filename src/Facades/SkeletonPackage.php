<?php

namespace Uchm4n\SkeletonPackage\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Uchm4n\SkeletonPackage\SkeletonPackage
 */
class SkeletonPackage extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'skeleton-package';
    }
}
