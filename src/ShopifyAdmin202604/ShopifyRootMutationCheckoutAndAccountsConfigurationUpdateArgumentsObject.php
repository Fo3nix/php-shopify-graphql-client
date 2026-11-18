<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationCheckoutAndAccountsConfigurationUpdateArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["id", "configuration"];

    protected $id;
    protected $configuration;

    /**
     * The ID of the configuration to update.
     */
    public function setId($id): static
    {
        $this->id = $id;

        return $this;
    }

    /**
     * The intended changes to the configuration.
     */
    public function setConfiguration(ShopifyCheckoutAndAccountsConfigurationInputInputObject $shopifyCheckoutAndAccountsConfigurationInputInputObject): static
    {
        $this->configuration = $shopifyCheckoutAndAccountsConfigurationInputInputObject;

        return $this;
    }
}
