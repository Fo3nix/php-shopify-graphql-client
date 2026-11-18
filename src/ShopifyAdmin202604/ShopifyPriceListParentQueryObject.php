<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

/**
 * Represents relative adjustments from one price list to other prices.
 *   You can use a `PriceListParent` to specify an adjusted relative price using a percentage-based
 *   adjustment. Adjusted prices work in conjunction with exchange rules and rounding.
 *
 *   [Adjustment types](https://shopify.dev/api/admin-graphql/latest/enums/pricelistadjustmenttype)
 *   support both percentage increases and decreases.
 */
class ShopifyPriceListParentQueryObject extends QueryObject
{
    const OBJECT_NAME = "PriceListParent";

    /**
     * A price list adjustment.
     */
    public function selectAdjustment(?ShopifyPriceListParentAdjustmentArgumentsObject $argsObject = null): ShopifyPriceListAdjustmentQueryObject
    {
        $object = new ShopifyPriceListAdjustmentQueryObject("adjustment");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * A price list's settings for adjustment.
     */
    public function selectSettings(?ShopifyPriceListParentSettingsArgumentsObject $argsObject = null): ShopifyPriceListAdjustmentSettingsQueryObject
    {
        $object = new ShopifyPriceListAdjustmentSettingsQueryObject("settings");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
