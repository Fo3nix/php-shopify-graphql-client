<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootAbandonmentByAbandonedCheckoutIdArgumentsObject extends ArgumentsObject
{
    protected $abandonedCheckoutId;

    public function setAbandonedCheckoutId($abandonedCheckoutId)
    {
        $this->abandonedCheckoutId = $abandonedCheckoutId;

        return $this;
    }
}
