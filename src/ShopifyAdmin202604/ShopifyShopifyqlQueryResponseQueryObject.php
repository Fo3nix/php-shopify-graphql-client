<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

/**
 * A response to a ShopifyQL query.
 */
class ShopifyShopifyqlQueryResponseQueryObject extends QueryObject
{
    const OBJECT_NAME = "ShopifyqlQueryResponse";

    /**
     * A list of parse errors, if parsing fails.
     */
    public function selectParseErrors(): static
    {
        $this->selectField("parseErrors");

        return $this;
    }

    /**
     * The result in a tabular format with column and row data.
     */
    public function selectTableData(?ShopifyShopifyqlQueryResponseTableDataArgumentsObject $argsObject = null): ShopifyShopifyqlTableDataQueryObject
    {
        $object = new ShopifyShopifyqlTableDataQueryObject("tableData");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
