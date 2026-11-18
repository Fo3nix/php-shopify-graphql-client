<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * An unverified return line item.
 */
class ShopifyUnverifiedReturnLineItemQueryObject extends QueryObject
{
    const OBJECT_NAME = "UnverifiedReturnLineItem";

    /**
     * A note from the customer that describes the item to be returned. Maximum length: 300 characters.
     */
    public function selectCustomerNote(): static
    {
        $this->selectField("customerNote");

        return $this;
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
    public function selectReturnReasonDefinition(?ShopifyUnverifiedReturnLineItemReturnReasonDefinitionArgumentsObject $argsObject = null): ShopifyReturnReasonDefinitionQueryObject
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
     * The unit price of the unverified return line item.
     */
    public function selectUnitPrice(?ShopifyUnverifiedReturnLineItemUnitPriceArgumentsObject $argsObject = null): ShopifyMoneyV2QueryObject
    {
        $object = new ShopifyMoneyV2QueryObject("unitPrice");
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
}
