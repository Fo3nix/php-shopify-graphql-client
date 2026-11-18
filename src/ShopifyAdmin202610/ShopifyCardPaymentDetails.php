<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use Carbon\Carbon;

/**
 * Credit card payment information captured during a transaction. Includes cardholder details, card metadata, verification response codes, and the [`DigitalWallet`](https://shopify.dev/docs/api/admin-graphql/latest/enums/DigitalWallet#valid-values) when used.
 */
class ShopifyCardPaymentDetails implements ShopifyBasePaymentDetails
{
    protected $avsResultCode;
    protected $bin;
    protected $company;
    protected $createdAt;
    protected $cvvResultCode;
    protected $expirationMonth;
    protected $expirationYear;
    protected $name;
    protected $number;
    protected $paymentMethodName;
    protected $wallet;

    
    /**
     * The response code from the address verification system (AVS). The code is always a single letter.
     *
     * @return string
     */
    public function getAvsResultCode(): ?string
    {
        return $this->avsResultCode;
    }

    
    /**
     * The issuer identification number (IIN), formerly known as bank identification number (BIN) of the customer's credit card. This is made up of the first few digits of the credit card number.
     *
     * @return string
     */
    public function getBin(): ?string
    {
        return $this->bin;
    }

    
    /**
     * The name of the company that issued the customer's credit card.
     *
     * @return string
     */
    public function getCompany(): ?string
    {
        return $this->company;
    }

    
    /**
     * The date and time when the card payment details were created.
     *
     * @return Carbon
     */
    public function getCreatedAt(): ?Carbon
    {
        return $this->createdAt;
    }

    
    /**
     * The response code from the credit card company indicating whether the customer entered the card security code, or card verification value, correctly. The code is a single letter or empty string.
     *
     * @return string
     */
    public function getCvvResultCode(): ?string
    {
        return $this->cvvResultCode;
    }

    
    /**
     * The month in which the used credit card expires.
     *
     * @return int
     */
    public function getExpirationMonth(): ?int
    {
        return $this->expirationMonth;
    }

    
    /**
     * The year in which the used credit card expires.
     *
     * @return int
     */
    public function getExpirationYear(): ?int
    {
        return $this->expirationYear;
    }

    
    /**
     * The holder of the credit card.
     *
     * @return string
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    
    /**
     * The customer's credit card number, with most of the leading digits redacted.
     *
     * @return string
     */
    public function getNumber(): ?string
    {
        return $this->number;
    }

    
    /**
     * The name of payment method used by the buyer.
     *
     * @return string
     */
    public function getPaymentMethodName(): ?string
    {
        return $this->paymentMethodName;
    }

    
    /**
     * Digital wallet used for the payment.
     *
     * @return string A ShopifyDigitalWalletEnumObject value
     */
    public function getWallet(): ?string
    {
        return $this->wallet;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['avsResultCode']) && $data['avsResultCode'] !== null) {
                $instance->avsResultCode = $data['avsResultCode'];
            }
            if (isset($data['bin']) && $data['bin'] !== null) {
                $instance->bin = $data['bin'];
            }
            if (isset($data['company']) && $data['company'] !== null) {
                $instance->company = $data['company'];
            }
            if (isset($data['createdAt']) && $data['createdAt'] !== null) {
                $instance->createdAt = new Carbon($data['createdAt']);
            }
            if (isset($data['cvvResultCode']) && $data['cvvResultCode'] !== null) {
                $instance->cvvResultCode = $data['cvvResultCode'];
            }
            if (isset($data['expirationMonth']) && $data['expirationMonth'] !== null) {
                $instance->expirationMonth = $data['expirationMonth'];
            }
            if (isset($data['expirationYear']) && $data['expirationYear'] !== null) {
                $instance->expirationYear = $data['expirationYear'];
            }
            if (isset($data['name']) && $data['name'] !== null) {
                $instance->name = $data['name'];
            }
            if (isset($data['number']) && $data['number'] !== null) {
                $instance->number = $data['number'];
            }
            if (isset($data['paymentMethodName']) && $data['paymentMethodName'] !== null) {
                $instance->paymentMethodName = $data['paymentMethodName'];
            }
            if (isset($data['wallet']) && $data['wallet'] !== null) {
                $instance->wallet = $data['wallet'];
            }
            return $instance;
        }

        /**
         * @param string $json
         * @return self
         */
        public static function fromJson(string $json): self
        {
            $data = json_decode($json, true);
            if ($data === null && json_last_error() !== JSON_ERROR_NONE) {
                throw new \InvalidArgumentException('Invalid JSON provided to fromJson method: ' . json_last_error_msg());
            }
            return self::fromArray($data);
        }

        /**
         * Converts this object to an array.
         * @return array
         */
        public function asArray(): array
        {
            $data = [];
            if ($this->avsResultCode !== null) {
                $data['avsResultCode'] = $this->avsResultCode;
            }
            if ($this->bin !== null) {
                $data['bin'] = $this->bin;
            }
            if ($this->company !== null) {
                $data['company'] = $this->company;
            }
            if ($this->createdAt !== null) {
                $data['createdAt'] = $this->createdAt->toIso8601String();
            }
            if ($this->cvvResultCode !== null) {
                $data['cvvResultCode'] = $this->cvvResultCode;
            }
            if ($this->expirationMonth !== null) {
                $data['expirationMonth'] = $this->expirationMonth;
            }
            if ($this->expirationYear !== null) {
                $data['expirationYear'] = $this->expirationYear;
            }
            if ($this->name !== null) {
                $data['name'] = $this->name;
            }
            if ($this->number !== null) {
                $data['number'] = $this->number;
            }
            if ($this->paymentMethodName !== null) {
                $data['paymentMethodName'] = $this->paymentMethodName;
            }
            if ($this->wallet !== null) {
                $data['wallet'] = $this->wallet;
            }
            return $data;
        }
}
