<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class ShopPlanQueryObject extends QueryObject
{
    const OBJECT_NAME = "ShopPlan";

    /**
     * @deprecated Use `publicDisplayName` instead.
     */
    public function selectDisplayName()
    {
        $this->selectField("displayName");

        return $this;
    }

    public function selectPartnerDevelopment()
    {
        $this->selectField("partnerDevelopment");

        return $this;
    }

    public function selectPublicDisplayName()
    {
        $this->selectField("publicDisplayName");

        return $this;
    }

    public function selectShopifyPlus()
    {
        $this->selectField("shopifyPlus");

        return $this;
    }
}
