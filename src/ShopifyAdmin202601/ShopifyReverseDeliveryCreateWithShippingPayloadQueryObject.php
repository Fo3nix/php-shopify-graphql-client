<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `reverseDeliveryCreateWithShipping` mutation.
 */
class ShopifyReverseDeliveryCreateWithShippingPayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "ReverseDeliveryCreateWithShippingPayload";

    /**
     * The created reverse delivery.
     */
    public function selectReverseDelivery(?ShopifyReverseDeliveryCreateWithShippingPayloadReverseDeliveryArgumentsObject $argsObject = null): ShopifyReverseDeliveryQueryObject
    {
        $object = new ShopifyReverseDeliveryQueryObject("reverseDelivery");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The list of errors that occurred from executing the mutation.
     */
    public function selectUserErrors(?ShopifyReverseDeliveryCreateWithShippingPayloadUserErrorsArgumentsObject $argsObject = null): ShopifyReturnUserErrorQueryObject
    {
        $object = new ShopifyReturnUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
