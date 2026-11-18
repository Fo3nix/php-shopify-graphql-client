<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

/**
 * A request made by the merchant or an order management app to a fulfillment service
 * for a fulfillment order.
 */
class ShopifyFulfillmentOrderMerchantRequestQueryObject extends QueryObject
{
    const OBJECT_NAME = "FulfillmentOrderMerchantRequest";

    /**
     * The fulfillment order associated with the merchant request.
     */
    public function selectFulfillmentOrder(?ShopifyFulfillmentOrderMerchantRequestFulfillmentOrderArgumentsObject $argsObject = null): ShopifyFulfillmentOrderQueryObject
    {
        $object = new ShopifyFulfillmentOrderQueryObject("fulfillmentOrder");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * A globally-unique ID.
     */
    public function selectId(): static
    {
        $this->selectField("id");

        return $this;
    }

    /**
     * The kind of request made.
     */
    public function selectKind(): static
    {
        $this->selectField("kind");

        return $this;
    }

    /**
     * The optional message that the merchant included in the request.
     */
    public function selectMessage(): static
    {
        $this->selectField("message");

        return $this;
    }

    /**
     * Additional options requested by the merchant. These depend on the `kind` of the request.
     * For example, for a `FULFILLMENT_REQUEST`, one option is `notify_customer`, which indicates whether the
     * merchant intends to notify the customer upon fulfillment. The fulfillment service can then set
     * `notifyCustomer` when making calls to `FulfillmentCreate`.
     */
    public function selectRequestOptions(): static
    {
        $this->selectField("requestOptions");

        return $this;
    }

    /**
     * The response from the fulfillment service.
     */
    public function selectResponseData(): static
    {
        $this->selectField("responseData");

        return $this;
    }

    /**
     * The timestamp when the request was made.
     */
    public function selectSentAt(): static
    {
        $this->selectField("sentAt");

        return $this;
    }
}
