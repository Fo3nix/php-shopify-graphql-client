<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class FulfillmentServiceQueryObject extends QueryObject
{
    const OBJECT_NAME = "FulfillmentService";

    public function selectCallbackUrl()
    {
        $this->selectField("callbackUrl");

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

    public function selectLocation(FulfillmentServiceLocationArgumentsObject $argsObject = null)
    {
        $object = new LocationQueryObject("location");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

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
