<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `shippingLabelPurchase` mutation.
 */
class ShopifyShippingLabelPurchasePayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "ShippingLabelPurchasePayload";

    /**
     * The asynchronous purchase result. Query this object to track purchase status, retrieve purchased shipping labels, or inspect purchase-processing errors.
     */
    public function selectShippingLabelPurchaseResult(?ShopifyShippingLabelPurchasePayloadShippingLabelPurchaseResultArgumentsObject $argsObject = null): ShopifyShippingLabelPurchaseResultQueryObject
    {
        $object = new ShopifyShippingLabelPurchaseResultQueryObject("shippingLabelPurchaseResult");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The list of errors that occurred from executing the mutation.
     */
    public function selectUserErrors(?ShopifyShippingLabelPurchasePayloadUserErrorsArgumentsObject $argsObject = null): ShopifyShippingLabelPurchaseUserErrorQueryObject
    {
        $object = new ShopifyShippingLabelPurchaseUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
