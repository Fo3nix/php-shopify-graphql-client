<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class ExchangeLineItemQueryObject extends QueryObject
{
    const OBJECT_NAME = "ExchangeLineItem";

    public function selectId()
    {
        $this->selectField("id");

        return $this;
    }

    /**
     * @deprecated Use `lineItems` instead.
     */
    public function selectLineItem(ExchangeLineItemLineItemArgumentsObject $argsObject = null)
    {
        $object = new LineItemQueryObject("lineItem");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectLineItems(ExchangeLineItemLineItemsArgumentsObject $argsObject = null)
    {
        $object = new LineItemQueryObject("lineItems");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectProcessableQuantity()
    {
        $this->selectField("processableQuantity");

        return $this;
    }

    public function selectProcessedQuantity()
    {
        $this->selectField("processedQuantity");

        return $this;
    }

    public function selectQuantity()
    {
        $this->selectField("quantity");

        return $this;
    }

    public function selectUnprocessedQuantity()
    {
        $this->selectField("unprocessedQuantity");

        return $this;
    }

    public function selectVariantId()
    {
        $this->selectField("variantId");

        return $this;
    }
}
