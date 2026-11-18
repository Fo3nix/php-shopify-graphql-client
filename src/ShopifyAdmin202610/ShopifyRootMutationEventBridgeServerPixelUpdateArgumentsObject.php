<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationEventBridgeServerPixelUpdateArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["arn"];

    protected $arn;

    /**
     * The ARN for the EventBridge endpoint to which customer events are to be sent.
     */
    public function setArn($arn): static
    {
        $this->arn = $arn;

        return $this;
    }
}
