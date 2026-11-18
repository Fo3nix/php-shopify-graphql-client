<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `discountCodeBasicCreate` mutation.
 */
class ShopifyDiscountCodeBasicCreatePayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "DiscountCodeBasicCreatePayload";

    /**
     * The discount code that was created.
     */
    public function selectCodeDiscountNode(?ShopifyDiscountCodeBasicCreatePayloadCodeDiscountNodeArgumentsObject $argsObject = null): ShopifyDiscountCodeNodeQueryObject
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
    public function selectUserErrors(?ShopifyDiscountCodeBasicCreatePayloadUserErrorsArgumentsObject $argsObject = null): ShopifyDiscountUserErrorQueryObject
    {
        $object = new ShopifyDiscountUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
