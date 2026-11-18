<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields to issue a gift card.
 */
class ShopifyGiftCardCreateInputInputObject extends InputObject
{
    const REQUIRED = ["initialValue"];

    protected $initialValue;
    protected $code;
    protected $customerId;
    protected $expiresOn;
    protected $note;
    protected $recipientAttributes;
    protected $templateSuffix;

    /**
     * The initial value of the gift card.
     */
    public function setInitialValue($initialValue): static
    {
        $this->initialValue = $initialValue;

        return $this;
    }

    /**
     * The gift card's code. It must be 8-20 characters long and contain only letters(a-z) and numbers(0-9).
     * It isn't case sensitive. If not provided, then a random code will be generated.
     */
    public function setCode($code): static
    {
        $this->code = $code;

        return $this;
    }

    /**
     * The ID of the customer the gift card is issued to, as opposed to the gift recipient. Requires `write_customers` access_scope.
     */
    public function setCustomerId($customerId): static
    {
        $this->customerId = $customerId;

        return $this;
    }

    /**
     * The date at which the gift card will expire. If not provided, then the gift card will never expire.
     */
    public function setExpiresOn($expiresOn): static
    {
        $this->expiresOn = $expiresOn;

        return $this;
    }

    /**
     * The note associated with the gift card, which isn't visible to the customer.
     */
    public function setNote($note): static
    {
        $this->note = $note;

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
     * If not provided, then the default `gift_card.liquid` template is used.
     */
    public function setTemplateSuffix($templateSuffix): static
    {
        $this->templateSuffix = $templateSuffix;

        return $this;
    }
}
