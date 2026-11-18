<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields to specify a region.
 */
class ShopifyDeliveryProvinceInputInputObject extends InputObject
{
    const REQUIRED = ["code"];

    protected $code;

    /**
     * The code of the region.
     */
    public function setCode($code): static
    {
        $this->code = $code;

        return $this;
    }
}
