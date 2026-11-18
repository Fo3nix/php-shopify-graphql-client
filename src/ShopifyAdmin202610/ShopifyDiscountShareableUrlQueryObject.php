<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * A shareable URL for a discount code.
 */
class ShopifyDiscountShareableUrlQueryObject extends QueryObject
{
    const OBJECT_NAME = "DiscountShareableUrl";

    /**
     * The image URL of the item (product or collection) to which the discount applies.
     */
    public function selectTargetItemImage(?ShopifyDiscountShareableUrlTargetItemImageArgumentsObject $argsObject = null): ShopifyImageQueryObject
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
