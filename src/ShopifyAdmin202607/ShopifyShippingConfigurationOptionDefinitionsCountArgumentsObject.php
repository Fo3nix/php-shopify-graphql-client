<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyShippingConfigurationOptionDefinitionsCountArgumentsObject extends ArgumentsObject
{
    protected $active;

    /**
     * Filter shipping option count by active state. When true, counts only active shipping options; when false, counts only inactive shipping options; when omitted or null, counts all shipping options.
     */
    public function setActive($active): static
    {
        $this->active = $active;

        return $this;
    }
}
