<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationPaymentCustomizationActivationArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["ids", "enabled"];

    protected $ids;
    protected $enabled;

    /**
     * The global IDs of the payment customizations.
     */
    public function setIds(array $ids): static
    {
        $this->ids = $ids;

        return $this;
    }

    /**
     * The enabled status of the payment customizations.
     */
    public function setEnabled($enabled): static
    {
        $this->enabled = $enabled;

        return $this;
    }
}
