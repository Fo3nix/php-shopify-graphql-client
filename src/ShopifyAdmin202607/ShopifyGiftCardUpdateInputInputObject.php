<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\InputObject;
use GraphQL\RawObject;

/**
 * The input fields to update a gift card.
 */
class ShopifyGiftCardUpdateInputInputObject extends InputObject
{
    protected $note;
    protected $expiresOn;
    protected $customerId;
    protected $crossCurrencyRedemptionStrategy;
    protected $recipientAttributes;
    protected $templateSuffix;

    /**
     * The note associated with the gift card, which isn't visible to the customer.
     */
    public function setNote($note): static
    {
        $this->note = $note;

        return $this;
    }

    /**
     * The date at which the gift card will expire. If set to `null`, then the gift card will never expire.
     */
    public function setExpiresOn($expiresOn): static
    {
        $this->expiresOn = $expiresOn;

        return $this;
    }

    /**
     * The ID of the customer the gift card is issued to, as opposed to the gift recipient. Replaces the current customer, if any. Requires `write_customers` access_scope.
     */
    public function setCustomerId($customerId): static
    {
        $this->customerId = $customerId;

        return $this;
    }

    /**
     * The strategy used to convert the gift card's balance when it's redeemed in a currency other than the one it was issued in.
     */
    public function setCrossCurrencyRedemptionStrategy($shopifyGiftCardCrossCurrencyRedemptionStrategy): static
    {
        $this->crossCurrencyRedemptionStrategy = new RawObject($shopifyGiftCardCrossCurrencyRedemptionStrategy);

        return $this;
    }

    /**
     * The recipient attributes of the gift card.
     */
    public function setRecipientAttributes(ShopifyGiftCardRecipientInputInputObject $shopifyGiftCardRecipientInputInputObject): static
    {
        $this->recipientAttributes = $shopifyGiftCardRecipientInputInputObject;

        return $this;
    }

    /**
     * The suffix of the Liquid template that's used to render the gift card online.
     * For example, if the value is `birthday`, then the gift card is rendered using the template `gift_card.birthday.liquid`.
     */
    public function setTemplateSuffix($templateSuffix): static
    {
        $this->templateSuffix = $templateSuffix;

        return $this;
    }
}
