<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class ImageQueryObject extends QueryObject
{
    const OBJECT_NAME = "Image";

    public function selectAltText()
    {
        $this->selectField("altText");

        return $this;
    }

    public function selectHeight()
    {
        $this->selectField("height");

        return $this;
    }

    public function selectId()
    {
        $this->selectField("id");

        return $this;
    }

    public function selectMetafield(ImageMetafieldArgumentsObject $argsObject = null)
    {
        $object = new MetafieldQueryObject("metafield");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectMetafields(ImageMetafieldsArgumentsObject $argsObject = null)
    {
        $object = new MetafieldConnectionQueryObject("metafields");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * @deprecated Use `url` instead.
     */
    public function selectOriginalSrc()
    {
        $this->selectField("originalSrc");

        return $this;
    }

    /**
     * @deprecated Use `url` instead.
     */
    public function selectSrc()
    {
        $this->selectField("src");

        return $this;
    }

    public function selectThumbhash()
    {
        $this->selectField("thumbhash");

        return $this;
    }

    /**
     * @deprecated Use `url(transform:)` instead
     */
    public function selectTransformedSrc()
    {
        $this->selectField("transformedSrc");

        return $this;
    }

    public function selectUrl()
    {
        $this->selectField("url");

        return $this;
    }

    public function selectWidth()
    {
        $this->selectField("width");

        return $this;
    }
}
