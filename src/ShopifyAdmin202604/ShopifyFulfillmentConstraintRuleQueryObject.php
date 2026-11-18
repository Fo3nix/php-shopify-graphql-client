<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

/**
 * A fulfillment constraint rule.
 */
class ShopifyFulfillmentConstraintRuleQueryObject extends QueryObject
{
    const OBJECT_NAME = "FulfillmentConstraintRule";

    /**
     * Delivery method types that the function is associated with.
     */
    public function selectDeliveryMethodTypes(): static
    {
        $this->selectField("deliveryMethodTypes");

        return $this;
    }

    /**
     * The ID for the fulfillment constraint function.
     */
    public function selectFunction(?ShopifyFulfillmentConstraintRuleFunctionArgumentsObject $argsObject = null): ShopifyShopifyFunctionQueryObject
    {
        $object = new ShopifyShopifyFunctionQueryObject("function");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * A globally-unique ID.
     */
    public function selectId(): static
    {
        $this->selectField("id");

        return $this;
    }

    /**
     * A [custom field](https://shopify.dev/docs/apps/build/custom-data),
     * including its `namespace` and `key`, that's associated with a Shopify resource
     * for the purposes of adding and storing additional information.
     */
    public function selectMetafield(ShopifyFulfillmentConstraintRuleMetafieldArgumentsObject $argsObject): ShopifyMetafieldQueryObject
    {
        $object = new ShopifyMetafieldQueryObject("metafield");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * A list of [custom fields](https://shopify.dev/docs/apps/build/custom-data)
     * that a merchant associates with a Shopify resource.
     */
    public function selectMetafields(?ShopifyFulfillmentConstraintRuleMetafieldsArgumentsObject $argsObject = null): ShopifyMetafieldConnectionQueryObject
    {
        $object = new ShopifyMetafieldConnectionQueryObject("metafields");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
