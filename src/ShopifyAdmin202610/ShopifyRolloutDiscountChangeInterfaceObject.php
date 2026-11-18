<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\InterfaceObject;

/**
 * A rollout treatment change that applies to a discount. The concrete type (`RolloutDiscountActivateChange` or `RolloutDiscountExpireChange`) tells you whether the treatment activates or expires the discount for the buyers it serves.
 */
class ShopifyRolloutDiscountChangeInterfaceObject extends InterfaceObject
{
    const OBJECT_NAME = "RolloutDiscountChange";

    /**
     * The discount that the change applies to. Returns `null` when the discount has been deleted or the caller can't read it.
     */
    public function selectDiscount(?ShopifyRolloutDiscountChangeDiscountArgumentsObject $argsObject = null): ShopifyDiscountNodeQueryObject
    {
        $object = new ShopifyDiscountNodeQueryObject("discount");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * A globally unique ID for this change, not the resource it affects.
     */
    public function selectId(): static
    {
        $this->selectField("id");

        return $this;
    }

    public function onRolloutDiscountActivateChange(): ShopifyRolloutDiscountActivateChangeQueryObject
    {
        $object = new ShopifyRolloutDiscountActivateChangeQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onRolloutDiscountExpireChange(): ShopifyRolloutDiscountExpireChangeQueryObject
    {
        $object = new ShopifyRolloutDiscountExpireChangeQueryObject();
        $this->addPossibleType($object);

        return $object;
    }
}
