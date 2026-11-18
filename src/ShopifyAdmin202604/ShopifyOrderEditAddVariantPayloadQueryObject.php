<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `orderEditAddVariant` mutation.
 */
class ShopifyOrderEditAddVariantPayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "OrderEditAddVariantPayload";

    /**
     * The [calculated line item](https://shopify.dev/api/admin-graphql/latest/objects/calculatedlineitem)
     * that's added during this order edit.
     */
    public function selectCalculatedLineItem(?ShopifyOrderEditAddVariantPayloadCalculatedLineItemArgumentsObject $argsObject = null): ShopifyCalculatedLineItemQueryObject
    {
        $object = new ShopifyCalculatedLineItemQueryObject("calculatedLineItem");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The [calculated order](https://shopify.dev/api/admin-graphql/latest/objects/calculatedorder)
     * with the edits applied but not saved.
     */
    public function selectCalculatedOrder(?ShopifyOrderEditAddVariantPayloadCalculatedOrderArgumentsObject $argsObject = null): ShopifyCalculatedOrderQueryObject
    {
        $object = new ShopifyCalculatedOrderQueryObject("calculatedOrder");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The order edit session with the edits applied but not saved.
     */
    public function selectOrderEditSession(?ShopifyOrderEditAddVariantPayloadOrderEditSessionArgumentsObject $argsObject = null): ShopifyOrderEditSessionQueryObject
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
    public function selectUserErrors(?ShopifyOrderEditAddVariantPayloadUserErrorsArgumentsObject $argsObject = null): ShopifyUserErrorQueryObject
    {
        $object = new ShopifyUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
