<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\InputObject;

class ShopifyContextualPricingContextInputObject extends InputObject
{
    protected $country;
    protected $companyLocationId;
    protected $locationId;

    public function setCountry($country)
    {
        $this->country = $country;

        return $this;
    }

    public function setCompanyLocationId($companyLocationId)
    {
        $this->companyLocationId = $companyLocationId;

        return $this;
    }

    public function setLocationId($locationId)
    {
        $this->locationId = $locationId;

        return $this;
    }
}
