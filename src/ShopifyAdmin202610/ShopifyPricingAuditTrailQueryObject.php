<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * A record of how a particular price was determined.
 */
class ShopifyPricingAuditTrailQueryObject extends QueryObject
{
    const OBJECT_NAME = "PricingAuditTrail";

    /**
     * The adjustments used to determine the final price, in order of their application.
     */
    public function selectPriceAdjustments(?ShopifyPricingAuditTrailPriceAdjustmentsArgumentsObject $argsObject = null): ShopifyAuditTrailAdjustmentQueryObject
    {
        $object = new ShopifyAuditTrailAdjustmentQueryObject("priceAdjustments");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
