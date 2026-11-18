<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `discountCodeBulkDeactivate` mutation.
 */
class ShopifyDiscountCodeBulkDeactivatePayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "DiscountCodeBulkDeactivatePayload";

    /**
     * The asynchronous job that deactivates the discounts.
     */
    public function selectJob(?ShopifyDiscountCodeBulkDeactivatePayloadJobArgumentsObject $argsObject = null): ShopifyJobQueryObject
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
    public function selectUserErrors(?ShopifyDiscountCodeBulkDeactivatePayloadUserErrorsArgumentsObject $argsObject = null): ShopifyDiscountUserErrorQueryObject
    {
        $object = new ShopifyDiscountUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
