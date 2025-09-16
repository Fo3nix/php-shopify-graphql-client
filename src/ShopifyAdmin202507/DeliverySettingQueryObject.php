<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class DeliverySettingQueryObject extends QueryObject
{
    const OBJECT_NAME = "DeliverySetting";

    /**
     * @deprecated Legacy mode profiles are no longer supported.
     */
    public function selectLegacyModeBlocked(DeliverySettingLegacyModeBlockedArgumentsObject $argsObject = null)
    {
        $object = new DeliveryLegacyModeBlockedQueryObject("legacyModeBlocked");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * @deprecated Legacy mode profiles are no longer supported.
     */
    public function selectLegacyModeProfiles()
    {
        $this->selectField("legacyModeProfiles");

        return $this;
    }
}
