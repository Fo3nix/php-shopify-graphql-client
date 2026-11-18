<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `discountCodeBulkActivate` mutation.
 */
class ShopifyDiscountCodeBulkActivatePayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "DiscountCodeBulkActivatePayload";

    /**
     * The asynchronous job that activates the discounts.
     */
    public function selectJob(?ShopifyDiscountCodeBulkActivatePayloadJobArgumentsObject $argsObject = null): ShopifyJobQueryObject
    {
        $object = new ShopifyJobQueryObject("job");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The list of errors that occurred from executing the mutation.
     */
    public function selectUserErrors(?ShopifyDiscountCodeBulkActivatePayloadUserErrorsArgumentsObject $argsObject = null): ShopifyDiscountUserErrorQueryObject
    {
        $object = new ShopifyDiscountUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
