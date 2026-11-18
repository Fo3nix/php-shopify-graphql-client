<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `analyticsTargetsDelete` mutation.
 */
class ShopifyAnalyticsTargetsDeletePayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "AnalyticsTargetsDeletePayload";

    /**
     * The IDs of the deleted analytics targets.
     */
    public function selectDeletedIds(): static
    {
        $this->selectField("deletedIds");

        return $this;
    }

    /**
     * The list of errors that occurred from executing the mutation.
     */
    public function selectUserErrors(?ShopifyAnalyticsTargetsDeletePayloadUserErrorsArgumentsObject $argsObject = null): ShopifyAnalyticsTargetsDeleteUserErrorQueryObject
    {
        $object = new ShopifyAnalyticsTargetsDeleteUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
