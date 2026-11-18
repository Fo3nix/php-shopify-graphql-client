<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyMoneyV2;
use Carbon\Carbon;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyCustomer;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyLineItem;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyOrder;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyGiftCardRecipient;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyGiftCardTransactionConnection;

/**
 * A gift card that customers use as a payment method. Stores the initial value, current balance, and expiration date.
 *
 * You can issue gift cards to a specific [`Customer`](https://shopify.dev/docs/api/admin-graphql/latest/objects/Customer) or send them to a [`GiftCardRecipient`](https://shopify.dev/docs/api/admin-graphql/latest/objects/GiftCardRecipient) with a personalized message. The card tracks its transaction history through [`GiftCardCreditTransaction`](https://shopify.dev/docs/api/admin-graphql/latest/objects/GiftCardCreditTransaction) and [`GiftCardDebitTransaction`](https://shopify.dev/docs/api/admin-graphql/latest/objects/GiftCardDebitTransaction) records. You can create and deactivate gift cards using the [`GiftCardCreate`](https://shopify.dev/docs/api/admin-graphql/latest/mutations/giftCardCreate) and [`GiftCardDeactivate`](https://shopify.dev/docs/api/admin-graphql/latest/mutations/giftCardDeactivate) mutations, respectively.
 *
 * > Note: After a gift card is deactivated, it can't be used for further purchases or re-enabled.
 */
class ShopifyGiftCard implements ShopifyNode
{
    protected $balance;
    protected $createdAt;
    protected $crossCurrencyRedemptionStrategy;
    protected $customer;
    protected $deactivatedAt;
    protected $enabled;
    protected $expiresOn;
    protected $id;
    protected $initialValue;
    protected $isRedeemable;
    protected $lastCharacters;
    protected $lineItem;
    protected $maskedCode;
    protected $note;
    protected $order;
    protected $recipientAttributes;
    protected $templateSuffix;
    protected $transactions;
    protected $updatedAt;

    
    /**
     * The gift card's remaining balance.
     *
     * @return ShopifyMoneyV2
     */
    public function getBalance(): ?ShopifyMoneyV2
    {
        return $this->balance;
    }

    
    /**
     * The date and time at which the gift card was created.
     *
     * @return Carbon
     */
    public function getCreatedAt(): ?Carbon
    {
        return $this->createdAt;
    }

    
    /**
     * The strategy used to convert the gift card's balance when it's redeemed in a currency other than the one it was issued in.
     *
     * @return string A ShopifyGiftCardCrossCurrencyRedemptionStrategyEnumObject value
     */
    public function getCrossCurrencyRedemptionStrategy(): ?string
    {
        return $this->crossCurrencyRedemptionStrategy;
    }

    
    /**
     * The customer that the gift card was sold or issued to, as opposed to the gift recipient. This customer can be reassigned.
     *
     * @return ShopifyCustomer
     */
    public function getCustomer(): ?ShopifyCustomer
    {
        return $this->customer;
    }

    
    /**
     * The date and time at which the gift card was deactivated.
     *
     * @return Carbon
     */
    public function getDeactivatedAt(): ?Carbon
    {
        return $this->deactivatedAt;
    }

    
    /**
     * Whether the gift card is enabled.
     *
     * @return bool
     */
    public function getEnabled(): ?bool
    {
        return $this->enabled;
    }

    
    /**
     * The date at which the gift card will expire.
     *
     * @return Carbon
     */
    public function getExpiresOn(): ?Carbon
    {
        return $this->expiresOn;
    }

    
    /**
     * A globally-unique ID.
     *
     * @return string
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    
    /**
     * The initial value of the gift card.
     *
     * @return ShopifyMoneyV2
     */
    public function getInitialValue(): ?ShopifyMoneyV2
    {
        return $this->initialValue;
    }

    
    /**
     * Whether the gift card is redeemable in any active market currency.
     *
     * @return bool
     */
    public function getIsRedeemable(): ?bool
    {
        return $this->isRedeemable;
    }

    
    /**
     * The final four characters of the gift card code.
     *
     * @return string
     */
    public function getLastCharacters(): ?string
    {
        return $this->lastCharacters;
    }

    
    /**
     * The line item from an order that initiated the creation of this gift card. This value is `null` if the gift card was issued manually.
     *
     * @return ShopifyLineItem
     */
    public function getLineItem(): ?ShopifyLineItem
    {
        return $this->lineItem;
    }

    
    /**
     * The gift card code. Everything but the final four characters is masked.
     *
     * @return string
     */
    public function getMaskedCode(): ?string
    {
        return $this->maskedCode;
    }

    
    /**
     * The note associated with the gift card, which isn't visible to the customer.
     *
     * @return string
     */
    public function getNote(): ?string
    {
        return $this->note;
    }

    
    /**
     * The order associated with the gift card. This value is `null` if the gift card was issued manually.
     *
     * @return ShopifyOrder
     */
    public function getOrder(): ?ShopifyOrder
    {
        return $this->order;
    }

    
    /**
     * The recipient of the gift card and the details sent with it: preferred name, message, and send time.
     *
     * @return ShopifyGiftCardRecipient
     */
    public function getRecipientAttributes(): ?ShopifyGiftCardRecipient
    {
        return $this->recipientAttributes;
    }

    
    /**
     * The theme template used to render the gift card online.
     *
     * @return string
     */
    public function getTemplateSuffix(): ?string
    {
        return $this->templateSuffix;
    }

    
    /**
     * The transaction history of the gift card.
     *
     * @return ShopifyGiftCardTransactionConnection
     */
    public function getTransactions(): ?ShopifyGiftCardTransactionConnection
    {
        return $this->transactions;
    }

    
    /**
     * The date and time at which the gift card was updated.
     *
     * @return Carbon
     */
    public function getUpdatedAt(): ?Carbon
    {
        return $this->updatedAt;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['balance']) && $data['balance'] !== null) {
                $instance->balance = ShopifyMoneyV2::fromArray($data['balance']);
            }
            if (isset($data['createdAt']) && $data['createdAt'] !== null) {
                $instance->createdAt = new Carbon($data['createdAt']);
            }
            if (isset($data['crossCurrencyRedemptionStrategy']) && $data['crossCurrencyRedemptionStrategy'] !== null) {
                $instance->crossCurrencyRedemptionStrategy = $data['crossCurrencyRedemptionStrategy'];
            }
            if (isset($data['customer']) && $data['customer'] !== null) {
                $instance->customer = ShopifyCustomer::fromArray($data['customer']);
            }
            if (isset($data['deactivatedAt']) && $data['deactivatedAt'] !== null) {
                $instance->deactivatedAt = new Carbon($data['deactivatedAt']);
            }
            if (isset($data['enabled']) && $data['enabled'] !== null) {
                $instance->enabled = $data['enabled'];
            }
            if (isset($data['expiresOn']) && $data['expiresOn'] !== null) {
                $instance->expiresOn = new Carbon($data['expiresOn']);
            }
            if (isset($data['id']) && $data['id'] !== null) {
                $instance->id = $data['id'];
            }
            if (isset($data['initialValue']) && $data['initialValue'] !== null) {
                $instance->initialValue = ShopifyMoneyV2::fromArray($data['initialValue']);
            }
            if (isset($data['isRedeemable']) && $data['isRedeemable'] !== null) {
                $instance->isRedeemable = $data['isRedeemable'];
            }
            if (isset($data['lastCharacters']) && $data['lastCharacters'] !== null) {
                $instance->lastCharacters = $data['lastCharacters'];
            }
            if (isset($data['lineItem']) && $data['lineItem'] !== null) {
                $instance->lineItem = ShopifyLineItem::fromArray($data['lineItem']);
            }
            if (isset($data['maskedCode']) && $data['maskedCode'] !== null) {
                $instance->maskedCode = $data['maskedCode'];
            }
            if (isset($data['note']) && $data['note'] !== null) {
                $instance->note = $data['note'];
            }
            if (isset($data['order']) && $data['order'] !== null) {
                $instance->order = ShopifyOrder::fromArray($data['order']);
            }
            if (isset($data['recipientAttributes']) && $data['recipientAttributes'] !== null) {
                $instance->recipientAttributes = ShopifyGiftCardRecipient::fromArray($data['recipientAttributes']);
            }
            if (isset($data['templateSuffix']) && $data['templateSuffix'] !== null) {
                $instance->templateSuffix = $data['templateSuffix'];
            }
            if (isset($data['transactions']) && $data['transactions'] !== null) {
                $instance->transactions = ShopifyGiftCardTransactionConnection::fromArray($data['transactions']);
            }
            if (isset($data['updatedAt']) && $data['updatedAt'] !== null) {
                $instance->updatedAt = new Carbon($data['updatedAt']);
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
            if ($this->balance !== null) {
                $data['balance'] = $this->balance->asArray();
            }
            if ($this->createdAt !== null) {
                $data['createdAt'] = $this->createdAt->toIso8601String();
            }
            if ($this->crossCurrencyRedemptionStrategy !== null) {
                $data['crossCurrencyRedemptionStrategy'] = $this->crossCurrencyRedemptionStrategy;
            }
            if ($this->customer !== null) {
                $data['customer'] = $this->customer->asArray();
            }
            if ($this->deactivatedAt !== null) {
                $data['deactivatedAt'] = $this->deactivatedAt->toIso8601String();
            }
            if ($this->enabled !== null) {
                $data['enabled'] = $this->enabled;
            }
            if ($this->expiresOn !== null) {
                $data['expiresOn'] = $this->expiresOn->toIso8601String();
            }
            if ($this->id !== null) {
                $data['id'] = $this->id;
            }
            if ($this->initialValue !== null) {
                $data['initialValue'] = $this->initialValue->asArray();
            }
            if ($this->isRedeemable !== null) {
                $data['isRedeemable'] = $this->isRedeemable;
            }
            if ($this->lastCharacters !== null) {
                $data['lastCharacters'] = $this->lastCharacters;
            }
            if ($this->lineItem !== null) {
                $data['lineItem'] = $this->lineItem->asArray();
            }
            if ($this->maskedCode !== null) {
                $data['maskedCode'] = $this->maskedCode;
            }
            if ($this->note !== null) {
                $data['note'] = $this->note;
            }
            if ($this->order !== null) {
                $data['order'] = $this->order->asArray();
            }
            if ($this->recipientAttributes !== null) {
                $data['recipientAttributes'] = $this->recipientAttributes->asArray();
            }
            if ($this->templateSuffix !== null) {
                $data['templateSuffix'] = $this->templateSuffix;
            }
            if ($this->transactions !== null) {
                $data['transactions'] = $this->transactions->asArray();
            }
            if ($this->updatedAt !== null) {
                $data['updatedAt'] = $this->updatedAt->toIso8601String();
            }
            return $data;
        }
}
