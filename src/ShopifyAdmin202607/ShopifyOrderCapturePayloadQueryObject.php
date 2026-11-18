<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `orderCapture` mutation.
 */
class ShopifyOrderCapturePayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "OrderCapturePayload";

    /**
     * The created capture transaction.
     */
    public function selectTransaction(?ShopifyOrderCapturePayloadTransactionArgumentsObject $argsObject = null): ShopifyOrderTransactionQueryObject
    {
        $object = new ShopifyOrderTransactionQueryObject("transaction");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The list of errors that occurred from executing the mutation.
     */
    public function selectUserErrors(?ShopifyOrderCapturePayloadUserErrorsArgumentsObject $argsObject = null): ShopifyUserErrorQueryObject
    {
        $object = new ShopifyUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
