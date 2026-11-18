<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `discountCodeFreeShippingCreate` mutation.
 */
class ShopifyDiscountCodeFreeShippingCreatePayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "DiscountCodeFreeShippingCreatePayload";

    /**
     * The discount code that was created.
     */
    public function selectCodeDiscountNode(?ShopifyDiscountCodeFreeShippingCreatePayloadCodeDiscountNodeArgumentsObject $argsObject = null): ShopifyDiscountCodeNodeQueryObject
    {
        $object = new ShopifyDiscountCodeNodeQueryObject("codeDiscountNode");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The list of errors that occurred from executing the mutation.
     */
    public function selectUserErrors(?ShopifyDiscountCodeFreeShippingCreatePayloadUserErrorsArgumentsObject $argsObject = null): ShopifyDiscountUserErrorQueryObject
    {
        $object = new ShopifyDiscountUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
