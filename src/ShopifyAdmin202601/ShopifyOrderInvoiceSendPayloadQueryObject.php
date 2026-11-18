<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `orderInvoiceSend` mutation.
 */
class ShopifyOrderInvoiceSendPayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "OrderInvoiceSendPayload";

    /**
     * The order associated with the invoice email.
     */
    public function selectOrder(?ShopifyOrderInvoiceSendPayloadOrderArgumentsObject $argsObject = null): ShopifyOrderQueryObject
    {
        $object = new ShopifyOrderQueryObject("order");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The list of errors that occurred from executing the mutation.
     */
    public function selectUserErrors(?ShopifyOrderInvoiceSendPayloadUserErrorsArgumentsObject $argsObject = null): ShopifyOrderInvoiceSendUserErrorQueryObject
    {
        $object = new ShopifyOrderInvoiceSendUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
