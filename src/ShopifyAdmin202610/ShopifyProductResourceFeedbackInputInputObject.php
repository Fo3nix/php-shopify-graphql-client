<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\InputObject;
use GraphQL\RawObject;

/**
 * The input fields used to create a product feedback.
 */
class ShopifyProductResourceFeedbackInputInputObject extends InputObject
{
    const REQUIRED = ["productId", "state", "feedbackGeneratedAt", "productUpdatedAt"];

    protected $productId;
    protected $state;
    protected $feedbackGeneratedAt;
    protected $productUpdatedAt;
    protected $messages;
    protected $channelId;

    /**
     * The ID of the product that the feedback was created on.
     */
    public function setProductId($productId): static
    {
        $this->productId = $productId;

        return $this;
    }

    /**
     * Whether the merchant needs to take action on the product.
     */
    public function setState($shopifyResourceFeedbackState): static
    {
        $this->state = new RawObject($shopifyResourceFeedbackState);

        return $this;
    }

    /**
     * The date and time when the payload is constructed.
     * Used to help determine whether incoming feedback is outdated compared to feedback already received, and if it should be ignored upon arrival.
     */
    public function setFeedbackGeneratedAt($feedbackGeneratedAt): static
    {
        $this->feedbackGeneratedAt = $feedbackGeneratedAt;

        return $this;
    }

    /**
     * The timestamp of the product associated with the feedback.
     */
    public function setProductUpdatedAt($productUpdatedAt): static
    {
        $this->productUpdatedAt = $productUpdatedAt;

        return $this;
    }

    /**
     * A concise set of copy strings to be displayed to merchants. Used to guide merchants in resolving problems that your app encounters when trying to make use of their products.
     * You can specify up to ten messages. Each message is limited to 100 characters.
     */
    public function setMessages(array $messages): static
    {
        $this->messages = $messages;

        return $this;
    }

    /**
     * The ID of the channel that the feedback is for. Used to scope feedback to a specific sales channel when the app has multiple channels.
     */
    public function setChannelId($channelId): static
    {
        $this->channelId = $channelId;

        return $this;
    }
}
