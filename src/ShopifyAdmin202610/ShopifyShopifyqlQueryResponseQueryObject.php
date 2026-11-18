<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * A response to a ShopifyQL query.
 */
class ShopifyShopifyqlQueryResponseQueryObject extends QueryObject
{
    const OBJECT_NAME = "ShopifyqlQueryResponse";

    /**
     * A list of analytics targets that match the ShopifyQL query.
     * For target gauge queries, returns the matching target if one exists.
     * For `COMPARE TO targets` queries, returns matching targets for visualized metrics in `VISUALIZE` order.
     * Returns an empty list when no targets match or the ShopifyQL query cannot be matched.
     * Query `parseErrors` to detect invalid ShopifyQL.
     */
    public function selectAnalyticsTargets(?ShopifyShopifyqlQueryResponseAnalyticsTargetsArgumentsObject $argsObject = null): ShopifyAnalyticsTargetQueryObject
    {
        $object = new ShopifyAnalyticsTargetQueryObject("analyticsTargets");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * A list of parse errors, if parsing fails.
     */
    public function selectParseErrors(): static
    {
        $this->selectField("parseErrors");

        return $this;
    }

    /**
     * A list of non-fatal parse warnings, such as use of a deprecated field. Unlike `parseErrors`, warnings are returned alongside results.
     */
    public function selectParseWarnings(): static
    {
        $this->selectField("parseWarnings");

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
