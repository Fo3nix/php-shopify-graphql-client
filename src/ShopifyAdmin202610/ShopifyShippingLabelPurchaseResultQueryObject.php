<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * Tracks the progress of an asynchronous shipping label purchase request.
 */
class ShopifyShippingLabelPurchaseResultQueryObject extends QueryObject
{
    const OBJECT_NAME = "ShippingLabelPurchaseResult";

    /**
     * This indicates if the job is still queued or has been run.
     */
    public function selectDone(): static
    {
        $this->selectField("done");

        return $this;
    }

    /**
     * Purchase-processing errors for the request. Synchronous validation errors are returned from the `shippingLabelPurchase` mutation's `userErrors` field instead.
     */
    public function selectErrors(?ShopifyShippingLabelPurchaseResultErrorsArgumentsObject $argsObject = null): ShopifyShippingLabelPurchaseErrorQueryObject
    {
        $object = new ShopifyShippingLabelPurchaseErrorQueryObject("errors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * A globally-unique ID that's returned when running an asynchronous mutation.
     */
    public function selectId(): static
    {
        $this->selectField("id");

        return $this;
    }

    /**
     * The shipping labels created by the purchase request. Labels are returned only after successful purchase.
     */
    public function selectShippingLabels(?ShopifyShippingLabelPurchaseResultShippingLabelsArgumentsObject $argsObject = null): ShopifyShippingLabelQueryObject
    {
        $object = new ShopifyShippingLabelQueryObject("shippingLabels");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The current purchase status. A purchase starts as `PENDING_PURCHASE` and ends as either `PURCHASED` or `PURCHASE_FAILED`.
     */
    public function selectStatus(): static
    {
        $this->selectField("status");

        return $this;
    }
}
