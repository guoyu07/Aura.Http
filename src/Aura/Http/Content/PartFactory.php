<?php
namespace Aura\Http\Content;

use Aura\Http\Header\Collection as Headers;
use Aura\Http\Header\Factory as HeaderFactory;

class PartFactory
{
    public function newInstance()
    {
        return new Part(new Headers(new HeaderFactory));
    }
}
