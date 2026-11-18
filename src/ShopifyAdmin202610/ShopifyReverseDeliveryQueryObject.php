<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * A reverse delivery is a post-fulfillment object that represents a buyer sending a package to a merchant.
 * For example, a buyer requests a return, and a merchant sends the buyer a shipping label.
 * The reverse delivery contains the context of the items sent back, how they're being sent back
 * (for example, a shipping label), and the current state of the delivery (tracking information).
 */
class ShopifyReverseDeliveryQueryObject extends QueryObject
{
    const OBJECT_NAME = "ReverseDelivery";

    /**
     * The deliverable associated with the reverse delivery.
     */
    public function selectDeliverable(?ShopifyReverseDeliveryDeliverableArgumentsObject $argsObject = null): ShopifyReverseDeliveryDeliverableUnionObject
    {
        $object = new ShopifyReverseDeliveryDeliverableUnionObject("deliverable");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The ID of the reverse delivery.
     */
    public function selectId(): static
    {
        $this->selectField("id");

        return $this;
    }

    /**
     * The reverse delivery line items attached to the reverse delivery.
     */
    public function selectReverseDeliveryLineItems(?ShopifyReverseDeliveryReverseDeliveryLineItemsArgumentsObject $argsObject = null): ShopifyReverseDeliveryLineItemConnectionQueryObject
    {
        $object = new ShopifyReverseDeliveryLineItemConnectionQueryObject("reverseDeliveryLineItems");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The `ReverseFulfillmentOrder` associated with the reverse delivery.
     */
    public function selectReverseFulfillmentOrder(?ShopifyReverseDeliveryReverseFulfillmentOrderArgumentsObject $argsObject = null): ShopifyReverseFulfillmentOrderQueryObject
    {
        $object = new ShopifyReverseFulfillmentOrderQueryObject("reverseFulfillmentOrder");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
