<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `returnRefund` mutation.
 */
class ShopifyReturnRefundPayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "ReturnRefundPayload";

    /**
     * The created refund.
     */
    public function selectRefund(?ShopifyReturnRefundPayloadRefundArgumentsObject $argsObject = null): ShopifyRefundQueryObject
    {
        $object = new ShopifyRefundQueryObject("refund");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The list of errors that occurred from executing the mutation.
     */
    public function selectUserErrors(?ShopifyReturnRefundPayloadUserErrorsArgumentsObject $argsObject = null): ShopifyReturnUserErrorQueryObject
    {
        $object = new ShopifyReturnUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
