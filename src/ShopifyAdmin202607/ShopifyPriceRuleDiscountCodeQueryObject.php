<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * A discount code of a price rule.
 */
class ShopifyPriceRuleDiscountCodeQueryObject extends QueryObject
{
    const OBJECT_NAME = "PriceRuleDiscountCode";

    /**
     * The application that created the discount code.
     */
    public function selectApp(?ShopifyPriceRuleDiscountCodeAppArgumentsObject $argsObject = null): ShopifyAppQueryObject
    {
        $object = new ShopifyAppQueryObject("app");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The code to apply the discount.
     */
    public function selectCode(): static
    {
        $this->selectField("code");

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
     * The number of times that the price rule has been used. This value is updated asynchronously and can be different than the actual usage count.
     */
    public function selectUsageCount(): static
    {
        $this->selectField("usageCount");

        return $this;
    }
}
