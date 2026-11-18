<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `discountRedeemCodeBulkAdd` mutation.
 */
class ShopifyDiscountRedeemCodeBulkAddPayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "DiscountRedeemCodeBulkAddPayload";

    /**
     * The ID of bulk operation that creates multiple unique discount codes.
     * You can use the
     * [`discountRedeemCodeBulkCreation` query](https://shopify.dev/api/admin-graphql/latest/queries/discountRedeemCodeBulkCreation)
     * to track the status of the bulk operation.
     */
    public function selectBulkCreation(?ShopifyDiscountRedeemCodeBulkAddPayloadBulkCreationArgumentsObject $argsObject = null): ShopifyDiscountRedeemCodeBulkCreationQueryObject
    {
        $object = new ShopifyDiscountRedeemCodeBulkCreationQueryObject("bulkCreation");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The list of errors that occurred from executing the mutation.
     */
    public function selectUserErrors(?ShopifyDiscountRedeemCodeBulkAddPayloadUserErrorsArgumentsObject $argsObject = null): ShopifyDiscountUserErrorQueryObject
    {
        $object = new ShopifyDiscountUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
