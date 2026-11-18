<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `discountCodeAppCreate` mutation.
 */
class ShopifyDiscountCodeAppCreatePayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "DiscountCodeAppCreatePayload";

    /**
     * The discount that the app provides.
     */
    public function selectCodeAppDiscount(?ShopifyDiscountCodeAppCreatePayloadCodeAppDiscountArgumentsObject $argsObject = null): ShopifyDiscountCodeAppQueryObject
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
    public function selectUserErrors(?ShopifyDiscountCodeAppCreatePayloadUserErrorsArgumentsObject $argsObject = null): ShopifyDiscountUserErrorQueryObject
    {
        $object = new ShopifyDiscountUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
