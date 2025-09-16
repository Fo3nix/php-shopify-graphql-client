<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\MailingAddress;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\CustomerEmailAddress;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\CustomerPhoneNumber;

class CustomerMergePreviewAlternateFields
{
    protected $defaultAddress;
    protected $email;
    protected $firstName;
    protected $lastName;
    protected $phoneNumber;

    
    /**
     * @return MailingAddress
     */
    public function getDefaultAddress()
    {
        return $this->defaultAddress;
    }

    
    /**
     * @return CustomerEmailAddress
     */
    public function getEmail()
    {
        return $this->email;
    }

    
    /**
     * @return string
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    
    /**
     * @return string
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    
    /**
     * @return CustomerPhoneNumber
     */
    public function getPhoneNumber()
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
                $instance->defaultAddress = MailingAddress::fromArray($data['defaultAddress']);
            }
            if (isset($data['email']) && $data['email'] !== null) {
                $instance->email = CustomerEmailAddress::fromArray($data['email']);
            }
            if (isset($data['firstName']) && $data['firstName'] !== null) {
                $instance->firstName = $data['firstName'];
            }
            if (isset($data['lastName']) && $data['lastName'] !== null) {
                $instance->lastName = $data['lastName'];
            }
            if (isset($data['phoneNumber']) && $data['phoneNumber'] !== null) {
                $instance->phoneNumber = CustomerPhoneNumber::fromArray($data['phoneNumber']);
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
