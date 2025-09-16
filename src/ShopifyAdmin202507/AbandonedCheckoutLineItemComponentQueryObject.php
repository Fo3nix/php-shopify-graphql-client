<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class AbandonedCheckoutLineItemComponentQueryObject extends QueryObject
{
    const OBJECT_NAME = "AbandonedCheckoutLineItemComponent";

    public function selectId()
    {
        $this->selectField("id");

        return $this;
    }

    public function selectImage(AbandonedCheckoutLineItemComponentImageArgumentsObject $argsObject = null)
    {
        $object = new ImageQueryObject("image");
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
