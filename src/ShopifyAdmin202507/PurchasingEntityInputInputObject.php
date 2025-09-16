<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\InputObject;

class PurchasingEntityInputInputObject extends InputObject
{
    protected $customerId;
    protected $purchasingCompany;

    public function setCustomerId($customerId)
    {
        $this->customerId = $customerId;

        return $this;
    }

    public function setPurchasingCompany(PurchasingCompanyInputInputObject $purchasingCompanyInputInputObject)
    {
        $this->purchasingCompany = $purchasingCompanyInputInputObject;

        return $this;
    }
}
