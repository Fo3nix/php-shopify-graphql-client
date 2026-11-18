<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields for updating a market's shipping configuration.
 */
class ShopifyShippingConfigurationUpdateInputInputObject extends InputObject
{
    protected $isEnabled;
    protected $optionDefinitionsToCreate;
    protected $optionDefinitionsToUpdate;
    protected $optionDefinitionsToDelete;

    /**
     * Whether shipping is enabled for this market. When false, customers in this market won't see shipping options at checkout. Defaults to true when the market has no shipping configuration; otherwise preserves the existing value.
     */
    public function setIsEnabled($isEnabled): static
    {
        $this->isEnabled = $isEnabled;

        return $this;
    }

    /**
     * Shipping options to create for this market.
     */
    public function setOptionDefinitionsToCreate(array $optionDefinitionsToCreate): static
    {
        $this->optionDefinitionsToCreate = $optionDefinitionsToCreate;

        return $this;
    }

    /**
     * Shipping options to update, matched by ID.
     */
    public function setOptionDefinitionsToUpdate(array $optionDefinitionsToUpdate): static
    {
        $this->optionDefinitionsToUpdate = $optionDefinitionsToUpdate;

        return $this;
    }

    /**
     * The IDs of shipping options to remove.
     */
    public function setOptionDefinitionsToDelete(array $optionDefinitionsToDelete): static
    {
        $this->optionDefinitionsToDelete = $optionDefinitionsToDelete;

        return $this;
    }
}
