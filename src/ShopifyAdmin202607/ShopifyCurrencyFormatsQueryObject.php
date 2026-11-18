<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * Currency formats configured for the merchant. These formats are available to use within Liquid.
 */
class ShopifyCurrencyFormatsQueryObject extends QueryObject
{
    const OBJECT_NAME = "CurrencyFormats";

    /**
     * Money without currency in HTML.
     */
    public function selectMoneyFormat(): static
    {
        $this->selectField("moneyFormat");

        return $this;
    }

    /**
     * Money without currency in emails.
     */
    public function selectMoneyInEmailsFormat(): static
    {
        $this->selectField("moneyInEmailsFormat");

        return $this;
    }

    /**
     * Money with currency in HTML.
     */
    public function selectMoneyWithCurrencyFormat(): static
    {
        $this->selectField("moneyWithCurrencyFormat");

        return $this;
    }

    /**
     * Money with currency in emails.
     */
    public function selectMoneyWithCurrencyInEmailsFormat(): static
    {
        $this->selectField("moneyWithCurrencyInEmailsFormat");

        return $this;
    }
}
