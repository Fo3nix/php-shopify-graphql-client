<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

class ShopifyShopifyqlTableDataColumnQueryObject extends QueryObject
{
    const OBJECT_NAME = "ShopifyqlTableDataColumn";

    public function selectColumnOrigin()
    {
        $this->selectField("columnOrigin");

        return $this;
    }

    public function selectDataType()
    {
        $this->selectField("dataType");

        return $this;
    }

    public function selectDisplayName()
    {
        $this->selectField("displayName");

        return $this;
    }

    public function selectDynamicColumnMetadata(ShopifyShopifyqlTableDataColumnDynamicColumnMetadataArgumentsObject $argsObject = null)
    {
        $object = new ShopifyShopifyqlDynamicColumnMetadataQueryObject("dynamicColumnMetadata");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectName()
    {
        $this->selectField("name");

        return $this;
    }

    public function selectShortDisplayName()
    {
        $this->selectField("shortDisplayName");

        return $this;
    }

    public function selectSubType()
    {
        $this->selectField("subType");

        return $this;
    }
}
