<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields for the context in which the catalog's publishing and pricing rules apply.
 */
class ShopifyCatalogContextInputInputObject extends InputObject
{
    protected $marketIds;
    protected $companyLocationIds;

    /**
     * The IDs of the markets to associate to the catalog.
     */
    public function setMarketIds(array $marketIds): static
    {
        $this->marketIds = $marketIds;

        return $this;
    }

    /**
     * The IDs of the company locations to associate to the catalog.
     */
    public function setCompanyLocationIds(array $companyLocationIds): static
    {
        $this->companyLocationIds = $companyLocationIds;

        return $this;
    }
}
