<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * An app together with the shareable collection sources it publishes for the shop.
 */
class ShopifyCollectionConditionsSourcesByAppQueryObject extends QueryObject
{
    const OBJECT_NAME = "CollectionConditionsSourcesByApp";

    /**
     * The app that publishes the collection sources.
     */
    public function selectApp(?ShopifyCollectionConditionsSourcesByAppAppArgumentsObject $argsObject = null): ShopifyAppQueryObject
    {
        $object = new ShopifyAppQueryObject("app");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The shareable collection sources owned by this app.
     */
    public function selectSources(?ShopifyCollectionConditionsSourcesByAppSourcesArgumentsObject $argsObject = null): ShopifyCollectionConditionsSourceConnectionQueryObject
    {
        $object = new ShopifyCollectionConditionsSourceConnectionQueryObject("sources");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
