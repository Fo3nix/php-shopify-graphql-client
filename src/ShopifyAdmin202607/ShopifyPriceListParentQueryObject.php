<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

class ShopifyPriceListParentQueryObject extends QueryObject
{
    const OBJECT_NAME = "PriceListParent";

    public function selectAdjustment(ShopifyPriceListParentAdjustmentArgumentsObject $argsObject = null)
    {
        $object = new ShopifyPriceListAdjustmentQueryObject("adjustment");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectSettings(ShopifyPriceListParentSettingsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyPriceListAdjustmentSettingsQueryObject("settings");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
