<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `deliveryProfileCreate` mutation.
 */
class ShopifyDeliveryProfileCreatePayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "DeliveryProfileCreatePayload";

    /**
     * The delivery profile that was created.
     */
    public function selectProfile(?ShopifyDeliveryProfileCreatePayloadProfileArgumentsObject $argsObject = null): ShopifyDeliveryProfileQueryObject
    {
        $object = new ShopifyDeliveryProfileQueryObject("profile");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The list of errors that occurred from executing the mutation.
     */
    public function selectUserErrors(?ShopifyDeliveryProfileCreatePayloadUserErrorsArgumentsObject $argsObject = null): ShopifyUserErrorQueryObject
    {
        $object = new ShopifyUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
