<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `fulfillmentOrderMerge` mutation.
 */
class ShopifyFulfillmentOrderMergePayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "FulfillmentOrderMergePayload";

    /**
     * The result of the fulfillment order merges.
     */
    public function selectFulfillmentOrderMerges(?ShopifyFulfillmentOrderMergePayloadFulfillmentOrderMergesArgumentsObject $argsObject = null): ShopifyFulfillmentOrderMergeResultQueryObject
    {
        $object = new ShopifyFulfillmentOrderMergeResultQueryObject("fulfillmentOrderMerges");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The list of errors that occurred from executing the mutation.
     */
    public function selectUserErrors(?ShopifyFulfillmentOrderMergePayloadUserErrorsArgumentsObject $argsObject = null): ShopifyFulfillmentOrderMergeUserErrorQueryObject
    {
        $object = new ShopifyFulfillmentOrderMergeUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
