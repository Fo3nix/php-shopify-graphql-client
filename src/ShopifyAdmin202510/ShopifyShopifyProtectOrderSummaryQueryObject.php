<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202510;

use GraphQL\SchemaObject\QueryObject;

class ShopifyShopifyProtectOrderSummaryQueryObject extends QueryObject
{
    const OBJECT_NAME = "ShopifyProtectOrderSummary";

    public function selectEligibility(ShopifyShopifyProtectOrderSummaryEligibilityArgumentsObject $argsObject = null)
    {
        $object = new ShopifyShopifyProtectOrderEligibilityQueryObject("eligibility");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectStatus()
    {
        $this->selectField("status");

        return $this;
    }
}
