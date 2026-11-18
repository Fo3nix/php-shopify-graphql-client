<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `fulfillmentOrderReportProgress` mutation.
 */
class ShopifyFulfillmentOrderReportProgressPayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "FulfillmentOrderReportProgressPayload";

    /**
     * The fulfillment order on which a mark as in progress update has been specified.
     */
    public function selectFulfillmentOrder(?ShopifyFulfillmentOrderReportProgressPayloadFulfillmentOrderArgumentsObject $argsObject = null): ShopifyFulfillmentOrderQueryObject
    {
        $object = new ShopifyFulfillmentOrderQueryObject("fulfillmentOrder");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The list of errors that occurred from executing the mutation.
     */
    public function selectUserErrors(?ShopifyFulfillmentOrderReportProgressPayloadUserErrorsArgumentsObject $argsObject = null): ShopifyFulfillmentOrderReportProgressUserErrorQueryObject
    {
        $object = new ShopifyFulfillmentOrderReportProgressUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
