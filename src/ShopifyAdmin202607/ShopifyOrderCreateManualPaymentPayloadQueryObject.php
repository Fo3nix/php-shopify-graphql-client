<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `orderCreateManualPayment` mutation.
 */
class ShopifyOrderCreateManualPaymentPayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "OrderCreateManualPaymentPayload";

    /**
     * The order recorded a manual payment.
     */
    public function selectOrder(?ShopifyOrderCreateManualPaymentPayloadOrderArgumentsObject $argsObject = null): ShopifyOrderQueryObject
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
    public function selectUserErrors(?ShopifyOrderCreateManualPaymentPayloadUserErrorsArgumentsObject $argsObject = null): ShopifyOrderCreateManualPaymentOrderCreateManualPaymentErrorQueryObject
    {
        $object = new ShopifyOrderCreateManualPaymentOrderCreateManualPaymentErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
