<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

/**
 * The gift card configuration settings for a
 * [`Product`](https://shopify.dev/docs/api/admin-graphql/latest/objects/Product),
 * including the
 * [`issuanceCurrency`](https://shopify.dev/docs/api/admin-graphql/latest/objects/GiftCardProductSettings#field-GiftCardProductSettings.fields.issuanceCurrency)
 * and whether the gift card can be redeemed across currencies via
 * [`crossCurrencyRedeemable`](https://shopify.dev/docs/api/admin-graphql/latest/objects/GiftCardProductSettings#field-GiftCardProductSettings.fields.crossCurrencyRedeemable).
 * Configure these settings when creating a gift card product with the
 * [`giftCardProductSet`](https://shopify.dev/docs/api/admin-graphql/latest/mutations/giftCardProductSet)
 * mutation.
 */
class ShopifyGiftCardProductSettings
{
    protected $crossCurrencyRedeemable;
    protected $issuanceCurrency;

    
    /**
     * Whether the gift card can be redeemed in currencies other than the issuance currency.
     *
     * @return bool
     */
    public function getCrossCurrencyRedeemable(): ?bool
    {
        return $this->crossCurrencyRedeemable;
    }

    
    /**
     * The currency in which the gift card fulfilled by this product is issued.
     * When this field isn't set the gift card will be issued in the shop's currency, the return value of this field will be `null`.
     * When this field is set the gift card product can only be purchased in the issuance currency. A checkout violation will prevent purchases if the checkout currency doesn't match the issuance currency.
     * Extra care should be taken to only publish a gift card product with an issuance currency in markets where that currency can be guaranteed.
     *
     * @return string A ShopifyCurrencyCodeEnumObject value
     */
    public function getIssuanceCurrency(): ?string
    {
        return $this->issuanceCurrency;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['crossCurrencyRedeemable']) && $data['crossCurrencyRedeemable'] !== null) {
                $instance->crossCurrencyRedeemable = $data['crossCurrencyRedeemable'];
            }
            if (isset($data['issuanceCurrency']) && $data['issuanceCurrency'] !== null) {
                $instance->issuanceCurrency = $data['issuanceCurrency'];
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
            if ($this->crossCurrencyRedeemable !== null) {
                $data['crossCurrencyRedeemable'] = $this->crossCurrencyRedeemable;
            }
            if ($this->issuanceCurrency !== null) {
                $data['issuanceCurrency'] = $this->issuanceCurrency;
            }
            return $data;
        }
}
