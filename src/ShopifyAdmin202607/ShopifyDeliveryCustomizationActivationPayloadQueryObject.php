<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `deliveryCustomizationActivation` mutation.
 */
class ShopifyDeliveryCustomizationActivationPayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "DeliveryCustomizationActivationPayload";

    /**
     * The IDs of the updated delivery customizations.
     */
    public function selectIds(): static
    {
        $this->selectField("ids");

        return $this;
    }

    /**
     * The list of errors that occurred from executing the mutation.
     */
    public function selectUserErrors(?ShopifyDeliveryCustomizationActivationPayloadUserErrorsArgumentsObject $argsObject = null): ShopifyDeliveryCustomizationErrorQueryObject
    {
        $object = new ShopifyDeliveryCustomizationErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
