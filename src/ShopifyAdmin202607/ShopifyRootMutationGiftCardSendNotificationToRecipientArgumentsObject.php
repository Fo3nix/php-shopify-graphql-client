<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationGiftCardSendNotificationToRecipientArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["id"];

    protected $id;

    /**
     * The ID of the gift card to send.
     */
    public function setId($id): static
    {
        $this->id = $id;

        return $this;
    }
}
