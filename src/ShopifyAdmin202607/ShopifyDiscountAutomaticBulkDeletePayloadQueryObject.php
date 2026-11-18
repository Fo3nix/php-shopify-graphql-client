<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `discountAutomaticBulkDelete` mutation.
 */
class ShopifyDiscountAutomaticBulkDeletePayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "DiscountAutomaticBulkDeletePayload";

    /**
     * The asynchronous job removing the automatic discounts.
     */
    public function selectJob(?ShopifyDiscountAutomaticBulkDeletePayloadJobArgumentsObject $argsObject = null): ShopifyJobQueryObject
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
    public function selectUserErrors(?ShopifyDiscountAutomaticBulkDeletePayloadUserErrorsArgumentsObject $argsObject = null): ShopifyDiscountUserErrorQueryObject
    {
        $object = new ShopifyDiscountUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
