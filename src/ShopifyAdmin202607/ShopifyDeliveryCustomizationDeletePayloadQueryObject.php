<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `deliveryCustomizationDelete` mutation.
 */
class ShopifyDeliveryCustomizationDeletePayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "DeliveryCustomizationDeletePayload";

    /**
     * Returns the deleted delivery customization ID.
     */
    public function selectDeletedId(): static
    {
        $this->selectField("deletedId");

        return $this;
    }

    /**
     * The list of errors that occurred from executing the mutation.
     */
    public function selectUserErrors(?ShopifyDeliveryCustomizationDeletePayloadUserErrorsArgumentsObject $argsObject = null): ShopifyDeliveryCustomizationErrorQueryObject
    {
        $object = new ShopifyDeliveryCustomizationErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
