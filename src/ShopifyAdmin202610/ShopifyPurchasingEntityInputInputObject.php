<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\InputObject;

class ShopifyPurchasingEntityInputInputObject extends InputObject
{
    protected $customerId;
    protected $purchasingCompany;

    public function setCustomerId($customerId)
    {
        $this->customerId = $customerId;

        return $this;
    }

    public function setPurchasingCompany(ShopifyPurchasingCompanyInputInputObject $shopifyPurchasingCompanyInputInputObject)
    {
        $this->purchasingCompany = $shopifyPurchasingCompanyInputInputObject;

        return $this;
    }
}
