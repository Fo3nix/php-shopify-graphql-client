<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\InterfaceObject;

/**
 * Interoperability metadata for types that directly correspond to a REST Admin API resource.
 * For example, on the Product type, LegacyInteroperability returns metadata for the corresponding [Product object](https://shopify.dev/api/admin-graphql/latest/objects/product) in the REST Admin API.
 */
class ShopifyLegacyInteroperabilityInterfaceObject extends InterfaceObject
{
    const OBJECT_NAME = "LegacyInteroperability";

    /**
     * The ID of the corresponding resource in the REST Admin API.
     */
    public function selectLegacyResourceId(): static
    {
        $this->selectField("legacyResourceId");

        return $this;
    }

    public function onCustomer(): ShopifyCustomerQueryObject
    {
        $object = new ShopifyCustomerQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onDraftOrder(): ShopifyDraftOrderQueryObject
    {
        $object = new ShopifyDraftOrderQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onFulfillment(): ShopifyFulfillmentQueryObject
    {
        $object = new ShopifyFulfillmentQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onInventoryItem(): ShopifyInventoryItemQueryObject
    {
        $object = new ShopifyInventoryItemQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onLocation(): ShopifyLocationQueryObject
    {
        $object = new ShopifyLocationQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onMarketingEvent(): ShopifyMarketingEventQueryObject
    {
        $object = new ShopifyMarketingEventQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onMetafield(): ShopifyMetafieldQueryObject
    {
        $object = new ShopifyMetafieldQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onOrder(): ShopifyOrderQueryObject
    {
        $object = new ShopifyOrderQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onPriceRule(): ShopifyPriceRuleQueryObject
    {
        $object = new ShopifyPriceRuleQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onProduct(): ShopifyProductQueryObject
    {
        $object = new ShopifyProductQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onProductVariant(): ShopifyProductVariantQueryObject
    {
        $object = new ShopifyProductVariantQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onRefund(): ShopifyRefundQueryObject
    {
        $object = new ShopifyRefundQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onSavedSearch(): ShopifySavedSearchQueryObject
    {
        $object = new ShopifySavedSearchQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onScriptTag(): ShopifyScriptTagQueryObject
    {
        $object = new ShopifyScriptTagQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onShopifyPaymentsDispute(): ShopifyShopifyPaymentsDisputeQueryObject
    {
        $object = new ShopifyShopifyPaymentsDisputeQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onShopifyPaymentsPayout(): ShopifyShopifyPaymentsPayoutQueryObject
    {
        $object = new ShopifyShopifyPaymentsPayoutQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onWebhookSubscription(): ShopifyWebhookSubscriptionQueryObject
    {
        $object = new ShopifyWebhookSubscriptionQueryObject();
        $this->addPossibleType($object);

        return $object;
    }
}
