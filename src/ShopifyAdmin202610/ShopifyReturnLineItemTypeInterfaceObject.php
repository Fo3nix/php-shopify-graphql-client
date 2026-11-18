<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\InterfaceObject;

/**
 * A return line item of any type.
 */
class ShopifyReturnLineItemTypeInterfaceObject extends InterfaceObject
{
    const OBJECT_NAME = "ReturnLineItemType";

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
    public function selectReturnReasonDefinition(?ShopifyReturnLineItemTypeReturnReasonDefinitionArgumentsObject $argsObject = null): ShopifyReturnReasonDefinitionQueryObject
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
     * The quantity that hasn't been processed.
     */
    public function selectUnprocessedQuantity(): static
    {
        $this->selectField("unprocessedQuantity");

        return $this;
    }

    public function onReturnLineItem(): ShopifyReturnLineItemQueryObject
    {
        $object = new ShopifyReturnLineItemQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onUnverifiedReturnLineItem(): ShopifyUnverifiedReturnLineItemQueryObject
    {
        $object = new ShopifyUnverifiedReturnLineItemQueryObject();
        $this->addPossibleType($object);

        return $object;
    }
}
