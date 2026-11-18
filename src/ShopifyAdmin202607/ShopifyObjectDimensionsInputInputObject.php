<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\InputObject;
use GraphQL\RawObject;

/**
 * The input fields for dimensions of an object.
 */
class ShopifyObjectDimensionsInputInputObject extends InputObject
{
    const REQUIRED = ["length", "width", "height", "unit"];

    protected $length;
    protected $width;
    protected $height;
    protected $unit;

    /**
     * The length in `unit`s.
     */
    public function setLength($length): static
    {
        $this->length = $length;

        return $this;
    }

    /**
     * The width in `unit`s.
     */
    public function setWidth($width): static
    {
        $this->width = $width;

        return $this;
    }

    /**
     * The height in `unit`s.
     */
    public function setHeight($height): static
    {
        $this->height = $height;

        return $this;
    }

    /**
     * Unit of measurement for `length`, `width`, and `height`.
     */
    public function setUnit($shopifyLengthUnit): static
    {
        $this->unit = new RawObject($shopifyLengthUnit);

        return $this;
    }
}
