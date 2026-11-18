<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `refundCreate` mutation.
 */
class ShopifyRefundCreatePayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "RefundCreatePayload";

    /**
     * The order associated with the created refund.
     */
    public function selectOrder(?ShopifyRefundCreatePayloadOrderArgumentsObject $argsObject = null): ShopifyOrderQueryObject
    {
        $object = new ShopifyOrderQueryObject("order");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The created refund.
     */
    public function selectRefund(?ShopifyRefundCreatePayloadRefundArgumentsObject $argsObject = null): ShopifyRefundQueryObject
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
    public function selectUserErrors(?ShopifyRefundCreatePayloadUserErrorsArgumentsObject $argsObject = null): ShopifyUserErrorQueryObject
    {
        $object = new ShopifyUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
