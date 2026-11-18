<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationTaxAppConfigureArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["ready"];

    protected $ready;

    /**
     * Configures whether the tax app is correctly configured and ready to be used.
     */
    public function setReady($ready): static
    {
        $this->ready = $ready;

        return $this;
    }
}
