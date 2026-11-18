<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `segmentUpdate` mutation.
 */
class ShopifySegmentUpdatePayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "SegmentUpdatePayload";

    /**
     * The updated segment.
     */
    public function selectSegment(?ShopifySegmentUpdatePayloadSegmentArgumentsObject $argsObject = null): ShopifySegmentQueryObject
    {
        $object = new ShopifySegmentQueryObject("segment");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The list of errors that occurred from executing the mutation.
     */
    public function selectUserErrors(?ShopifySegmentUpdatePayloadUserErrorsArgumentsObject $argsObject = null): ShopifyUserErrorQueryObject
    {
        $object = new ShopifyUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
