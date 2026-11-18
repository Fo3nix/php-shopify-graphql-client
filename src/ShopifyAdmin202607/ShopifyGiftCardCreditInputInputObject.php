<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields for a gift card credit transaction.
 */
class ShopifyGiftCardCreditInputInputObject extends InputObject
{
    const REQUIRED = ["creditAmount"];

    protected $creditAmount;
    protected $note;
    protected $processedAt;

    /**
     * The amount to credit the gift card.
     */
    public function setCreditAmount(ShopifyMoneyInputInputObject $shopifyMoneyInputInputObject): static
    {
        $this->creditAmount = $shopifyMoneyInputInputObject;

        return $this;
    }

    /**
     * A note about the credit.
     */
    public function setNote($note): static
    {
        $this->note = $note;

        return $this;
    }

    /**
     * The date and time the credit was processed. Defaults to current date and time.
     */
    public function setProcessedAt($processedAt): static
    {
        $this->processedAt = $processedAt;

        return $this;
    }
}
