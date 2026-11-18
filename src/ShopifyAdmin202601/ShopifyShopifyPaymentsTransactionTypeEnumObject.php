<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\EnumObject;

/**
 * The possible types of transactions.
 */
class ShopifyShopifyPaymentsTransactionTypeEnumObject extends EnumObject
{
    /**
     * Deducts a fee from the balance when a debit from the merchant's bank account fails.
     */
    const ACH_BANK_FAILURE_DEBIT_FEE = "ACH_BANK_FAILURE_DEBIT_FEE";
    /**
     * Reverses an `ACH_BANK_FAILURE_DEBIT_FEE` transaction.
     */
    const ACH_BANK_FAILURE_DEBIT_REVERSAL_FEE = "ACH_BANK_FAILURE_DEBIT_REVERSAL_FEE";
    /**
     * Adds an ads publisher credit to the balance.
     */
    const ADS_PUBLISHER_CREDIT = "ADS_PUBLISHER_CREDIT";
    /**
     * Reverses an `ADS_PUBLISHER_CREDIT` transaction.
     */
    const ADS_PUBLISHER_CREDIT_REVERSAL = "ADS_PUBLISHER_CREDIT_REVERSAL";
    /**
     * Credits the disputed amount and chargeback fee when Shopify Fraud Protect covers a fraudulent chargeback on a protected order.
     */
    const CHARGEBACK_PROTECTION_CREDIT = "CHARGEBACK_PROTECTION_CREDIT";
    /**
     * Reverses a `CHARGEBACK_PROTECTION_CREDIT` transaction.
     */
    const CHARGEBACK_PROTECTION_CREDIT_REVERSAL = "CHARGEBACK_PROTECTION_CREDIT_REVERSAL";
    /**
     * Takes back a Fraud Protect reimbursement after the chargeback is won, because the disputed amount is returned to the balance.
     */
    const CHARGEBACK_PROTECTION_DEBIT = "CHARGEBACK_PROTECTION_DEBIT";
    /**
     * Reverses a `CHARGEBACK_PROTECTION_DEBIT` transaction.
     */
    const CHARGEBACK_PROTECTION_DEBIT_REVERSAL = "CHARGEBACK_PROTECTION_DEBIT_REVERSAL";
    /**
     * Adds funds to the balance as a collections credit.
     */
    const COLLECTIONS_CREDIT = "COLLECTIONS_CREDIT";
    /**
     * Reverses a `COLLECTIONS_CREDIT` transaction.
     */
    const COLLECTIONS_CREDIT_REVERSAL = "COLLECTIONS_CREDIT_REVERSAL";
    /**
     * Adds a promotional credit from Shopify to the balance.
     */
    const PROMOTION_CREDIT = "PROMOTION_CREDIT";
    /**
     * Reverses a `PROMOTION_CREDIT` transaction.
     */
    const PROMOTION_CREDIT_REVERSAL = "PROMOTION_CREDIT_REVERSAL";
    /**
     * Adds funds to the balance to correct a financial anomaly.
     */
    const ANOMALY_CREDIT = "ANOMALY_CREDIT";
    /**
     * Reverses an `ANOMALY_CREDIT` transaction.
     */
    const ANOMALY_CREDIT_REVERSAL = "ANOMALY_CREDIT_REVERSAL";
    /**
     * Deducts funds from the balance to correct a financial anomaly.
     */
    const ANOMALY_DEBIT = "ANOMALY_DEBIT";
    /**
     * Reverses an `ANOMALY_DEBIT` transaction.
     */
    const ANOMALY_DEBIT_REVERSAL = "ANOMALY_DEBIT_REVERSAL";
    /**
     * Adds a VAT refund to the balance.
     */
    const VAT_REFUND_CREDIT = "VAT_REFUND_CREDIT";
    /**
     * Reverses a `VAT_REFUND_CREDIT` transaction.
     */
    const VAT_REFUND_CREDIT_REVERSAL = "VAT_REFUND_CREDIT_REVERSAL";
    /**
     * Adds funds to the balance as a credit from a sales channel.
     */
    const CHANNEL_CREDIT = "CHANNEL_CREDIT";
    /**
     * Reverses a `CHANNEL_CREDIT` transaction.
     */
    const CHANNEL_CREDIT_REVERSAL = "CHANNEL_CREDIT_REVERSAL";
    /**
     * Adds funds to the balance for a transfer from a sales channel.
     */
    const CHANNEL_TRANSFER_CREDIT = "CHANNEL_TRANSFER_CREDIT";
    /**
     * Reverses a `CHANNEL_TRANSFER_CREDIT` transaction.
     */
    const CHANNEL_TRANSFER_CREDIT_REVERSAL = "CHANNEL_TRANSFER_CREDIT_REVERSAL";
    /**
     * Deducts funds from the balance for a transfer to a sales channel.
     */
    const CHANNEL_TRANSFER_DEBIT = "CHANNEL_TRANSFER_DEBIT";
    /**
     * Reverses a `CHANNEL_TRANSFER_DEBIT` transaction.
     */
    const CHANNEL_TRANSFER_DEBIT_REVERSAL = "CHANNEL_TRANSFER_DEBIT_REVERSAL";
    /**
     * Adds promotional funds from a sales channel to the balance.
     */
    const CHANNEL_PROMOTION_CREDIT = "CHANNEL_PROMOTION_CREDIT";
    /**
     * Reverses a `CHANNEL_PROMOTION_CREDIT` transaction.
     */
    const CHANNEL_PROMOTION_CREDIT_REVERSAL = "CHANNEL_PROMOTION_CREDIT_REVERSAL";
    /**
     * Adds funds to the balance to adjust a marketplace fee.
     */
    const MARKETPLACE_FEE_CREDIT = "MARKETPLACE_FEE_CREDIT";
    /**
     * Reverses a `MARKETPLACE_FEE_CREDIT` transaction.
     */
    const MARKETPLACE_FEE_CREDIT_REVERSAL = "MARKETPLACE_FEE_CREDIT_REVERSAL";
    /**
     * Adds a goodwill credit from Shopify to the balance.
     */
    const MERCHANT_GOODWILL_CREDIT = "MERCHANT_GOODWILL_CREDIT";
    /**
     * Reverses a `MERCHANT_GOODWILL_CREDIT` transaction.
     */
    const MERCHANT_GOODWILL_CREDIT_REVERSAL = "MERCHANT_GOODWILL_CREDIT_REVERSAL";
    /**
     * Deducts marketplace tax from the balance through a tax adjustment.
     */
    const TAX_ADJUSTMENT_DEBIT = "TAX_ADJUSTMENT_DEBIT";
    /**
     * Reverses a `TAX_ADJUSTMENT_DEBIT` transaction.
     */
    const TAX_ADJUSTMENT_DEBIT_REVERSAL = "TAX_ADJUSTMENT_DEBIT_REVERSAL";
    /**
     * Adds funds to the balance when a previously collected marketplace tax adjustment is reversed.
     */
    const TAX_ADJUSTMENT_CREDIT = "TAX_ADJUSTMENT_CREDIT";
    /**
     * Reverses a `TAX_ADJUSTMENT_CREDIT` transaction.
     */
    const TAX_ADJUSTMENT_CREDIT_REVERSAL = "TAX_ADJUSTMENT_CREDIT_REVERSAL";
    /**
     * Deducts a Shopify bill charge from the balance, such as a theme purchased with the balance.
     */
    const BILLING_DEBIT = "BILLING_DEBIT";
    /**
     * Reverses a `BILLING_DEBIT` transaction, such as when a theme purchased with the balance is refunded.
     */
    const BILLING_DEBIT_REVERSAL = "BILLING_DEBIT_REVERSAL";
    /**
     * The Shop Cash portion of an order. The customer paid with Shop Cash, and that amount is added to the balance.
     */
    const SHOP_CASH_CREDIT = "SHOP_CASH_CREDIT";
    /**
     * Reverses a `SHOP_CASH_CREDIT` transaction.
     */
    const SHOP_CASH_CREDIT_REVERSAL = "SHOP_CASH_CREDIT_REVERSAL";
    /**
     * Deducts a Shop Cash billing charge from the balance.
     */
    const SHOP_CASH_BILLING_DEBIT = "SHOP_CASH_BILLING_DEBIT";
    /**
     * Reverses a `SHOP_CASH_BILLING_DEBIT` transaction.
     */
    const SHOP_CASH_BILLING_DEBIT_REVERSAL = "SHOP_CASH_BILLING_DEBIT_REVERSAL";
    /**
     * Deducts a Shop Cash refund from the balance when Shop Cash used on an order is returned to the customer.
     */
    const SHOP_CASH_REFUND_DEBIT = "SHOP_CASH_REFUND_DEBIT";
    /**
     * Reverses a `SHOP_CASH_REFUND_DEBIT` transaction.
     */
    const SHOP_CASH_REFUND_DEBIT_REVERSAL = "SHOP_CASH_REFUND_DEBIT_REVERSAL";
    /**
     * A Shop Campaign charge for an order placed with a campaign offer before January 2026. Later campaign costs are charged on the Shopify bill instead.
     */
    const SHOP_CASH_CAMPAIGN_BILLING_DEBIT = "SHOP_CASH_CAMPAIGN_BILLING_DEBIT";
    /**
     * Reverses a `SHOP_CASH_CAMPAIGN_BILLING_DEBIT` transaction.
     */
    const SHOP_CASH_CAMPAIGN_BILLING_DEBIT_REVERSAL = "SHOP_CASH_CAMPAIGN_BILLING_DEBIT_REVERSAL";
    /**
     * A credit for a Shop Campaign charge, for campaign activity before January 2026.
     */
    const SHOP_CASH_CAMPAIGN_BILLING_CREDIT = "SHOP_CASH_CAMPAIGN_BILLING_CREDIT";
    /**
     * Reverses a `SHOP_CASH_CAMPAIGN_BILLING_CREDIT` transaction.
     */
    const SHOP_CASH_CAMPAIGN_BILLING_CREDIT_REVERSAL = "SHOP_CASH_CAMPAIGN_BILLING_CREDIT_REVERSAL";
    /**
     * Credits the disputed amount and chargeback fee when Shopify Protect covers a fraudulent chargeback on a protected Shop Pay order.
     */
    const SELLER_PROTECTION_CREDIT = "SELLER_PROTECTION_CREDIT";
    /**
     * Reverses a `SELLER_PROTECTION_CREDIT` transaction.
     */
    const SELLER_PROTECTION_CREDIT_REVERSAL = "SELLER_PROTECTION_CREDIT_REVERSAL";
    /**
     * Deducts the cost of Shopify Collective products from a retailer's balance so that the supplier can be paid.
     */
    const SHOPIFY_COLLECTIVE_DEBIT = "SHOPIFY_COLLECTIVE_DEBIT";
    /**
     * Reverses a `SHOPIFY_COLLECTIVE_DEBIT` transaction.
     */
    const SHOPIFY_COLLECTIVE_DEBIT_REVERSAL = "SHOPIFY_COLLECTIVE_DEBIT_REVERSAL";
    /**
     * Pays a Shopify Collective supplier for products that a retailer sold, after the supplier fulfills the order.
     */
    const SHOPIFY_COLLECTIVE_CREDIT = "SHOPIFY_COLLECTIVE_CREDIT";
    /**
     * Reverses a `SHOPIFY_COLLECTIVE_CREDIT` transaction.
     */
    const SHOPIFY_COLLECTIVE_CREDIT_REVERSAL = "SHOPIFY_COLLECTIVE_CREDIT_REVERSAL";
    /**
     * Deducts funds from the balance as a general lending debit that isn't tied to a specific lending product. Legacy.
     */
    const LENDING_DEBIT = "LENDING_DEBIT";
    /**
     * Reverses a `LENDING_DEBIT` transaction.
     */
    const LENDING_DEBIT_REVERSAL = "LENDING_DEBIT_REVERSAL";
    /**
     * Adds funds to the balance as a general lending credit that isn't tied to a specific lending product. Legacy.
     */
    const LENDING_CREDIT = "LENDING_CREDIT";
    /**
     * Reverses a `LENDING_CREDIT` transaction.
     */
    const LENDING_CREDIT_REVERSAL = "LENDING_CREDIT_REVERSAL";
    /**
     * Deducts a Shopify Capital repayment (remittance) from the balance.
     */
    const LENDING_CAPITAL_REMITTANCE = "LENDING_CAPITAL_REMITTANCE";
    /**
     * Reverses a `LENDING_CAPITAL_REMITTANCE` transaction.
     */
    const LENDING_CAPITAL_REMITTANCE_REVERSAL = "LENDING_CAPITAL_REMITTANCE_REVERSAL";
    /**
     * Deducts a Shopify Credit repayment (remittance) from the balance.
     */
    const LENDING_CREDIT_REMITTANCE = "LENDING_CREDIT_REMITTANCE";
    /**
     * Reverses a `LENDING_CREDIT_REMITTANCE` transaction.
     */
    const LENDING_CREDIT_REMITTANCE_REVERSAL = "LENDING_CREDIT_REMITTANCE_REVERSAL";
    /**
     * Returns all or part of a `LENDING_CAPITAL_REMITTANCE` to the balance when Shopify Capital refunds a remittance it collected.
     */
    const LENDING_CAPITAL_REFUND = "LENDING_CAPITAL_REFUND";
    /**
     * Reverses a `LENDING_CAPITAL_REFUND` transaction.
     */
    const LENDING_CAPITAL_REFUND_REVERSAL = "LENDING_CAPITAL_REFUND_REVERSAL";
    /**
     * Returns a Shopify Credit remittance to the balance when it's refunded.
     */
    const LENDING_CREDIT_REFUND = "LENDING_CREDIT_REFUND";
    /**
     * Reverses a `LENDING_CREDIT_REFUND` transaction.
     */
    const LENDING_CREDIT_REFUND_REVERSAL = "LENDING_CREDIT_REFUND_REVERSAL";
    /**
     * Moves funds from a Shopify Balance account into the Shopify Payments balance.
     */
    const BALANCE_TRANSFER_INBOUND = "BALANCE_TRANSFER_INBOUND";
    /**
     * Moves funds from the Shopify Payments balance into a Shopify Balance account.
     */
    const BALANCE_TRANSFER_OUTBOUND = "BALANCE_TRANSFER_OUTBOUND";
    /**
     * Adds funds to the balance for a channel-billed Managed Markets transaction.
     */
    const MARKETS_PRO_CREDIT = "MARKETS_PRO_CREDIT";
    /**
     * Corrects or reverses a previously recorded `CUSTOMS_DUTY` transaction. Depending on its sign, it adds to or deducts from the balance.
     */
    const CUSTOMS_DUTY_ADJUSTMENT = "CUSTOMS_DUTY_ADJUSTMENT";
    /**
     * Corrects or reverses a previously recorded `IMPORT_TAX` transaction. Depending on its sign, it adds to or deducts from the balance.
     */
    const IMPORT_TAX_ADJUSTMENT = "IMPORT_TAX_ADJUSTMENT";
    /**
     * Adjusts the cost of a Managed Markets shipping label after its final cost is reconciled. Depending on its sign, it adds to or deducts from the balance.
     */
    const SHIPPING_LABEL_ADJUSTMENT = "SHIPPING_LABEL_ADJUSTMENT";
    /**
     * Adjusts the base shipping cost of a Managed Markets shipping label. Depending on its sign, it adds to or deducts from the balance.
     */
    const SHIPPING_LABEL_ADJUSTMENT_BASE = "SHIPPING_LABEL_ADJUSTMENT_BASE";
    /**
     * Adjusts a surcharge on a Managed Markets shipping label. Depending on its sign, it adds to or deducts from the balance.
     */
    const SHIPPING_LABEL_ADJUSTMENT_SURCHARGE = "SHIPPING_LABEL_ADJUSTMENT_SURCHARGE";
    /**
     * Deducts a carrier charge when a Managed Markets shipment is returned to its origin, such as when the customer refuses delivery.
     */
    const SHIPPING_RETURN_TO_ORIGIN_ADJUSTMENT = "SHIPPING_RETURN_TO_ORIGIN_ADJUSTMENT";
    /**
     * Deducts an additional carrier charge for a Managed Markets shipment.
     */
    const SHIPPING_OTHER_CARRIER_CHARGE_ADJUSTMENT = "SHIPPING_OTHER_CARRIER_CHARGE_ADJUSTMENT";
    /**
     * Adjusts a previously recorded charge. Depending on its sign, it adds to or deducts from the balance.
     */
    const CHARGE_ADJUSTMENT = "CHARGE_ADJUSTMENT";
    /**
     * Adjusts a previously recorded refund. Depending on its sign, it adds to or deducts from the balance.
     */
    const REFUND_ADJUSTMENT = "REFUND_ADJUSTMENT";
    /**
     * The fee that the cardholder's bank charges when a customer files a chargeback.
     */
    const CHARGEBACK_FEE = "CHARGEBACK_FEE";
    /**
     * Returns a `CHARGEBACK_FEE` to the balance when the fee is refunded.
     */
    const CHARGEBACK_FEE_REFUND = "CHARGEBACK_FEE_REFUND";
    /**
     * A payout from the balance to the merchant's bank account, or a withdrawal from the bank account into the balance. The amount's sign shows the direction.
     */
    const TRANSFER = "TRANSFER";
    /**
     * Reverses a `TRANSFER` that failed, moving the funds back to where they came from.
     */
    const TRANSFER_FAILURE = "TRANSFER_FAILURE";
    /**
     * Reverses a `TRANSFER` that was canceled, moving the funds back to where they came from.
     */
    const TRANSFER_CANCEL = "TRANSFER_CANCEL";
    /**
     * Moves funds from the balance into a reserve that Shopify holds on the account.
     */
    const RESERVED_FUNDS_WITHDRAWAL = "RESERVED_FUNDS_WITHDRAWAL";
    /**
     * Releases funds from a reserve back to the balance.
     */
    const RESERVED_FUNDS_REVERSAL = "RESERVED_FUNDS_REVERSAL";
    /**
     * Returns funds withheld by a `RISK_WITHDRAWAL` to the balance.
     */
    const RISK_REVERSAL = "RISK_REVERSAL";
    /**
     * Withholds the amount of a potentially fraudulent order from the balance when its payout is already pending.
     */
    const RISK_WITHDRAWAL = "RISK_WITHDRAWAL";
    /**
     * Deducts a referral fee for an order from the balance.
     */
    const REFERRAL_FEE = "REFERRAL_FEE";
    /**
     * Deducts the tax on a `REFERRAL_FEE` from the balance.
     */
    const REFERRAL_FEE_TAX = "REFERRAL_FEE_TAX";
    /**
     * Deducts funds from the balance for a payment to another merchant. Legacy Shopify Collective type.
     */
    const MERCHANT_TO_MERCHANT_DEBIT = "MERCHANT_TO_MERCHANT_DEBIT";
    /**
     * Reverses a `MERCHANT_TO_MERCHANT_DEBIT` transaction.
     */
    const MERCHANT_TO_MERCHANT_DEBIT_REVERSAL = "MERCHANT_TO_MERCHANT_DEBIT_REVERSAL";
    /**
     * Adds funds to the balance from another merchant. Legacy Shopify Collective type.
     */
    const MERCHANT_TO_MERCHANT_CREDIT = "MERCHANT_TO_MERCHANT_CREDIT";
    /**
     * Reverses a `MERCHANT_TO_MERCHANT_CREDIT` transaction.
     */
    const MERCHANT_TO_MERCHANT_CREDIT_REVERSAL = "MERCHANT_TO_MERCHANT_CREDIT_REVERSAL";
    /**
     * Deducts funds from the balance for a supplier transaction. Legacy Shopify Collective type.
     */
    const SHOPIFY_SOURCE_DEBIT = "SHOPIFY_SOURCE_DEBIT";
    /**
     * Reverses a `SHOPIFY_SOURCE_DEBIT` transaction.
     */
    const SHOPIFY_SOURCE_DEBIT_REVERSAL = "SHOPIFY_SOURCE_DEBIT_REVERSAL";
    /**
     * Adds funds to the balance for a supplier transaction. Legacy Shopify Collective type.
     */
    const SHOPIFY_SOURCE_CREDIT = "SHOPIFY_SOURCE_CREDIT";
    /**
     * Reverses a `SHOPIFY_SOURCE_CREDIT` transaction.
     */
    const SHOPIFY_SOURCE_CREDIT_REVERSAL = "SHOPIFY_SOURCE_CREDIT_REVERSAL";
    /**
     * A customer payment for an order, processed through Shopify Payments and added to the balance.
     */
    const CHARGE = "CHARGE";
    /**
     * Deducts a refund to a customer from the balance.
     */
    const REFUND = "REFUND";
    /**
     * Returns funds to the balance when a refund to a customer fails.
     */
    const REFUND_FAILURE = "REFUND_FAILURE";
    /**
     * Returns fees to the balance for an order that was refunded.
     */
    const APPLICATION_FEE_REFUND = "APPLICATION_FEE_REFUND";
    /**
     * A manual or system adjustment to the Shopify Payments balance that no more specific type covers. In API versions where a newer transaction type isn't available yet, that type is returned as `ADJUSTMENT`.
     */
    const ADJUSTMENT = "ADJUSTMENT";
    /**
     * Withdraws the disputed amount from the balance when a customer's bank opens a chargeback.
     */
    const DISPUTE_WITHDRAWAL = "DISPUTE_WITHDRAWAL";
    /**
     * Adjusts the balance after a chargeback is resolved. It usually returns all or part of the disputed amount. In rare cases it's negative and deducts an additional amount.
     */
    const DISPUTE_REVERSAL = "DISPUTE_REVERSAL";
    /**
     * Deducts the cost of a shipping label bought for a Managed Markets shipment.
     */
    const SHIPPING_LABEL = "SHIPPING_LABEL";
    /**
     * Customs duty for a Managed Markets order. Depending on its sign, it adds to or deducts from the balance.
     */
    const CUSTOMS_DUTY = "CUSTOMS_DUTY";
    /**
     * Import tax for a Managed Markets order. Depending on its sign, it adds to or deducts from the balance.
     */
    const IMPORT_TAX = "IMPORT_TAX";
    /**
     * Holds disputed funds from the available balance while a chargeback is open.
     */
    const CHARGEBACK_HOLD = "CHARGEBACK_HOLD";
    /**
     * Releases funds held by a `CHARGEBACK_HOLD` back to the available balance.
     */
    const CHARGEBACK_HOLD_RELEASE = "CHARGEBACK_HOLD_RELEASE";
    /**
     * Moves funds into or out of a reserve. A hold reduces the available balance, and a release restores it.
     */
    const RESERVED_FUNDS = "RESERVED_FUNDS";
    /**
     * Deducts a fee that Stripe charges directly to the account for its services. Payment processing fees aren't recorded here; they're part of a `CHARGE` transaction's fee.
     */
    const STRIPE_FEE = "STRIPE_FEE";
    /**
     * Returns funds to the balance when a transfer is refunded.
     */
    const TRANSFER_REFUND = "TRANSFER_REFUND";
    /**
     * Funds that Shopify advances to the balance before the normal payout schedule, against payments that are expected to be paid out later.
     */
    const ADVANCE = "ADVANCE";
    /**
     * The other half of an `ADVANCE`. Deducts the advanced amount from the pending funds it was advanced against, so the two net to zero.
     */
    const ADVANCE_FUNDING = "ADVANCE_FUNDING";
    /**
     * Adds refunded import tax for a Managed Markets order to the balance.
     */
    const IMPORT_TAX_REFUND = "IMPORT_TAX_REFUND";
}
