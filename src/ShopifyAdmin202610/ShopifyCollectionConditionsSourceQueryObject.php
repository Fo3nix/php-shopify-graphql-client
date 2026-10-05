<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

class ShopifyCollectionConditionsSourceQueryObject extends QueryObject
{
    const OBJECT_NAME = "CollectionConditionsSource";

    public function selectApp(ShopifyCollectionConditionsSourceAppArgumentsObject $argsObject = null)
    {
        $object = new ShopifyAppQueryObject("app");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectDescription()
    {
        $this->selectField("description");

        return $this;
    }

    public function selectExclusion(ShopifyCollectionConditionsSourceExclusionArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCollectionSourceExclusionQueryObject("exclusion");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectId()
    {
        $this->selectField("id");

        return $this;
    }

    public function selectInclusion(ShopifyCollectionConditionsSourceInclusionArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCollectionSourceInclusionQueryObject("inclusion");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectProducts(ShopifyCollectionConditionsSourceProductsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyProductConnectionQueryObject("products");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectShareable()
    {
        $this->selectField("shareable");

        return $this;
    }

    public function selectTargetType()
    {
        $this->selectField("targetType");

        return $this;
    }

    public function selectTitle()
    {
        $this->selectField("title");

        return $this;
    }
}
