<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootCheckoutBrandingArgumentsObject extends ArgumentsObject
{
    protected $checkoutProfileId;

    public function setCheckoutProfileId($checkoutProfileId)
    {
        $this->checkoutProfileId = $checkoutProfileId;

        return $this;
    }
}
