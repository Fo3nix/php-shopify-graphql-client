<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202510;

use GraphQL\SchemaObject\QueryObject;

class ShopifyShopifyqlQueryResponseQueryObject extends QueryObject
{
    const OBJECT_NAME = "ShopifyqlQueryResponse";

    public function selectParseErrors()
    {
        $this->selectField("parseErrors");

        return $this;
    }

    public function selectTableData(ShopifyShopifyqlQueryResponseTableDataArgumentsObject $argsObject = null)
    {
        $object = new ShopifyShopifyqlTableDataQueryObject("tableData");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
