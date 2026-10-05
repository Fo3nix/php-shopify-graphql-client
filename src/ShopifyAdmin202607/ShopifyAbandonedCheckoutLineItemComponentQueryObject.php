<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

class ShopifyAbandonedCheckoutLineItemComponentQueryObject extends QueryObject
{
    const OBJECT_NAME = "AbandonedCheckoutLineItemComponent";

    public function selectId()
    {
        $this->selectField("id");

        return $this;
    }

    public function selectImage(ShopifyAbandonedCheckoutLineItemComponentImageArgumentsObject $argsObject = null)
    {
        $object = new ShopifyImageQueryObject("image");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectQuantity()
    {
        $this->selectField("quantity");

        return $this;
    }

    public function selectTitle()
    {
        $this->selectField("title");

        return $this;
    }

    public function selectVariantTitle()
    {
        $this->selectField("variantTitle");

        return $this;
    }
}
