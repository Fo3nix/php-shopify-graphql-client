<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields for a purchasing entity. Can either be a customer or a purchasing company.
 */
class ShopifyPurchasingEntityInputInputObject extends InputObject
{
    protected $customerId;
    protected $purchasingCompany;

    /**
     * Represents a customer. Null if there's a purchasing company.
     */
    public function setCustomerId($customerId): static
    {
        $this->customerId = $customerId;

        return $this;
    }

    /**
     * Represents a purchasing company. Null if there's a customer.
     */
    public function setPurchasingCompany(ShopifyPurchasingCompanyInputInputObject $shopifyPurchasingCompanyInputInputObject): static
    {
        $this->purchasingCompany = $shopifyPurchasingCompanyInputInputObject;

        return $this;
    }
}
