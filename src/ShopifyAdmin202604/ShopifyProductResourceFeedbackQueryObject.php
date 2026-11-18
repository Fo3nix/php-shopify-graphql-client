<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

/**
 * Reports the status of product for a Sales Channel or Storefront API.
 * This might include why a product is not available in a Sales Channel
 * and how a merchant might fix this.
 */
class ShopifyProductResourceFeedbackQueryObject extends QueryObject
{
    const OBJECT_NAME = "ProductResourceFeedback";

    /**
     * The channel this feedback is for.
     */
    public function selectChannel(?ShopifyProductResourceFeedbackChannelArgumentsObject $argsObject = null): ShopifyChannelQueryObject
    {
        $object = new ShopifyChannelQueryObject("channel");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The time when the feedback was generated. Used to help determine whether
     * incoming feedback is outdated compared to existing feedback.
     */
    public function selectFeedbackGeneratedAt(): static
    {
        $this->selectField("feedbackGeneratedAt");

        return $this;
    }

    /**
     * The feedback messages presented to the merchant.
     */
    public function selectMessages(): static
    {
        $this->selectField("messages");

        return $this;
    }

    /**
     * The ID of the product associated with the feedback.
     */
    public function selectProductId(): static
    {
        $this->selectField("productId");

        return $this;
    }

    /**
     * The timestamp of the product associated with the feedback.
     */
    public function selectProductUpdatedAt(): static
    {
        $this->selectField("productUpdatedAt");

        return $this;
    }

    /**
     * Conveys the state of the feedback and whether it requires merchant action or not.
     */
    public function selectState(): static
    {
        $this->selectField("state");

        return $this;
    }
}
