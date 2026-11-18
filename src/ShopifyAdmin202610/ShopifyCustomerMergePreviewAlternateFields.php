<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyMailingAddress;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyCustomerEmailAddress;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyCustomerPhoneNumber;

/**
 * The fields that can be used to override the default fields.
 */
class ShopifyCustomerMergePreviewAlternateFields
{
    protected $defaultAddress;
    protected $email;
    protected $firstName;
    protected $lastName;
    protected $phoneNumber;

    
    /**
     * The default address of a customer.
     *
     * @return ShopifyMailingAddress
     */
    public function getDefaultAddress(): ?ShopifyMailingAddress
    {
        return $this->defaultAddress;
    }

    
    /**
     * The email state of a customer.
     *
     * @return ShopifyCustomerEmailAddress
     */
    public function getEmail(): ?ShopifyCustomerEmailAddress
    {
        return $this->email;
    }

    
    /**
     * The first name of a customer.
     *
     * @return string
     */
    public function getFirstName(): ?string
    {
        return $this->firstName;
    }

    
    /**
     * The last name of a customer.
     *
     * @return string
     */
    public function getLastName(): ?string
    {
        return $this->lastName;
    }

    
    /**
     * The phone number state of a customer.
     *
     * @return ShopifyCustomerPhoneNumber
     */
    public function getPhoneNumber(): ?ShopifyCustomerPhoneNumber
    {
        return $this->phoneNumber;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['defaultAddress']) && $data['defaultAddress'] !== null) {
                $instance->defaultAddress = ShopifyMailingAddress::fromArray($data['defaultAddress']);
            }
            if (isset($data['email']) && $data['email'] !== null) {
                $instance->email = ShopifyCustomerEmailAddress::fromArray($data['email']);
            }
            if (isset($data['firstName']) && $data['firstName'] !== null) {
                $instance->firstName = $data['firstName'];
            }
            if (isset($data['lastName']) && $data['lastName'] !== null) {
                $instance->lastName = $data['lastName'];
            }
            if (isset($data['phoneNumber']) && $data['phoneNumber'] !== null) {
                $instance->phoneNumber = ShopifyCustomerPhoneNumber::fromArray($data['phoneNumber']);
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
            if ($this->defaultAddress !== null) {
                $data['defaultAddress'] = $this->defaultAddress->asArray();
            }
            if ($this->email !== null) {
                $data['email'] = $this->email->asArray();
            }
            if ($this->firstName !== null) {
                $data['firstName'] = $this->firstName;
            }
            if ($this->lastName !== null) {
                $data['lastName'] = $this->lastName;
            }
            if ($this->phoneNumber !== null) {
                $data['phoneNumber'] = $this->phoneNumber->asArray();
            }
            return $data;
        }
}
