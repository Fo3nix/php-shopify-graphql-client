<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationFulfillmentConstraintRuleDeleteArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["id"];

    protected $id;

    /**
     * A globally-unique identifier for the fulfillment constraint rule.
     */
    public function setId($id): static
    {
        $this->id = $id;

        return $this;
    }
}
