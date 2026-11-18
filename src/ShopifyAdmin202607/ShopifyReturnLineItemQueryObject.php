<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * An item that a customer returns from a fulfilled order. Links to the original [`FulfillmentLineItem`](https://shopify.dev/docs/api/admin-graphql/latest/objects/FulfillmentLineItem) and tracks quantities through the return process.
 *
 * The line item includes the customer's reason for returning the item and any additional notes. It also tracks processing status with separate quantities for items that are processable, processed, refundable, and refunded. You can apply optional restocking fees to cover handling costs.
 *
 * Learn more about [creating a return](https://shopify.dev/docs/api/admin-graphql/latest/mutations/returnCreate).
 */
class ShopifyReturnLineItemQueryObject extends QueryObject
{
    const OBJECT_NAME = "ReturnLineItem";

    /**
     * A note from the customer that describes the item to be returned. Maximum length: 300 characters.
     */
    public function selectCustomerNote(): static
    {
        $this->selectField("customerNote");

        return $this;
    }

    /**
     * The fulfillment line item from which items are returned.
     */
    public function selectFulfillmentLineItem(?ShopifyReturnLineItemFulfillmentLineItemArgumentsObject $argsObject = null): ShopifyFulfillmentLineItemQueryObject
    {
        $object = new ShopifyFulfillmentLineItemQueryObject("fulfillmentLineItem");
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
     * The quantity that can be processed.
     */
    public function selectProcessableQuantity(): static
    {
        $this->selectField("processableQuantity");

        return $this;
    }

    /**
     * The quantity that has been processed.
     */
    public function selectProcessedQuantity(): static
    {
        $this->selectField("processedQuantity");

        return $this;
    }

    /**
     * The quantity being returned.
     */
    public function selectQuantity(): static
    {
        $this->selectField("quantity");

        return $this;
    }

    /**
     * The quantity that can be refunded.
     */
    public function selectRefundableQuantity(): static
    {
        $this->selectField("refundableQuantity");

        return $this;
    }

    /**
     * The quantity that was refunded.
     */
    public function selectRefundedQuantity(): static
    {
        $this->selectField("refundedQuantity");

        return $this;
    }

    /**
     * The restocking fee for the return line item.
     */
    public function selectRestockingFee(?ShopifyReturnLineItemRestockingFeeArgumentsObject $argsObject = null): ShopifyRestockingFeeQueryObject
    {
        $object = new ShopifyRestockingFeeQueryObject("restockingFee");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The reason for returning the item.
     *
     * @deprecated Use `returnReasonDefinition` instead. This field will be removed in the future.
     */
    public function selectReturnReason(): static
    {
        $this->selectField("returnReason");

        return $this;
    }

    /**
     * The standardized reason for why the item is being returned.
     */
    public function selectReturnReasonDefinition(?ShopifyReturnLineItemReturnReasonDefinitionArgumentsObject $argsObject = null): ShopifyReturnReasonDefinitionQueryObject
    {
        $object = new ShopifyReturnReasonDefinitionQueryObject("returnReasonDefinition");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Additional information about the reason for the return. Maximum length: 255 characters.
     */
    public function selectReturnReasonNote(): static
    {
        $this->selectField("returnReasonNote");

        return $this;
    }

    /**
     * The total weight of the item.
     */
    public function selectTotalWeight(?ShopifyReturnLineItemTotalWeightArgumentsObject $argsObject = null): ShopifyWeightQueryObject
    {
        $object = new ShopifyWeightQueryObject("totalWeight");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The quantity that hasn't been processed.
     */
    public function selectUnprocessedQuantity(): static
    {
        $this->selectField("unprocessedQuantity");

        return $this;
    }

    /**
     * The total line price after all discounts on the line item, including both line item level discounts and code-based line item discounts, are applied.
     */
    public function selectWithCodeDiscountedTotalPriceSet(?ShopifyReturnLineItemWithCodeDiscountedTotalPriceSetArgumentsObject $argsObject = null): ShopifyMoneyBagQueryObject
    {
        $object = new ShopifyMoneyBagQueryObject("withCodeDiscountedTotalPriceSet");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
