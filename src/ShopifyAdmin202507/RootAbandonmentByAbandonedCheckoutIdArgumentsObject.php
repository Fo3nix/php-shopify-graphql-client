<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\ArgumentsObject;

class RootAbandonmentByAbandonedCheckoutIdArgumentsObject extends ArgumentsObject
{
    protected $abandonedCheckoutId;

    public function setAbandonedCheckoutId($abandonedCheckoutId)
    {
        $this->abandonedCheckoutId = $abandonedCheckoutId;

        return $this;
    }
}
