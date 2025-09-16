<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\MoneyV2;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\MailingAddress;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\CustomerEmailAddress;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\CustomerPhoneNumber;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\CustomerMergeable;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\Metafield;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\MetafieldConnection;

class CustomerSegmentMember
{
    protected $amountSpent;
    protected $defaultAddress;
    protected $defaultEmailAddress;
    protected $defaultPhoneNumber;
    protected $displayName;
    protected $firstName;
    protected $id;
    protected $lastName;
    protected $lastOrderId;
    protected $mergeable;
    protected $metafield;
    protected $metafields;
    protected $note;
    protected $numberOfOrders;

    
    /**
     * @return MoneyV2
     */
    public function getAmountSpent()
    {
        return $this->amountSpent;
    }

    
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
    public function getDefaultEmailAddress()
    {
        return $this->defaultEmailAddress;
    }

    
    /**
     * @return CustomerPhoneNumber
     */
    public function getDefaultPhoneNumber()
    {
        return $this->defaultPhoneNumber;
    }

    
    /**
     * @return string
     */
    public function getDisplayName()
    {
        return $this->displayName;
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
    public function getId()
    {
        return $this->id;
    }

    
    /**
     * @return string
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    
    /**
     * @return string
     */
    public function getLastOrderId()
    {
        return $this->lastOrderId;
    }

    
    /**
     * @return CustomerMergeable
     */
    public function getMergeable()
    {
        return $this->mergeable;
    }

    
    /**
     * @return Metafield
     */
    public function getMetafield()
    {
        return $this->metafield;
    }

    
    /**
     * @return MetafieldConnection
     */
    public function getMetafields()
    {
        return $this->metafields;
    }

    
    /**
     * @return string
     */
    public function getNote()
    {
        return $this->note;
    }

    
    /**
     * @return string
     */
    public function getNumberOfOrders()
    {
        return $this->numberOfOrders;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['amountSpent']) && $data['amountSpent'] !== null) {
                $instance->amountSpent = MoneyV2::fromArray($data['amountSpent']);
            }
            if (isset($data['defaultAddress']) && $data['defaultAddress'] !== null) {
                $instance->defaultAddress = MailingAddress::fromArray($data['defaultAddress']);
            }
            if (isset($data['defaultEmailAddress']) && $data['defaultEmailAddress'] !== null) {
                $instance->defaultEmailAddress = CustomerEmailAddress::fromArray($data['defaultEmailAddress']);
            }
            if (isset($data['defaultPhoneNumber']) && $data['defaultPhoneNumber'] !== null) {
                $instance->defaultPhoneNumber = CustomerPhoneNumber::fromArray($data['defaultPhoneNumber']);
            }
            if (isset($data['displayName']) && $data['displayName'] !== null) {
                $instance->displayName = $data['displayName'];
            }
            if (isset($data['firstName']) && $data['firstName'] !== null) {
                $instance->firstName = $data['firstName'];
            }
            if (isset($data['id']) && $data['id'] !== null) {
                $instance->id = $data['id'];
            }
            if (isset($data['lastName']) && $data['lastName'] !== null) {
                $instance->lastName = $data['lastName'];
            }
            if (isset($data['lastOrderId']) && $data['lastOrderId'] !== null) {
                $instance->lastOrderId = $data['lastOrderId'];
            }
            if (isset($data['mergeable']) && $data['mergeable'] !== null) {
                $instance->mergeable = CustomerMergeable::fromArray($data['mergeable']);
            }
            if (isset($data['metafield']) && $data['metafield'] !== null) {
                $instance->metafield = Metafield::fromArray($data['metafield']);
            }
            if (isset($data['metafields']) && $data['metafields'] !== null) {
                $instance->metafields = MetafieldConnection::fromArray($data['metafields']);
            }
            if (isset($data['note']) && $data['note'] !== null) {
                $instance->note = $data['note'];
            }
            if (isset($data['numberOfOrders']) && $data['numberOfOrders'] !== null) {
                $instance->numberOfOrders = $data['numberOfOrders'];
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
            if ($this->amountSpent !== null) {
                $data['amountSpent'] = $this->amountSpent->asArray();
            }
            if ($this->defaultAddress !== null) {
                $data['defaultAddress'] = $this->defaultAddress->asArray();
            }
            if ($this->defaultEmailAddress !== null) {
                $data['defaultEmailAddress'] = $this->defaultEmailAddress->asArray();
            }
            if ($this->defaultPhoneNumber !== null) {
                $data['defaultPhoneNumber'] = $this->defaultPhoneNumber->asArray();
            }
            if ($this->displayName !== null) {
                $data['displayName'] = $this->displayName;
            }
            if ($this->firstName !== null) {
                $data['firstName'] = $this->firstName;
            }
            if ($this->id !== null) {
                $data['id'] = $this->id;
            }
            if ($this->lastName !== null) {
                $data['lastName'] = $this->lastName;
            }
            if ($this->lastOrderId !== null) {
                $data['lastOrderId'] = $this->lastOrderId;
            }
            if ($this->mergeable !== null) {
                $data['mergeable'] = $this->mergeable->asArray();
            }
            if ($this->metafield !== null) {
                $data['metafield'] = $this->metafield->asArray();
            }
            if ($this->metafields !== null) {
                $data['metafields'] = $this->metafields->asArray();
            }
            if ($this->note !== null) {
                $data['note'] = $this->note;
            }
            if ($this->numberOfOrders !== null) {
                $data['numberOfOrders'] = $this->numberOfOrders;
            }
            return $data;
        }
}
