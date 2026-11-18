<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `deliveryCustomizationUpdate` mutation.
 */
class ShopifyDeliveryCustomizationUpdatePayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "DeliveryCustomizationUpdatePayload";

    /**
     * Returns the updated delivery customization.
     */
    public function selectDeliveryCustomization(?ShopifyDeliveryCustomizationUpdatePayloadDeliveryCustomizationArgumentsObject $argsObject = null): ShopifyDeliveryCustomizationQueryObject
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
    public function selectUserErrors(?ShopifyDeliveryCustomizationUpdatePayloadUserErrorsArgumentsObject $argsObject = null): ShopifyDeliveryCustomizationErrorQueryObject
    {
        $object = new ShopifyDeliveryCustomizationErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
