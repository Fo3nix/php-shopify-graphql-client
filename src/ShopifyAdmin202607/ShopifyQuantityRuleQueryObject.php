<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * The quantity rule for the product variant in a given context.
 */
class ShopifyQuantityRuleQueryObject extends QueryObject
{
    const OBJECT_NAME = "QuantityRule";

    /**
     * The value that specifies the quantity increment between minimum and maximum of the rule.
     * Only quantities divisible by this value will be considered valid.
     *
     * The increment must be lower than or equal to the minimum and the maximum, and both minimum and maximum
     * must be divisible by this value.
     */
    public function selectIncrement(): static
    {
        $this->selectField("increment");

        return $this;
    }

    /**
     * Whether the quantity rule fields match one increment, one minimum and no maximum.
     */
    public function selectIsDefault(): static
    {
        $this->selectField("isDefault");

        return $this;
    }

    /**
     * An optional value that defines the highest allowed quantity purchased by the customer.
     * If defined, maximum must be lower than or equal to the minimum and must be a multiple of the increment.
     */
    public function selectMaximum(): static
    {
        $this->selectField("maximum");

        return $this;
    }

    /**
     * The value that defines the lowest allowed quantity purchased by the customer.
     * The minimum must be a multiple of the quantity rule's increment.
     */
    public function selectMinimum(): static
    {
        $this->selectField("minimum");

        return $this;
    }

    /**
     * Whether the values of the quantity rule were explicitly set.
     */
    public function selectOriginType(): static
    {
        $this->selectField("originType");

        return $this;
    }

    /**
     * The product variant for which the quantity rule is applied.
     */
    public function selectProductVariant(?ShopifyQuantityRuleProductVariantArgumentsObject $argsObject = null): ShopifyProductVariantQueryObject
    {
        $object = new ShopifyProductVariantQueryObject("productVariant");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
