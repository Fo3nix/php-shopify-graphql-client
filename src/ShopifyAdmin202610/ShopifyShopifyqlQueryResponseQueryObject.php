<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

class ShopifyShopifyqlQueryResponseQueryObject extends QueryObject
{
    const OBJECT_NAME = "ShopifyqlQueryResponse";

    public function selectAnalyticsTargets(ShopifyShopifyqlQueryResponseAnalyticsTargetsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyAnalyticsTargetQueryObject("analyticsTargets");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectParseErrors()
    {
        $this->selectField("parseErrors");

        return $this;
    }

    public function selectParseWarnings()
    {
        $this->selectField("parseWarnings");

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
