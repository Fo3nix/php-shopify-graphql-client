<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * Information about the delivery method selected for a [`FulfillmentOrder`](https://shopify.dev/docs/api/admin-graphql/latest/objects/FulfillmentOrder). Includes the method type, expected delivery timeframe, and any additional information needed for delivery.
 *
 * The delivery method stores details from checkout such as the carrier, branded promises like Shop Promise, and the delivery option name shown to the buyer. Additional information like delivery instructions or contact phone numbers helps fulfill the [`Order`](https://shopify.dev/docs/api/admin-graphql/latest/objects/Order) correctly.
 */
class ShopifyDeliveryMethodQueryObject extends QueryObject
{
    const OBJECT_NAME = "DeliveryMethod";

    /**
     * The Additional information to consider when performing the delivery.
     */
    public function selectAdditionalInformation(?ShopifyDeliveryMethodAdditionalInformationArgumentsObject $argsObject = null): ShopifyDeliveryMethodAdditionalInformationQueryObject
    {
        $object = new ShopifyDeliveryMethodAdditionalInformationQueryObject("additionalInformation");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The branded promise that was presented to the buyer during checkout.  For example: Shop Promise.
     */
    public function selectBrandedPromise(?ShopifyDeliveryMethodBrandedPromiseArgumentsObject $argsObject = null): ShopifyDeliveryBrandedPromiseQueryObject
    {
        $object = new ShopifyDeliveryBrandedPromiseQueryObject("brandedPromise");
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
     * The latest delivery date and time when the fulfillment is expected to arrive at the buyer's location.
     */
    public function selectMaxDeliveryDateTime(): static
    {
        $this->selectField("maxDeliveryDateTime");

        return $this;
    }

    /**
     * The type of the delivery method.
     */
    public function selectMethodType(): static
    {
        $this->selectField("methodType");

        return $this;
    }

    /**
     * The earliest delivery date and time when the fulfillment is expected to arrive at the buyer's location.
     */
    public function selectMinDeliveryDateTime(): static
    {
        $this->selectField("minDeliveryDateTime");

        return $this;
    }

    /**
     * The name of the delivery option that was presented to the buyer during checkout.
     */
    public function selectPresentedName(): static
    {
        $this->selectField("presentedName");

        return $this;
    }

    /**
     * A reference to the shipping method.
     */
    public function selectServiceCode(): static
    {
        $this->selectField("serviceCode");

        return $this;
    }

    /**
     * Source reference is promise provider specific data associated with delivery promise.
     */
    public function selectSourceReference(): static
    {
        $this->selectField("sourceReference");

        return $this;
    }
}
