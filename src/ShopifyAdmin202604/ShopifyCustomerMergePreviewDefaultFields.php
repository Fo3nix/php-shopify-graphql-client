<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyMailingAddressConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyMailingAddress;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyDiscountNodeConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyDraftOrderConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyCustomerEmailAddress;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyGiftCardConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyOrderConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyCustomerPhoneNumber;

/**
 * The fields that will be kept as part of a customer merge preview.
 */
class ShopifyCustomerMergePreviewDefaultFields
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
     * The merged addresses resulting from a customer merge.
     *
     * @return ShopifyMailingAddressConnection
     */
    public function getAddresses(): ?ShopifyMailingAddressConnection
    {
        return $this->addresses;
    }

    
    /**
     * The default address resulting from a customer merge.
     *
     * @return ShopifyMailingAddress
     */
    public function getDefaultAddress(): ?ShopifyMailingAddress
    {
        return $this->defaultAddress;
    }

    
    /**
     * The total number of customer-specific discounts resulting from a customer merge.
     *
     * @return string
     */
    public function getDiscountNodeCount(): mixed
    {
        return $this->discountNodeCount;
    }

    
    /**
     * The merged customer-specific discounts resulting from a customer merge.
     *
     * @return ShopifyDiscountNodeConnection
     */
    public function getDiscountNodes(): ?ShopifyDiscountNodeConnection
    {
        return $this->discountNodes;
    }

    
    /**
     * The full name of the customer, based on the values for `first_name` and `last_name`. If `first_name` and `last_name` aren't available, then this field falls back to the customer's email address. If the customer's email isn't available, then this field falls back to the customer's phone number.
     *
     * @return string
     */
    public function getDisplayName(): ?string
    {
        return $this->displayName;
    }

    
    /**
     * The total number of merged draft orders.
     *
     * @return string
     */
    public function getDraftOrderCount(): mixed
    {
        return $this->draftOrderCount;
    }

    
    /**
     * The merged draft orders resulting from a customer merge.
     *
     * @return ShopifyDraftOrderConnection
     */
    public function getDraftOrders(): ?ShopifyDraftOrderConnection
    {
        return $this->draftOrders;
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
     * The first name resulting from a customer merge.
     *
     * @return string
     */
    public function getFirstName(): ?string
    {
        return $this->firstName;
    }

    
    /**
     * The total number of merged gift cards.
     *
     * @return string
     */
    public function getGiftCardCount(): mixed
    {
        return $this->giftCardCount;
    }

    
    /**
     * The merged gift cards resulting from a customer merge.
     *
     * @return ShopifyGiftCardConnection
     */
    public function getGiftCards(): ?ShopifyGiftCardConnection
    {
        return $this->giftCards;
    }

    
    /**
     * The last name resulting from a customer merge.
     *
     * @return string
     */
    public function getLastName(): ?string
    {
        return $this->lastName;
    }

    
    /**
     * The total number of merged metafields.
     *
     * @return string
     */
    public function getMetafieldCount(): mixed
    {
        return $this->metafieldCount;
    }

    
    /**
     * The merged note resulting from a customer merge.
     *
     * @return string
     */
    public function getNote(): ?string
    {
        return $this->note;
    }

    
    /**
     * The total number of merged orders.
     *
     * @return string
     */
    public function getOrderCount(): mixed
    {
        return $this->orderCount;
    }

    
    /**
     * The merged orders resulting from a customer merge.
     *
     * @return ShopifyOrderConnection
     */
    public function getOrders(): ?ShopifyOrderConnection
    {
        return $this->orders;
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
     * The merged tags resulting from a customer merge.
     *
     * @return string[]
     */
    public function getTags(): ?array
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
                $instance->addresses = ShopifyMailingAddressConnection::fromArray($data['addresses']);
            }
            if (isset($data['defaultAddress']) && $data['defaultAddress'] !== null) {
                $instance->defaultAddress = ShopifyMailingAddress::fromArray($data['defaultAddress']);
            }
            if (isset($data['discountNodeCount']) && $data['discountNodeCount'] !== null) {
                $instance->discountNodeCount = $data['discountNodeCount'];
            }
            if (isset($data['discountNodes']) && $data['discountNodes'] !== null) {
                $instance->discountNodes = ShopifyDiscountNodeConnection::fromArray($data['discountNodes']);
            }
            if (isset($data['displayName']) && $data['displayName'] !== null) {
                $instance->displayName = $data['displayName'];
            }
            if (isset($data['draftOrderCount']) && $data['draftOrderCount'] !== null) {
                $instance->draftOrderCount = $data['draftOrderCount'];
            }
            if (isset($data['draftOrders']) && $data['draftOrders'] !== null) {
                $instance->draftOrders = ShopifyDraftOrderConnection::fromArray($data['draftOrders']);
            }
            if (isset($data['email']) && $data['email'] !== null) {
                $instance->email = ShopifyCustomerEmailAddress::fromArray($data['email']);
            }
            if (isset($data['firstName']) && $data['firstName'] !== null) {
                $instance->firstName = $data['firstName'];
            }
            if (isset($data['giftCardCount']) && $data['giftCardCount'] !== null) {
                $instance->giftCardCount = $data['giftCardCount'];
            }
            if (isset($data['giftCards']) && $data['giftCards'] !== null) {
                $instance->giftCards = ShopifyGiftCardConnection::fromArray($data['giftCards']);
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
                $instance->orders = ShopifyOrderConnection::fromArray($data['orders']);
            }
            if (isset($data['phoneNumber']) && $data['phoneNumber'] !== null) {
                $instance->phoneNumber = ShopifyCustomerPhoneNumber::fromArray($data['phoneNumber']);
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
