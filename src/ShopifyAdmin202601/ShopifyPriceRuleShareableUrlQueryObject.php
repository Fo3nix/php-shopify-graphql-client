<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

/**
 * Shareable URL for the discount code associated with the price rule.
 */
class ShopifyPriceRuleShareableUrlQueryObject extends QueryObject
{
    const OBJECT_NAME = "PriceRuleShareableUrl";

    /**
     * The image URL of the item (product or collection) to which the discount applies.
     */
    public function selectTargetItemImage(?ShopifyPriceRuleShareableUrlTargetItemImageArgumentsObject $argsObject = null): ShopifyImageQueryObject
    {
        $object = new ShopifyImageQueryObject("targetItemImage");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The type of page that's associated with the URL.
     */
    public function selectTargetType(): static
    {
        $this->selectField("targetType");

        return $this;
    }

    /**
     * The title of the page that's associated with the URL.
     */
    public function selectTitle(): static
    {
        $this->selectField("title");

        return $this;
    }

    /**
     * The URL for the discount code.
     */
    public function selectUrl(): static
    {
        $this->selectField("url");

        return $this;
    }
}
