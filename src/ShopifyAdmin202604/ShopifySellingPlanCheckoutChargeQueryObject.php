<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

/**
 * The amount charged at checkout when the full amount isn't charged at checkout.
 */
class ShopifySellingPlanCheckoutChargeQueryObject extends QueryObject
{
    const OBJECT_NAME = "SellingPlanCheckoutCharge";

    /**
     * The charge type for the checkout charge.
     */
    public function selectType(): static
    {
        $this->selectField("type");

        return $this;
    }

    /**
     * The charge value for the checkout charge.
     */
    public function selectValue(?ShopifySellingPlanCheckoutChargeValueArgumentsObject $argsObject = null): ShopifySellingPlanCheckoutChargeValueUnionObject
    {
        $object = new ShopifySellingPlanCheckoutChargeValueUnionObject("value");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
