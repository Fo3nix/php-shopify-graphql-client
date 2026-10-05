<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

class ShopifyFulfillmentServiceQueryObject extends QueryObject
{
    const OBJECT_NAME = "FulfillmentService";

    public function selectCallbackUrl()
    {
        $this->selectField("callbackUrl");

        return $this;
    }

    public function selectCreatedAt()
    {
        $this->selectField("createdAt");

        return $this;
    }

    /**
     * @deprecated Migration period ended. All correctly functioning fulfillment services have `fulfillmentOrdersOptIn` set to `true`.
     */
    public function selectFulfillmentOrdersOptIn()
    {
        $this->selectField("fulfillmentOrdersOptIn");

        return $this;
    }

    public function selectHandle()
    {
        $this->selectField("handle");

        return $this;
    }

    public function selectId()
    {
        $this->selectField("id");

        return $this;
    }

    public function selectInventoryManagement()
    {
        $this->selectField("inventoryManagement");

        return $this;
    }

    public function selectLocation(ShopifyFulfillmentServiceLocationArgumentsObject $argsObject = null)
    {
        $object = new ShopifyLocationQueryObject("location");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * @deprecated Fulfillment services are all migrating to permit SKU sharing.
    Setting permits SKU sharing to false [is no longer supported](https://shopify.dev/changelog/setting-permitsskusharing-argument-to-false-when-creating-a-fulfillment-service-returns-an-error).
    As of API version `2026-04` this field will be removed.

     */
    public function selectPermitsSkuSharing()
    {
        $this->selectField("permitsSkuSharing");

        return $this;
    }

    public function selectRequiresShippingMethod()
    {
        $this->selectField("requiresShippingMethod");

        return $this;
    }

    public function selectServiceName()
    {
        $this->selectField("serviceName");

        return $this;
    }

    public function selectTrackingSupport()
    {
        $this->selectField("trackingSupport");

        return $this;
    }

    public function selectType()
    {
        $this->selectField("type");

        return $this;
    }
}
