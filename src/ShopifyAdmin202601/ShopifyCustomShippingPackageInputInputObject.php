<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\InputObject;
use GraphQL\RawObject;

/**
 * The input fields for a custom shipping package used to pack shipment.
 */
class ShopifyCustomShippingPackageInputInputObject extends InputObject
{
    protected $weight;
    protected $dimensions;
    protected $default;
    protected $name;
    protected $type;

    /**
     * Weight of the empty shipping package.
     */
    public function setWeight(ShopifyWeightInputInputObject $shopifyWeightInputInputObject): static
    {
        $this->weight = $shopifyWeightInputInputObject;

        return $this;
    }

    /**
     * Outside dimensions of the empty shipping package.
     */
    public function setDimensions(ShopifyObjectDimensionsInputInputObject $shopifyObjectDimensionsInputInputObject): static
    {
        $this->dimensions = $shopifyObjectDimensionsInputInputObject;

        return $this;
    }

    /**
     * The default package is the one used to calculate shipping costs on checkout.
     */
    public function setDefault($default): static
    {
        $this->default = $default;

        return $this;
    }

    /**
     * Descriptive name for the package.
     */
    public function setName($name): static
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Type of package.
     */
    public function setType($shopifyShippingPackageType): static
    {
        $this->type = new RawObject($shopifyShippingPackageType);

        return $this;
    }
}
