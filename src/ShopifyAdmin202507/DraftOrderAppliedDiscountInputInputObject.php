<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\InputObject;

class DraftOrderAppliedDiscountInputInputObject extends InputObject
{
    protected $amountWithCurrency;
    protected $description;
    protected $title;
    protected $value;
    protected $valueType;

    public function setAmountWithCurrency(MoneyInputInputObject $moneyInputInputObject)
    {
        $this->amountWithCurrency = $moneyInputInputObject;

        return $this;
    }

    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    public function setValue($value)
    {
        $this->value = $value;

        return $this;
    }

    public function setValueType($valueType)
    {
        $this->valueType = $valueType;

        return $this;
    }
}
