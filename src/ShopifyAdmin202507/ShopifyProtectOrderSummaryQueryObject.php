<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class ShopifyProtectOrderSummaryQueryObject extends QueryObject
{
    const OBJECT_NAME = "ShopifyProtectOrderSummary";

    public function selectEligibility(ShopifyProtectOrderSummaryEligibilityArgumentsObject $argsObject = null)
    {
        $object = new ShopifyProtectOrderEligibilityQueryObject("eligibility");
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
