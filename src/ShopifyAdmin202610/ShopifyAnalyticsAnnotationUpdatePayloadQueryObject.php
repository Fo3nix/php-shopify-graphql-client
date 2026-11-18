<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `analyticsAnnotationUpdate` mutation.
 */
class ShopifyAnalyticsAnnotationUpdatePayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "AnalyticsAnnotationUpdatePayload";

    /**
     * The updated analytics annotation.
     */
    public function selectAnalyticsAnnotation(?ShopifyAnalyticsAnnotationUpdatePayloadAnalyticsAnnotationArgumentsObject $argsObject = null): ShopifyAnalyticsAnnotationQueryObject
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
    public function selectUserErrors(?ShopifyAnalyticsAnnotationUpdatePayloadUserErrorsArgumentsObject $argsObject = null): ShopifyAnalyticsAnnotationUpdateUserErrorQueryObject
    {
        $object = new ShopifyAnalyticsAnnotationUpdateUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
