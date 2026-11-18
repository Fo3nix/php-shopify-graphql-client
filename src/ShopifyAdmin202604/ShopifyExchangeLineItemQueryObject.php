<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

/**
 * An item for exchange.
 */
class ShopifyExchangeLineItemQueryObject extends QueryObject
{
    const OBJECT_NAME = "ExchangeLineItem";

    /**
     * A globally-unique ID.
     */
    public function selectId(): static
    {
        $this->selectField("id");

        return $this;
    }

    /**
     * The order line item for the exchange. If the exchange line has been processed multiple times, this will be the first associated line item and won't reflect all processed values.
     *
     * @deprecated Use `lineItems` instead.
     */
    public function selectLineItem(?ShopifyExchangeLineItemLineItemArgumentsObject $argsObject = null): ShopifyLineItemQueryObject
    {
        $object = new ShopifyLineItemQueryObject("lineItem");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The order line items for the exchange.
     */
    public function selectLineItems(?ShopifyExchangeLineItemLineItemsArgumentsObject $argsObject = null): ShopifyLineItemQueryObject
    {
        $object = new ShopifyLineItemQueryObject("lineItems");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The quantity of the exchange item that can be processed.
     */
    public function selectProcessableQuantity(): static
    {
        $this->selectField("processableQuantity");

        return $this;
    }

    /**
     * The quantity of the exchange item that have been processed.
     */
    public function selectProcessedQuantity(): static
    {
        $this->selectField("processedQuantity");

        return $this;
    }

    /**
     * The number of units ordered, including refunded and removed units.
     */
    public function selectQuantity(): static
    {
        $this->selectField("quantity");

        return $this;
    }

    /**
     * The quantity of the exchange item that haven't been processed.
     */
    public function selectUnprocessedQuantity(): static
    {
        $this->selectField("unprocessedQuantity");

        return $this;
    }

    /**
     * The ID of the variant at time of return creation.
     */
    public function selectVariantId(): static
    {
        $this->selectField("variantId");

        return $this;
    }
}
