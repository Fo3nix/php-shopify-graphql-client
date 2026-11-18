<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `discountCodeAppUpdate` mutation.
 */
class ShopifyDiscountCodeAppUpdatePayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "DiscountCodeAppUpdatePayload";

    /**
     * The updated discount that the app provides.
     */
    public function selectCodeAppDiscount(?ShopifyDiscountCodeAppUpdatePayloadCodeAppDiscountArgumentsObject $argsObject = null): ShopifyDiscountCodeAppQueryObject
    {
        $object = new ShopifyDiscountCodeAppQueryObject("codeAppDiscount");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The list of errors that occurred from executing the mutation.
     */
    public function selectUserErrors(?ShopifyDiscountCodeAppUpdatePayloadUserErrorsArgumentsObject $argsObject = null): ShopifyDiscountUserErrorQueryObject
    {
        $object = new ShopifyDiscountUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
