<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields for updating a flat rate group.
 */
class ShopifyDeliveryFlatRateGroupUpdateInputInputObject extends InputObject
{
    const REQUIRED = ["id"];

    protected $id;
    protected $rate;
    protected $conditions;

    /**
     * The globally unique ID of the flat rate group to update.
     */
    public function setId($id): static
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Updates to the fixed-price rate and optional transit time.
     */
    public function setRate(ShopifyDeliveryFlatRateUpdateInputInputObject $shopifyDeliveryFlatRateUpdateInputInputObject): static
    {
        $this->rate = $shopifyDeliveryFlatRateUpdateInputInputObject;

        return $this;
    }

    /**
     * Collection and origin location conditions for this rate group.
     */
    public function setConditions(ShopifyDeliveryRateConditionsUpdateInputInputObject $shopifyDeliveryRateConditionsUpdateInputInputObject): static
    {
        $this->conditions = $shopifyDeliveryRateConditionsUpdateInputInputObject;

        return $this;
    }
}
