<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationGiftCardSendNotificationToCustomerArgumentsObject extends ArgumentsObject
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
