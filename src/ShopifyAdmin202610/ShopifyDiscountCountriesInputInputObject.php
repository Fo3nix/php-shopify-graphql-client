<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\InputObject;
use GraphQL\RawObject;

/**
 * The input fields for a list of countries to add or remove from the free shipping discount.
 */
class ShopifyDiscountCountriesInputInputObject extends InputObject
{
    protected $add;
    protected $remove;

    /**
     * The country codes to add to the list of countries where the discount applies.
     */
    public function setAdd(array $add): static
    {
        $this->add = array_map(function ($value) {
            return new RawObject($value);
        }, $add);

        return $this;
    }

    /**
     * The country codes to remove from the list of countries where the discount applies.
     */
    public function setRemove(array $remove): static
    {
        $this->remove = array_map(function ($value) {
            return new RawObject($value);
        }, $remove);

        return $this;
    }
}
