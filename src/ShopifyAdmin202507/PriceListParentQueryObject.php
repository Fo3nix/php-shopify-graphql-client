<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class PriceListParentQueryObject extends QueryObject
{
    const OBJECT_NAME = "PriceListParent";

    public function selectAdjustment(PriceListParentAdjustmentArgumentsObject $argsObject = null)
    {
        $object = new PriceListAdjustmentQueryObject("adjustment");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectSettings(PriceListParentSettingsArgumentsObject $argsObject = null)
    {
        $object = new PriceListAdjustmentSettingsQueryObject("settings");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
