<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * The list of line item components that belong to a line item.
 */
class ShopifyAbandonedCheckoutLineItemComponentQueryObject extends QueryObject
{
    const OBJECT_NAME = "AbandonedCheckoutLineItemComponent";

    /**
     * A globally-unique ID.
     */
    public function selectId(): static
    {
        $this->selectField("id");

        return $this;
    }

    /**
     * The variant image associated with the line item component.
     * NULL if the variant associated doesn't have an image.
     */
    public function selectImage(?ShopifyAbandonedCheckoutLineItemComponentImageArgumentsObject $argsObject = null): ShopifyImageQueryObject
    {
        $object = new ShopifyImageQueryObject("image");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The quantity of the line item component.
     */
    public function selectQuantity(): static
    {
        $this->selectField("quantity");

        return $this;
    }

    /**
     * Title of the line item component.
     */
    public function selectTitle(): static
    {
        $this->selectField("title");

        return $this;
    }

    /**
     * The name of the variant.
     */
    public function selectVariantTitle(): static
    {
        $this->selectField("variantTitle");

        return $this;
    }
}
