<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationDeliveryCustomizationActivationArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["ids", "enabled"];

    protected $ids;
    protected $enabled;

    /**
     * The global IDs of the delivery customizations.
     */
    public function setIds(array $ids): static
    {
        $this->ids = $ids;

        return $this;
    }

    /**
     * The enabled status of the delivery customizations.
     */
    public function setEnabled($enabled): static
    {
        $this->enabled = $enabled;

        return $this;
    }
}
