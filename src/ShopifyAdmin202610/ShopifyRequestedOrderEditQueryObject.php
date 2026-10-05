<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

class ShopifyRequestedOrderEditQueryObject extends QueryObject
{
    const OBJECT_NAME = "RequestedOrderEdit";

    public function selectCreatedAt()
    {
        $this->selectField("createdAt");

        return $this;
    }

    public function selectId()
    {
        $this->selectField("id");

        return $this;
    }

    public function selectLineItems(ShopifyRequestedOrderEditLineItemsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyRequestedOrderEditLineItemsQueryObject("lineItems");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectOrder(ShopifyRequestedOrderEditOrderArgumentsObject $argsObject = null)
    {
        $object = new ShopifyOrderQueryObject("order");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectRequestDeclinedAt()
    {
        $this->selectField("requestDeclinedAt");

        return $this;
    }

    public function selectRequestResolvedAt()
    {
        $this->selectField("requestResolvedAt");

        return $this;
    }

    public function selectRequestedAt()
    {
        $this->selectField("requestedAt");

        return $this;
    }

    public function selectStatus()
    {
        $this->selectField("status");

        return $this;
    }

    public function selectUpdatedAt()
    {
        $this->selectField("updatedAt");

        return $this;
    }
}
