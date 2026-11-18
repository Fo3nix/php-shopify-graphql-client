<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * Represents an individual result returned from a search.
 */
class ShopifySearchResultQueryObject extends QueryObject
{
    const OBJECT_NAME = "SearchResult";

    /**
     * Returns the search result description text.
     */
    public function selectDescription(): static
    {
        $this->selectField("description");

        return $this;
    }

    /**
     * Returns the Image resource presented to accompany a search result.
     */
    public function selectImage(?ShopifySearchResultImageArgumentsObject $argsObject = null): ShopifyImageQueryObject
    {
        $object = new ShopifyImageQueryObject("image");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Returns the resource represented by the search result.
     */
    public function selectReference(?ShopifySearchResultReferenceArgumentsObject $argsObject = null): ShopifyNodeInterfaceObject
    {
        $object = new ShopifyNodeInterfaceObject("reference");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Returns the resource title.
     */
    public function selectTitle(): static
    {
        $this->selectField("title");

        return $this;
    }

    /**
     * Returns the absolute URL to the resource in the search result.
     */
    public function selectUrl(): static
    {
        $this->selectField("url");

        return $this;
    }
}
