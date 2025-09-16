<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\InputObject;

class PurchasingCompanyInputInputObject extends InputObject
{
    protected $companyId;
    protected $companyContactId;
    protected $companyLocationId;

    public function setCompanyId($companyId)
    {
        $this->companyId = $companyId;

        return $this;
    }

    public function setCompanyContactId($companyContactId)
    {
        $this->companyContactId = $companyContactId;

        return $this;
    }

    public function setCompanyLocationId($companyLocationId)
    {
        $this->companyLocationId = $companyLocationId;

        return $this;
    }
}
