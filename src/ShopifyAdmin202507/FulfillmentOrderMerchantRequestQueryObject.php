<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class FulfillmentOrderMerchantRequestQueryObject extends QueryObject
{
    const OBJECT_NAME = "FulfillmentOrderMerchantRequest";

    public function selectFulfillmentOrder(FulfillmentOrderMerchantRequestFulfillmentOrderArgumentsObject $argsObject = null)
    {
        $object = new FulfillmentOrderQueryObject("fulfillmentOrder");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectId()
    {
        $this->selectField("id");

        return $this;
    }

    public function selectKind()
    {
        $this->selectField("kind");

        return $this;
    }

    public function selectMessage()
    {
        $this->selectField("message");

        return $this;
    }

    public function selectRequestOptions()
    {
        $this->selectField("requestOptions");

        return $this;
    }

    public function selectResponseData()
    {
        $this->selectField("responseData");

        return $this;
    }

    public function selectSentAt()
    {
        $this->selectField("sentAt");

        return $this;
    }
}
