<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `discountCodeRedeemCodeBulkDelete` mutation.
 */
class ShopifyDiscountCodeRedeemCodeBulkDeletePayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "DiscountCodeRedeemCodeBulkDeletePayload";

    /**
     * The asynchronous job that deletes the discount codes.
     */
    public function selectJob(?ShopifyDiscountCodeRedeemCodeBulkDeletePayloadJobArgumentsObject $argsObject = null): ShopifyJobQueryObject
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
    public function selectUserErrors(?ShopifyDiscountCodeRedeemCodeBulkDeletePayloadUserErrorsArgumentsObject $argsObject = null): ShopifyDiscountUserErrorQueryObject
    {
        $object = new ShopifyDiscountUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
