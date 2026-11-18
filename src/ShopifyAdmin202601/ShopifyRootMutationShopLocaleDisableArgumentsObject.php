<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationShopLocaleDisableArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["locale"];

    protected $locale;

    /**
     * ISO code of the locale to delete.
     */
    public function setLocale($locale): static
    {
        $this->locale = $locale;

        return $this;
    }
}
