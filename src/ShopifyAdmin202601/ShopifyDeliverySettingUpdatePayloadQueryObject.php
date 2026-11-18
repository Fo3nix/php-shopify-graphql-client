<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `deliverySettingUpdate` mutation.
 */
class ShopifyDeliverySettingUpdatePayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "DeliverySettingUpdatePayload";

    /**
     * The updated delivery shop level settings.
     */
    public function selectSetting(?ShopifyDeliverySettingUpdatePayloadSettingArgumentsObject $argsObject = null): ShopifyDeliverySettingQueryObject
    {
        $object = new ShopifyDeliverySettingQueryObject("setting");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The list of errors that occurred from executing the mutation.
     */
    public function selectUserErrors(?ShopifyDeliverySettingUpdatePayloadUserErrorsArgumentsObject $argsObject = null): ShopifyUserErrorQueryObject
    {
        $object = new ShopifyUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
