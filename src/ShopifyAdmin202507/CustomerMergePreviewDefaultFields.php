<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\MailingAddressConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\MailingAddress;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\DiscountNodeConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\DraftOrderConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\CustomerEmailAddress;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\GiftCardConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\OrderConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\CustomerPhoneNumber;

class CustomerMergePreviewDefaultFields
{
    protected $addresses;
    protected $defaultAddress;
    protected $discountNodeCount;
    protected $discountNodes;
    protected $displayName;
    protected $draftOrderCount;
    protected $draftOrders;
    protected $email;
    protected $firstName;
    protected $giftCardCount;
    protected $giftCards;
    protected $lastName;
    protected $metafieldCount;
    protected $note;
    protected $orderCount;
    protected $orders;
    protected $phoneNumber;
    protected $tags;

    
    /**
     * @return MailingAddressConnection
     */
    public function getAddresses()
    {
        return $this->addresses;
    }

    
    /**
     * @return MailingAddress
     */
    public function getDefaultAddress()
    {
        return $this->defaultAddress;
    }

    
    /**
     * @return string
     */
    public function getDiscountNodeCount()
    {
        return $this->discountNodeCount;
    }

    
    /**
     * @return DiscountNodeConnection
     */
    public function getDiscountNodes()
    {
        return $this->discountNodes;
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
    public function getDraftOrderCount()
    {
        return $this->draftOrderCount;
    }

    
    /**
     * @return DraftOrderConnection
     */
    public function getDraftOrders()
    {
        return $this->draftOrders;
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
    public function getGiftCardCount()
    {
        return $this->giftCardCount;
    }

    
    /**
     * @return GiftCardConnection
     */
    public function getGiftCards()
    {
        return $this->giftCards;
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
    public function getMetafieldCount()
    {
        return $this->metafieldCount;
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
    public function getOrderCount()
    {
        return $this->orderCount;
    }

    
    /**
     * @return OrderConnection
     */
    public function getOrders()
    {
        return $this->orders;
    }

    
    /**
     * @return CustomerPhoneNumber
     */
    public function getPhoneNumber()
    {
        return $this->phoneNumber;
    }

    
    /**
     * @return string[]
     */
    public function getTags()
    {
        return $this->tags;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['addresses']) && $data['addresses'] !== null) {
                $instance->addresses = MailingAddressConnection::fromArray($data['addresses']);
            }
            if (isset($data['defaultAddress']) && $data['defaultAddress'] !== null) {
                $instance->defaultAddress = MailingAddress::fromArray($data['defaultAddress']);
            }
            if (isset($data['discountNodeCount']) && $data['discountNodeCount'] !== null) {
                $instance->discountNodeCount = $data['discountNodeCount'];
            }
            if (isset($data['discountNodes']) && $data['discountNodes'] !== null) {
                $instance->discountNodes = DiscountNodeConnection::fromArray($data['discountNodes']);
            }
            if (isset($data['displayName']) && $data['displayName'] !== null) {
                $instance->displayName = $data['displayName'];
            }
            if (isset($data['draftOrderCount']) && $data['draftOrderCount'] !== null) {
                $instance->draftOrderCount = $data['draftOrderCount'];
            }
            if (isset($data['draftOrders']) && $data['draftOrders'] !== null) {
                $instance->draftOrders = DraftOrderConnection::fromArray($data['draftOrders']);
            }
            if (isset($data['email']) && $data['email'] !== null) {
                $instance->email = CustomerEmailAddress::fromArray($data['email']);
            }
            if (isset($data['firstName']) && $data['firstName'] !== null) {
                $instance->firstName = $data['firstName'];
            }
            if (isset($data['giftCardCount']) && $data['giftCardCount'] !== null) {
                $instance->giftCardCount = $data['giftCardCount'];
            }
            if (isset($data['giftCards']) && $data['giftCards'] !== null) {
                $instance->giftCards = GiftCardConnection::fromArray($data['giftCards']);
            }
            if (isset($data['lastName']) && $data['lastName'] !== null) {
                $instance->lastName = $data['lastName'];
            }
            if (isset($data['metafieldCount']) && $data['metafieldCount'] !== null) {
                $instance->metafieldCount = $data['metafieldCount'];
            }
            if (isset($data['note']) && $data['note'] !== null) {
                $instance->note = $data['note'];
            }
            if (isset($data['orderCount']) && $data['orderCount'] !== null) {
                $instance->orderCount = $data['orderCount'];
            }
            if (isset($data['orders']) && $data['orders'] !== null) {
                $instance->orders = OrderConnection::fromArray($data['orders']);
            }
            if (isset($data['phoneNumber']) && $data['phoneNumber'] !== null) {
                $instance->phoneNumber = CustomerPhoneNumber::fromArray($data['phoneNumber']);
            }
            if (isset($data['tags']) && $data['tags'] !== null) {
                $instance->tags = $data['tags'];
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
            if ($this->addresses !== null) {
                $data['addresses'] = $this->addresses->asArray();
            }
            if ($this->defaultAddress !== null) {
                $data['defaultAddress'] = $this->defaultAddress->asArray();
            }
            if ($this->discountNodeCount !== null) {
                $data['discountNodeCount'] = $this->discountNodeCount;
            }
            if ($this->discountNodes !== null) {
                $data['discountNodes'] = $this->discountNodes->asArray();
            }
            if ($this->displayName !== null) {
                $data['displayName'] = $this->displayName;
            }
            if ($this->draftOrderCount !== null) {
                $data['draftOrderCount'] = $this->draftOrderCount;
            }
            if ($this->draftOrders !== null) {
                $data['draftOrders'] = $this->draftOrders->asArray();
            }
            if ($this->email !== null) {
                $data['email'] = $this->email->asArray();
            }
            if ($this->firstName !== null) {
                $data['firstName'] = $this->firstName;
            }
            if ($this->giftCardCount !== null) {
                $data['giftCardCount'] = $this->giftCardCount;
            }
            if ($this->giftCards !== null) {
                $data['giftCards'] = $this->giftCards->asArray();
            }
            if ($this->lastName !== null) {
                $data['lastName'] = $this->lastName;
            }
            if ($this->metafieldCount !== null) {
                $data['metafieldCount'] = $this->metafieldCount;
            }
            if ($this->note !== null) {
                $data['note'] = $this->note;
            }
            if ($this->orderCount !== null) {
                $data['orderCount'] = $this->orderCount;
            }
            if ($this->orders !== null) {
                $data['orders'] = $this->orders->asArray();
            }
            if ($this->phoneNumber !== null) {
                $data['phoneNumber'] = $this->phoneNumber->asArray();
            }
            if ($this->tags !== null) {
                $data['tags'] = $this->tags;
            }
            return $data;
        }
}
