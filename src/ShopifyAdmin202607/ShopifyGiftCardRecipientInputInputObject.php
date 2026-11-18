<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields to add a recipient to a gift card.
 */
class ShopifyGiftCardRecipientInputInputObject extends InputObject
{
    const REQUIRED = ["id"];

    protected $id;
    protected $preferredName;
    protected $message;
    protected $sendNotificationAt;

    /**
     * The ID of the customer who will be the recipient of the gift card. Requires `write_customers` access_scope.
     */
    public function setId($id): static
    {
        $this->id = $id;

        return $this;
    }

    /**
     * The preferred name of the recipient.
     */
    public function setPreferredName($preferredName): static
    {
        $this->preferredName = $preferredName;

        return $this;
    }

    /**
     * The personalized message intended for the recipient.
     */
    public function setMessage($message): static
    {
        $this->message = $message;

        return $this;
    }

    /**
     * The scheduled datetime on which the gift card will be sent to the recipient. The gift card will be sent within an hour of the specified datetime.
     */
    public function setSendNotificationAt($sendNotificationAt): static
    {
        $this->sendNotificationAt = $sendNotificationAt;

        return $this;
    }
}
