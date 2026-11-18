<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `analyticsAnnotationDelete` mutation.
 */
class ShopifyAnalyticsAnnotationDeletePayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "AnalyticsAnnotationDeletePayload";

    /**
     * The ID of the deleted analytics annotation.
     */
    public function selectDeletedId(): static
    {
        $this->selectField("deletedId");

        return $this;
    }

    /**
     * The list of errors that occurred from executing the mutation.
     */
    public function selectUserErrors(?ShopifyAnalyticsAnnotationDeletePayloadUserErrorsArgumentsObject $argsObject = null): ShopifyAnalyticsAnnotationDeleteUserErrorQueryObject
    {
        $object = new ShopifyAnalyticsAnnotationDeleteUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
