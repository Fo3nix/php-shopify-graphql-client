<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyCustomerCreditCardBillingAddress;

/**
 * Represents a card instrument for customer payment method.
 */
class ShopifyCustomerCreditCard
{
    protected $billingAddress;
    protected $brand;
    protected $expiresSoon;
    protected $expiryMonth;
    protected $expiryYear;
    protected $firstDigits;
    protected $isRevocable;
    protected $lastDigits;
    protected $maskedNumber;
    protected $name;
    protected $source;
    protected $virtualLastDigits;

    
    /**
     * The billing address of the card.
     *
     * @return ShopifyCustomerCreditCardBillingAddress
     */
    public function getBillingAddress(): ?ShopifyCustomerCreditCardBillingAddress
    {
        return $this->billingAddress;
    }

    
    /**
     * The brand of the card.
     *
     * @return string
     */
    public function getBrand(): ?string
    {
        return $this->brand;
    }

    
    /**
     * Whether the card is about to expire.
     *
     * @return bool
     */
    public function getExpiresSoon(): ?bool
    {
        return $this->expiresSoon;
    }

    
    /**
     * The expiry month of the card.
     *
     * @return int
     */
    public function getExpiryMonth(): ?int
    {
        return $this->expiryMonth;
    }

    
    /**
     * The expiry year of the card.
     *
     * @return int
     */
    public function getExpiryYear(): ?int
    {
        return $this->expiryYear;
    }

    
    /**
     * The card's BIN number.
     *
     * @return string
     */
    public function getFirstDigits(): ?string
    {
        return $this->firstDigits;
    }

    
    /**
     * The payment method can be revoked if there are no active subscription contracts.
     *
     * @return bool
     */
    public function getIsRevocable(): ?bool
    {
        return $this->isRevocable;
    }

    
    /**
     * The last 4 digits of the card.
     *
     * @return string
     */
    public function getLastDigits(): ?string
    {
        return $this->lastDigits;
    }

    
    /**
     * The masked card number with only the last 4 digits displayed.
     *
     * @return string
     */
    public function getMaskedNumber(): ?string
    {
        return $this->maskedNumber;
    }

    
    /**
     * The name of the card holder.
     *
     * @return string
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    
    /**
     * The source of the card if coming from a wallet such as Apple Pay.
     *
     * @return string
     */
    public function getSource(): ?string
    {
        return $this->source;
    }

    
    /**
     * The last 4 digits of the Device Account Number.
     *
     * @return string
     */
    public function getVirtualLastDigits(): ?string
    {
        return $this->virtualLastDigits;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['billingAddress']) && $data['billingAddress'] !== null) {
                $instance->billingAddress = ShopifyCustomerCreditCardBillingAddress::fromArray($data['billingAddress']);
            }
            if (isset($data['brand']) && $data['brand'] !== null) {
                $instance->brand = $data['brand'];
            }
            if (isset($data['expiresSoon']) && $data['expiresSoon'] !== null) {
                $instance->expiresSoon = $data['expiresSoon'];
            }
            if (isset($data['expiryMonth']) && $data['expiryMonth'] !== null) {
                $instance->expiryMonth = $data['expiryMonth'];
            }
            if (isset($data['expiryYear']) && $data['expiryYear'] !== null) {
                $instance->expiryYear = $data['expiryYear'];
            }
            if (isset($data['firstDigits']) && $data['firstDigits'] !== null) {
                $instance->firstDigits = $data['firstDigits'];
            }
            if (isset($data['isRevocable']) && $data['isRevocable'] !== null) {
                $instance->isRevocable = $data['isRevocable'];
            }
            if (isset($data['lastDigits']) && $data['lastDigits'] !== null) {
                $instance->lastDigits = $data['lastDigits'];
            }
            if (isset($data['maskedNumber']) && $data['maskedNumber'] !== null) {
                $instance->maskedNumber = $data['maskedNumber'];
            }
            if (isset($data['name']) && $data['name'] !== null) {
                $instance->name = $data['name'];
            }
            if (isset($data['source']) && $data['source'] !== null) {
                $instance->source = $data['source'];
            }
            if (isset($data['virtualLastDigits']) && $data['virtualLastDigits'] !== null) {
                $instance->virtualLastDigits = $data['virtualLastDigits'];
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
            if ($this->billingAddress !== null) {
                $data['billingAddress'] = $this->billingAddress->asArray();
            }
            if ($this->brand !== null) {
                $data['brand'] = $this->brand;
            }
            if ($this->expiresSoon !== null) {
                $data['expiresSoon'] = $this->expiresSoon;
            }
            if ($this->expiryMonth !== null) {
                $data['expiryMonth'] = $this->expiryMonth;
            }
            if ($this->expiryYear !== null) {
                $data['expiryYear'] = $this->expiryYear;
            }
            if ($this->firstDigits !== null) {
                $data['firstDigits'] = $this->firstDigits;
            }
            if ($this->isRevocable !== null) {
                $data['isRevocable'] = $this->isRevocable;
            }
            if ($this->lastDigits !== null) {
                $data['lastDigits'] = $this->lastDigits;
            }
            if ($this->maskedNumber !== null) {
                $data['maskedNumber'] = $this->maskedNumber;
            }
            if ($this->name !== null) {
                $data['name'] = $this->name;
            }
            if ($this->source !== null) {
                $data['source'] = $this->source;
            }
            if ($this->virtualLastDigits !== null) {
                $data['virtualLastDigits'] = $this->virtualLastDigits;
            }
            return $data;
        }
}
