<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `discountAutomaticFreeShippingUpdate` mutation.
 */
class ShopifyDiscountAutomaticFreeShippingUpdatePayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "DiscountAutomaticFreeShippingUpdatePayload";

    /**
     * The automatic discount that was updated.
     */
    public function selectAutomaticDiscountNode(?ShopifyDiscountAutomaticFreeShippingUpdatePayloadAutomaticDiscountNodeArgumentsObject $argsObject = null): ShopifyDiscountAutomaticNodeQueryObject
    {
        $object = new ShopifyDiscountAutomaticNodeQueryObject("automaticDiscountNode");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The list of errors that occurred from executing the mutation.
     */
    public function selectUserErrors(?ShopifyDiscountAutomaticFreeShippingUpdatePayloadUserErrorsArgumentsObject $argsObject = null): ShopifyDiscountUserErrorQueryObject
    {
        $object = new ShopifyDiscountUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
