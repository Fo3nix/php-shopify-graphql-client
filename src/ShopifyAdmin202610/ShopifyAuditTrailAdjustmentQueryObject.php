<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * One of a sequence of adjustments applied to determine a price.
 */
class ShopifyAuditTrailAdjustmentQueryObject extends QueryObject
{
    const OBJECT_NAME = "AuditTrailAdjustment";

    /**
     * The human-readable description of the adjustment.
     * > **Note:** This field is **localized display text** and **not a stable contract**.
     * > Don't build business logic that parses or matches on this text because it can change at any time.
     * > No stable per-adjustment identifier is currently exposed.
     */
    public function selectLabel(): static
    {
        $this->selectField("label");

        return $this;
    }

    /**
     * The price after the adjustment was applied.
     */
    public function selectPrice(?ShopifyAuditTrailAdjustmentPriceArgumentsObject $argsObject = null): ShopifyMoneyV2QueryObject
    {
        $object = new ShopifyMoneyV2QueryObject("price");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The type of the adjustment.
     */
    public function selectType(): static
    {
        $this->selectField("type");

        return $this;
    }

    /**
     * The value of the adjustment.
     */
    public function selectValue(): static
    {
        $this->selectField("value");

        return $this;
    }
}
