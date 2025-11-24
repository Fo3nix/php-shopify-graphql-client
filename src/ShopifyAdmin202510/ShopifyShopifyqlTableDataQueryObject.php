<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202510;

use GraphQL\SchemaObject\QueryObject;

class ShopifyShopifyqlTableDataQueryObject extends QueryObject
{
    const OBJECT_NAME = "ShopifyqlTableData";

    public function selectColumns(ShopifyShopifyqlTableDataColumnsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyShopifyqlTableDataColumnQueryObject("columns");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectRows()
    {
        $this->selectField("rows");

        return $this;
    }
}
