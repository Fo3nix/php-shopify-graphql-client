<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `segmentCreate` mutation.
 */
class ShopifySegmentCreatePayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "SegmentCreatePayload";

    /**
     * The newly created segment.
     */
    public function selectSegment(?ShopifySegmentCreatePayloadSegmentArgumentsObject $argsObject = null): ShopifySegmentQueryObject
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
    public function selectUserErrors(?ShopifySegmentCreatePayloadUserErrorsArgumentsObject $argsObject = null): ShopifyUserErrorQueryObject
    {
        $object = new ShopifyUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
