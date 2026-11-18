<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * Representation of 3d vectors and points. It can represent
 * either the coordinates of a point in space, a direction, or
 * size. Presented as an object with three floating-point values.
 */
class ShopifyVector3QueryObject extends QueryObject
{
    const OBJECT_NAME = "Vector3";

    /**
     * The x coordinate of Vector3.
     */
    public function selectX(): static
    {
        $this->selectField("x");

        return $this;
    }

    /**
     * The y coordinate of Vector3.
     */
    public function selectY(): static
    {
        $this->selectField("y");

        return $this;
    }

    /**
     * The z coordinate of Vector3.
     */
    public function selectZ(): static
    {
        $this->selectField("z");

        return $this;
    }
}
