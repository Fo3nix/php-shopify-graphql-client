<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

/**
 * The result of a ShopifyQL query.
 */
class ShopifyShopifyqlTableDataQueryObject extends QueryObject
{
    const OBJECT_NAME = "ShopifyqlTableData";

    /**
     * The columns of the table.
     */
    public function selectColumns(?ShopifyShopifyqlTableDataColumnsArgumentsObject $argsObject = null): ShopifyShopifyqlTableDataColumnQueryObject
    {
        $object = new ShopifyShopifyqlTableDataColumnQueryObject("columns");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The rows of the table.
     */
    public function selectRows(): static
    {
        $this->selectField("rows");

        return $this;
    }
}
