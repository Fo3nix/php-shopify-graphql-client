<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\ArgumentsObject;

class RootCheckoutBrandingArgumentsObject extends ArgumentsObject
{
    protected $checkoutProfileId;

    public function setCheckoutProfileId($checkoutProfileId)
    {
        $this->checkoutProfileId = $checkoutProfileId;

        return $this;
    }
}
