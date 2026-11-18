<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

/**
 * A summary of Shopify Protect details for an order.
 */
class ShopifyShopifyProtectOrderSummaryQueryObject extends QueryObject
{
    const OBJECT_NAME = "ShopifyProtectOrderSummary";

    /**
     * The eligibility details of an order's protection against fraudulent chargebacks.
     */
    public function selectEligibility(?ShopifyShopifyProtectOrderSummaryEligibilityArgumentsObject $argsObject = null): ShopifyShopifyProtectOrderEligibilityQueryObject
    {
        $object = new ShopifyShopifyProtectOrderEligibilityQueryObject("eligibility");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The status of the order's protection against fraudulent chargebacks.
     */
    public function selectStatus(): static
    {
        $this->selectField("status");

        return $this;
    }
}
