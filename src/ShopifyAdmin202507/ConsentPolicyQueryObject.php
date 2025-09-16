<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class ConsentPolicyQueryObject extends QueryObject
{
    const OBJECT_NAME = "ConsentPolicy";

    public function selectConsentRequired()
    {
        $this->selectField("consentRequired");

        return $this;
    }

    public function selectCountryCode()
    {
        $this->selectField("countryCode");

        return $this;
    }

    public function selectDataSaleOptOutRequired()
    {
        $this->selectField("dataSaleOptOutRequired");

        return $this;
    }

    public function selectId()
    {
        $this->selectField("id");

        return $this;
    }

    public function selectRegionCode()
    {
        $this->selectField("regionCode");

        return $this;
    }

    public function selectShopId()
    {
        $this->selectField("shopId");

        return $this;
    }
}
