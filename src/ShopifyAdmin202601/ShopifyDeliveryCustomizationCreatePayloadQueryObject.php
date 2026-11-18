<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `deliveryCustomizationCreate` mutation.
 */
class ShopifyDeliveryCustomizationCreatePayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "DeliveryCustomizationCreatePayload";

    /**
     * Returns the created delivery customization.
     */
    public function selectDeliveryCustomization(?ShopifyDeliveryCustomizationCreatePayloadDeliveryCustomizationArgumentsObject $argsObject = null): ShopifyDeliveryCustomizationQueryObject
    {
        $object = new ShopifyDeliveryCustomizationQueryObject("deliveryCustomization");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The list of errors that occurred from executing the mutation.
     */
    public function selectUserErrors(?ShopifyDeliveryCustomizationCreatePayloadUserErrorsArgumentsObject $argsObject = null): ShopifyDeliveryCustomizationErrorQueryObject
    {
        $object = new ShopifyDeliveryCustomizationErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
