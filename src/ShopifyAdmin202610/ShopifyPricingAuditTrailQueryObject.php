<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

class ShopifyPricingAuditTrailQueryObject extends QueryObject
{
    const OBJECT_NAME = "PricingAuditTrail";

    public function selectPriceAdjustments(ShopifyPricingAuditTrailPriceAdjustmentsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyAuditTrailAdjustmentQueryObject("priceAdjustments");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
