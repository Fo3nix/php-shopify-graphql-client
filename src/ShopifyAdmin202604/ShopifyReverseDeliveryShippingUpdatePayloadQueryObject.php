<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `reverseDeliveryShippingUpdate` mutation.
 */
class ShopifyReverseDeliveryShippingUpdatePayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "ReverseDeliveryShippingUpdatePayload";

    /**
     * The updated reverse delivery.
     */
    public function selectReverseDelivery(?ShopifyReverseDeliveryShippingUpdatePayloadReverseDeliveryArgumentsObject $argsObject = null): ShopifyReverseDeliveryQueryObject
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
    public function selectUserErrors(?ShopifyReverseDeliveryShippingUpdatePayloadUserErrorsArgumentsObject $argsObject = null): ShopifyReturnUserErrorQueryObject
    {
        $object = new ShopifyReturnUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
