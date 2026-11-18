<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `discountAutomaticBxgyUpdate` mutation.
 */
class ShopifyDiscountAutomaticBxgyUpdatePayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "DiscountAutomaticBxgyUpdatePayload";

    /**
     * The automatic discount that was updated.
     */
    public function selectAutomaticDiscountNode(?ShopifyDiscountAutomaticBxgyUpdatePayloadAutomaticDiscountNodeArgumentsObject $argsObject = null): ShopifyDiscountAutomaticNodeQueryObject
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
    public function selectUserErrors(?ShopifyDiscountAutomaticBxgyUpdatePayloadUserErrorsArgumentsObject $argsObject = null): ShopifyDiscountUserErrorQueryObject
    {
        $object = new ShopifyDiscountUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
