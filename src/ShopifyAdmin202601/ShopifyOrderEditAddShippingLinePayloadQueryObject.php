<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `orderEditAddShippingLine` mutation.
 */
class ShopifyOrderEditAddShippingLinePayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "OrderEditAddShippingLinePayload";

    /**
     * The [calculated order](https://shopify.dev/api/admin-graphql/latest/objects/calculatedorder)
     * with the edits applied but not saved.
     */
    public function selectCalculatedOrder(?ShopifyOrderEditAddShippingLinePayloadCalculatedOrderArgumentsObject $argsObject = null): ShopifyCalculatedOrderQueryObject
    {
        $object = new ShopifyCalculatedOrderQueryObject("calculatedOrder");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The [calculated shipping line](https://shopify.dev/api/admin-graphql/latest/objects/calculatedshippingline)
     * that's added during this order edit.
     */
    public function selectCalculatedShippingLine(?ShopifyOrderEditAddShippingLinePayloadCalculatedShippingLineArgumentsObject $argsObject = null): ShopifyCalculatedShippingLineQueryObject
    {
        $object = new ShopifyCalculatedShippingLineQueryObject("calculatedShippingLine");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The order edit session with the edits applied but not saved.
     */
    public function selectOrderEditSession(?ShopifyOrderEditAddShippingLinePayloadOrderEditSessionArgumentsObject $argsObject = null): ShopifyOrderEditSessionQueryObject
    {
        $object = new ShopifyOrderEditSessionQueryObject("orderEditSession");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The list of errors that occurred from executing the mutation.
     */
    public function selectUserErrors(?ShopifyOrderEditAddShippingLinePayloadUserErrorsArgumentsObject $argsObject = null): ShopifyOrderEditAddShippingLineUserErrorQueryObject
    {
        $object = new ShopifyOrderEditAddShippingLineUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
