<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

class ShopifyShopifyqlRowMetadataQueryObject extends QueryObject
{
    const OBJECT_NAME = "ShopifyqlRowMetadata";

    public function selectNullCellTranslations(ShopifyShopifyqlRowMetadataNullCellTranslationsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyShopifyqlNullCellTranslationQueryObject("nullCellTranslations");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectRawResourceIds()
    {
        $this->selectField("rawResourceIds");

        return $this;
    }

    public function selectTopNRemainderColumnNames()
    {
        $this->selectField("topNRemainderColumnNames");

        return $this;
    }
}
