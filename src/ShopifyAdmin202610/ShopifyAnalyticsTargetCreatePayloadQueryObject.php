<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `analyticsTargetCreate` mutation.
 */
class ShopifyAnalyticsTargetCreatePayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "AnalyticsTargetCreatePayload";

    /**
     * The newly created [analytics target](https://shopify.dev/docs/api/admin-graphql/latest/objects/AnalyticsTarget).
     */
    public function selectAnalyticsTarget(?ShopifyAnalyticsTargetCreatePayloadAnalyticsTargetArgumentsObject $argsObject = null): ShopifyAnalyticsTargetQueryObject
    {
        $object = new ShopifyAnalyticsTargetQueryObject("analyticsTarget");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The list of errors that occurred from executing the mutation.
     */
    public function selectUserErrors(?ShopifyAnalyticsTargetCreatePayloadUserErrorsArgumentsObject $argsObject = null): ShopifyAnalyticsTargetCreateUserErrorQueryObject
    {
        $object = new ShopifyAnalyticsTargetCreateUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
