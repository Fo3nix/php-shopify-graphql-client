<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `analyticsTargetUpdate` mutation.
 */
class ShopifyAnalyticsTargetUpdatePayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "AnalyticsTargetUpdatePayload";

    /**
     * The updated [analytics target](https://shopify.dev/docs/api/admin-graphql/latest/objects/AnalyticsTarget).
     */
    public function selectAnalyticsTarget(?ShopifyAnalyticsTargetUpdatePayloadAnalyticsTargetArgumentsObject $argsObject = null): ShopifyAnalyticsTargetQueryObject
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
    public function selectUserErrors(?ShopifyAnalyticsTargetUpdatePayloadUserErrorsArgumentsObject $argsObject = null): ShopifyAnalyticsTargetUpdateUserErrorQueryObject
    {
        $object = new ShopifyAnalyticsTargetUpdateUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
