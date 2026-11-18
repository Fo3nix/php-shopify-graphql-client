<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootCheckoutBrandingArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["checkoutProfileId"];

    protected $checkoutProfileId;

    /**
     * A globally-unique identifier.
     */
    public function setCheckoutProfileId($checkoutProfileId): static
    {
        $this->checkoutProfileId = $checkoutProfileId;

        return $this;
    }
}
