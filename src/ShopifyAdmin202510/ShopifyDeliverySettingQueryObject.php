<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202510;

use GraphQL\SchemaObject\QueryObject;

class ShopifyDeliverySettingQueryObject extends QueryObject
{
    const OBJECT_NAME = "DeliverySetting";

    public function selectLegacyModeBlocked(ShopifyDeliverySettingLegacyModeBlockedArgumentsObject $argsObject = null)
    {
        $object = new ShopifyDeliveryLegacyModeBlockedQueryObject("legacyModeBlocked");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectLegacyModeProfiles()
    {
        $this->selectField("legacyModeProfiles");

        return $this;
    }
}
