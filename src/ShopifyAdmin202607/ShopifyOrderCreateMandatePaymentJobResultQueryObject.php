<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * A job result for tracking the status of a mandate payment request on an order.
 */
class ShopifyOrderCreateMandatePaymentJobResultQueryObject extends QueryObject
{
    const OBJECT_NAME = "OrderCreateMandatePaymentJobResult";

    /**
     * This indicates if the job is still queued or has been run.
     */
    public function selectDone(): static
    {
        $this->selectField("done");

        return $this;
    }

    /**
     * Returns any errors that occurred during the mandate payment.
     */
    public function selectErrors(?ShopifyOrderCreateMandatePaymentJobResultErrorsArgumentsObject $argsObject = null): ShopifyUserErrorQueryObject
    {
        $object = new ShopifyUserErrorQueryObject("errors");
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
     * The order associated with the mandate payment request.
     */
    public function selectOrder(?ShopifyOrderCreateMandatePaymentJobResultOrderArgumentsObject $argsObject = null): ShopifyOrderQueryObject
    {
        $object = new ShopifyOrderQueryObject("order");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The current status of the mandate payment request.
     */
    public function selectStatus(): static
    {
        $this->selectField("status");

        return $this;
    }
}
