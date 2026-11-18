<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `analyticsAnnotationCreate` mutation.
 */
class ShopifyAnalyticsAnnotationCreatePayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "AnalyticsAnnotationCreatePayload";

    /**
     * The newly created analytics annotation.
     */
    public function selectAnalyticsAnnotation(?ShopifyAnalyticsAnnotationCreatePayloadAnalyticsAnnotationArgumentsObject $argsObject = null): ShopifyAnalyticsAnnotationQueryObject
    {
        $object = new ShopifyAnalyticsAnnotationQueryObject("analyticsAnnotation");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The list of errors that occurred from executing the mutation.
     */
    public function selectUserErrors(?ShopifyAnalyticsAnnotationCreatePayloadUserErrorsArgumentsObject $argsObject = null): ShopifyAnalyticsAnnotationCreateUserErrorQueryObject
    {
        $object = new ShopifyAnalyticsAnnotationCreateUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
