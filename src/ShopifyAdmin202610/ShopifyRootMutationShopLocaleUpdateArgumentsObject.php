<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationShopLocaleUpdateArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["locale", "shopLocale"];

    protected $locale;
    protected $shopLocale;

    /**
     * ISO code of the locale to update.
     */
    public function setLocale($locale): static
    {
        $this->locale = $locale;

        return $this;
    }

    /**
     * Specifies the input fields for a shop locale.
     */
    public function setShopLocale(ShopifyShopLocaleInputInputObject $shopifyShopLocaleInputInputObject): static
    {
        $this->shopLocale = $shopifyShopLocaleInputInputObject;

        return $this;
    }
}
