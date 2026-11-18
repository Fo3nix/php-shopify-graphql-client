<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `discountCodeBxgyUpdate` mutation.
 */
class ShopifyDiscountCodeBxgyUpdatePayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "DiscountCodeBxgyUpdatePayload";

    /**
     * The code discount that was updated.
     */
    public function selectCodeDiscountNode(?ShopifyDiscountCodeBxgyUpdatePayloadCodeDiscountNodeArgumentsObject $argsObject = null): ShopifyDiscountCodeNodeQueryObject
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
    public function selectUserErrors(?ShopifyDiscountCodeBxgyUpdatePayloadUserErrorsArgumentsObject $argsObject = null): ShopifyDiscountUserErrorQueryObject
    {
        $object = new ShopifyDiscountUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
