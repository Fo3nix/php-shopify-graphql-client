<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\ArgumentsObject;
use GraphQL\RawObject;

class ShopifyRootMutationFulfillmentConstraintRuleCreateArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["deliveryMethodTypes"];

    protected $functionHandle;
    protected $deliveryMethodTypes;
    protected $metafields;

    /**
     * The handle of the function providing the constraint rule.
     */
    public function setFunctionHandle($functionHandle): static
    {
        $this->functionHandle = $functionHandle;

        return $this;
    }

    /**
     * Associate the function with one or multiple delivery method types.
     */
    public function setDeliveryMethodTypes(array $deliveryMethodTypes): static
    {
        $this->deliveryMethodTypes = array_map(function ($value) {
            return new RawObject($value);
        }, $deliveryMethodTypes);

        return $this;
    }

    /**
     * Metafields to associate to the fulfillment constraint rule.
     */
    public function setMetafields(array $metafields): static
    {
        $this->metafields = $metafields;

        return $this;
    }
}
