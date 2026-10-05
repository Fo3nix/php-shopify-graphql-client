<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

class ShopifyExchangeLineItemQueryObject extends QueryObject
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
    public function selectLineItem(ShopifyExchangeLineItemLineItemArgumentsObject $argsObject = null)
    {
        $object = new ShopifyLineItemQueryObject("lineItem");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectLineItems(ShopifyExchangeLineItemLineItemsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyLineItemQueryObject("lineItems");
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

    public function selectProductId()
    {
        $this->selectField("productId");

        return $this;
    }

    public function selectQuantity()
    {
        $this->selectField("quantity");

        return $this;
    }

    public function selectTitle()
    {
        $this->selectField("title");

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

    public function selectVariantSku()
    {
        $this->selectField("variantSku");

        return $this;
    }

    public function selectVariantTitle()
    {
        $this->selectField("variantTitle");

        return $this;
    }
}
