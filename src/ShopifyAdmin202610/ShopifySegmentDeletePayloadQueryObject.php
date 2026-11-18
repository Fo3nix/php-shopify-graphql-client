<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `segmentDelete` mutation.
 */
class ShopifySegmentDeletePayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "SegmentDeletePayload";

    /**
     * ID of the deleted segment.
     */
    public function selectDeletedSegmentId(): static
    {
        $this->selectField("deletedSegmentId");

        return $this;
    }

    /**
     * The list of errors that occurred from executing the mutation.
     */
    public function selectUserErrors(?ShopifySegmentDeletePayloadUserErrorsArgumentsObject $argsObject = null): ShopifyUserErrorQueryObject
    {
        $object = new ShopifyUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
