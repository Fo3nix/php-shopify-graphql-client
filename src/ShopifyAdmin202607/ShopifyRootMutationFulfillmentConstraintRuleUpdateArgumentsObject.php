<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\ArgumentsObject;
use GraphQL\RawObject;

class ShopifyRootMutationFulfillmentConstraintRuleUpdateArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["id", "deliveryMethodTypes"];

    protected $id;
    protected $deliveryMethodTypes;

    /**
     * A globally-unique identifier for the fulfillment constraint rule.
     */
    public function setId($id): static
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Specifies the delivery method types to be updated.
     * If not provided or providing an empty list will associate the function with all delivery methods.
     */
    public function setDeliveryMethodTypes(array $deliveryMethodTypes): static
    {
        $this->deliveryMethodTypes = array_map(function ($value) {
            return new RawObject($value);
        }, $deliveryMethodTypes);

        return $this;
    }
}
