<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * A job to determine the result of an order cancellation request.
 */
class ShopifyOrderCancelJobResultQueryObject extends QueryObject
{
    const OBJECT_NAME = "OrderCancelJobResult";

    /**
     * This indicates if the job is still queued or has been run.
     */
    public function selectDone(): static
    {
        $this->selectField("done");

        return $this;
    }

    /**
     * Returns any error that occurred during order cancellation.
     */
    public function selectErrors(?ShopifyOrderCancelJobResultErrorsArgumentsObject $argsObject = null): ShopifyOrderCancelUserErrorQueryObject
    {
        $object = new ShopifyOrderCancelUserErrorQueryObject("errors");
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
     * The order associated with the cancellation request.
     */
    public function selectOrder(?ShopifyOrderCancelJobResultOrderArgumentsObject $argsObject = null): ShopifyOrderQueryObject
    {
        $object = new ShopifyOrderQueryObject("order");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The current status of the order cancellation request.
     */
    public function selectStatus(): static
    {
        $this->selectField("status");

        return $this;
    }
}
