<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields for a gift card debit transaction.
 */
class ShopifyGiftCardDebitInputInputObject extends InputObject
{
    const REQUIRED = ["debitAmount"];

    protected $debitAmount;
    protected $note;
    protected $processedAt;

    /**
     * The amount to debit the gift card.
     */
    public function setDebitAmount(ShopifyMoneyInputInputObject $shopifyMoneyInputInputObject): static
    {
        $this->debitAmount = $shopifyMoneyInputInputObject;

        return $this;
    }

    /**
     * A note about the debit.
     */
    public function setNote($note): static
    {
        $this->note = $note;

        return $this;
    }

    /**
     * The date and time the debit was processed. Defaults to current date and time.
     */
    public function setProcessedAt($processedAt): static
    {
        $this->processedAt = $processedAt;

        return $this;
    }
}
