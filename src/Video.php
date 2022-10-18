<?php
namespace Htlw3r\Bootube;

abstract class Video
{
    private string $name;

    function __construct($name)
    {
        $this->name=$name;
    }

    function getVideoName(): string
    {
        // TODO: Implement getVideoName() method.
        return $this->name;
    }
}