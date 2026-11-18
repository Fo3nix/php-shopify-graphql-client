<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * Provides the capabilities of a metaobject definition.
 */
class ShopifyMetaobjectCapabilitiesQueryObject extends QueryObject
{
    const OBJECT_NAME = "MetaobjectCapabilities";

    /**
     * Indicates whether a metaobject definition can be displayed as a page on the Online Store.
     */
    public function selectOnlineStore(?ShopifyMetaobjectCapabilitiesOnlineStoreArgumentsObject $argsObject = null): ShopifyMetaobjectCapabilitiesOnlineStoreQueryObject
    {
        $object = new ShopifyMetaobjectCapabilitiesOnlineStoreQueryObject("onlineStore");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Indicate whether a metaobject definition is publishable.
     */
    public function selectPublishable(?ShopifyMetaobjectCapabilitiesPublishableArgumentsObject $argsObject = null): ShopifyMetaobjectCapabilitiesPublishableQueryObject
    {
        $object = new ShopifyMetaobjectCapabilitiesPublishableQueryObject("publishable");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Indicate whether a metaobject definition is renderable and exposes SEO data.
     */
    public function selectRenderable(?ShopifyMetaobjectCapabilitiesRenderableArgumentsObject $argsObject = null): ShopifyMetaobjectCapabilitiesRenderableQueryObject
    {
        $object = new ShopifyMetaobjectCapabilitiesRenderableQueryObject("renderable");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Indicate whether a metaobject definition is translatable.
     */
    public function selectTranslatable(?ShopifyMetaobjectCapabilitiesTranslatableArgumentsObject $argsObject = null): ShopifyMetaobjectCapabilitiesTranslatableQueryObject
    {
        $object = new ShopifyMetaobjectCapabilitiesTranslatableQueryObject("translatable");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
