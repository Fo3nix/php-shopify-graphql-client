<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\EnumObject;

/**
 * Available customer tax exemptions.
 */
class ShopifyTaxExemptionEnumObject extends EnumObject
{
    /**
     * This customer is exempt from specific taxes for holding a valid STATUS_CARD_EXEMPTION in Canada.
     */
    const CA_STATUS_CARD_EXEMPTION = "CA_STATUS_CARD_EXEMPTION";
    /**
     * This customer is exempt from specific taxes for holding a valid RESELLER_EXEMPTION in British Columbia.
     */
    const CA_BC_RESELLER_EXEMPTION = "CA_BC_RESELLER_EXEMPTION";
    /**
     * This customer is exempt from specific taxes for holding a valid RESELLER_EXEMPTION in Manitoba.
     */
    const CA_MB_RESELLER_EXEMPTION = "CA_MB_RESELLER_EXEMPTION";
    /**
     * This customer is exempt from specific taxes for holding a valid RESELLER_EXEMPTION in Saskatchewan.
     */
    const CA_SK_RESELLER_EXEMPTION = "CA_SK_RESELLER_EXEMPTION";
    /**
     * This customer is exempt from VPT (Vapour Products Tax) for holding a valid VPT_RESELLER_EXEMPTION in Saskatchewan.
     */
    const CA_SK_VPT_RESELLER_EXEMPTION = "CA_SK_VPT_RESELLER_EXEMPTION";
    /**
     * This customer is exempt from VPT (Vapour Products Tax) for holding a valid VPT_RESELLER_EXEMPTION in Newfoundland and Labrador.
     */
    const CA_NL_VPT_RESELLER_EXEMPTION = "CA_NL_VPT_RESELLER_EXEMPTION";
    /**
     * This customer is exempt from specific taxes for holding a valid DIPLOMAT_EXEMPTION in Canada.
     */
    const CA_DIPLOMAT_EXEMPTION = "CA_DIPLOMAT_EXEMPTION";
    /**
     * This customer is exempt from specific taxes for holding a valid COMMERCIAL_FISHERY_EXEMPTION in British Columbia.
     */
    const CA_BC_COMMERCIAL_FISHERY_EXEMPTION = "CA_BC_COMMERCIAL_FISHERY_EXEMPTION";
    /**
     * This customer is exempt from specific taxes for holding a valid COMMERCIAL_FISHERY_EXEMPTION in Manitoba.
     */
    const CA_MB_COMMERCIAL_FISHERY_EXEMPTION = "CA_MB_COMMERCIAL_FISHERY_EXEMPTION";
    /**
     * This customer is exempt from specific taxes for holding a valid COMMERCIAL_FISHERY_EXEMPTION in Nova Scotia.
     */
    const CA_NS_COMMERCIAL_FISHERY_EXEMPTION = "CA_NS_COMMERCIAL_FISHERY_EXEMPTION";
    /**
     * This customer is exempt from specific taxes for holding a valid COMMERCIAL_FISHERY_EXEMPTION in Prince Edward Island.
     */
    const CA_PE_COMMERCIAL_FISHERY_EXEMPTION = "CA_PE_COMMERCIAL_FISHERY_EXEMPTION";
    /**
     * This customer is exempt from specific taxes for holding a valid COMMERCIAL_FISHERY_EXEMPTION in Saskatchewan.
     */
    const CA_SK_COMMERCIAL_FISHERY_EXEMPTION = "CA_SK_COMMERCIAL_FISHERY_EXEMPTION";
    /**
     * This customer is exempt from specific taxes for holding a valid PRODUCTION_AND_MACHINERY_EXEMPTION in British Columbia.
     */
    const CA_BC_PRODUCTION_AND_MACHINERY_EXEMPTION = "CA_BC_PRODUCTION_AND_MACHINERY_EXEMPTION";
    /**
     * This customer is exempt from specific taxes for holding a valid PRODUCTION_AND_MACHINERY_EXEMPTION in Saskatchewan.
     */
    const CA_SK_PRODUCTION_AND_MACHINERY_EXEMPTION = "CA_SK_PRODUCTION_AND_MACHINERY_EXEMPTION";
    /**
     * This customer is exempt from specific taxes for holding a valid SUB_CONTRACTOR_EXEMPTION in British Columbia.
     */
    const CA_BC_SUB_CONTRACTOR_EXEMPTION = "CA_BC_SUB_CONTRACTOR_EXEMPTION";
    /**
     * This customer is exempt from specific taxes for holding a valid SUB_CONTRACTOR_EXEMPTION in Saskatchewan.
     */
    const CA_SK_SUB_CONTRACTOR_EXEMPTION = "CA_SK_SUB_CONTRACTOR_EXEMPTION";
    /**
     * This customer is exempt from specific taxes for holding a valid CONTRACTOR_EXEMPTION in British Columbia.
     */
    const CA_BC_CONTRACTOR_EXEMPTION = "CA_BC_CONTRACTOR_EXEMPTION";
    /**
     * This customer is exempt from specific taxes for holding a valid CONTRACTOR_EXEMPTION in Saskatchewan.
     */
    const CA_SK_CONTRACTOR_EXEMPTION = "CA_SK_CONTRACTOR_EXEMPTION";
    /**
     * This customer is exempt from specific taxes for holding a valid PURCHASE_EXEMPTION in Ontario.
     */
    const CA_ON_PURCHASE_EXEMPTION = "CA_ON_PURCHASE_EXEMPTION";
    /**
     * This customer is exempt from specific taxes for holding a valid FARMER_EXEMPTION in Manitoba.
     */
    const CA_MB_FARMER_EXEMPTION = "CA_MB_FARMER_EXEMPTION";
    /**
     * This customer is exempt from specific taxes for holding a valid FARMER_EXEMPTION in Nova Scotia.
     */
    const CA_NS_FARMER_EXEMPTION = "CA_NS_FARMER_EXEMPTION";
    /**
     * This customer is exempt from specific taxes for holding a valid FARMER_EXEMPTION in Saskatchewan.
     */
    const CA_SK_FARMER_EXEMPTION = "CA_SK_FARMER_EXEMPTION";
    /**
     * This customer is exempt from VAT for purchases within the EU that is shipping from outside of customer's country, as well as purchases from the EU to the UK.
     */
    const EU_REVERSE_CHARGE_EXEMPTION_RULE = "EU_REVERSE_CHARGE_EXEMPTION_RULE";
    /**
     * This customer is exempt from specific taxes for holding a valid RESELLER_EXEMPTION in Alabama.
     */
    const US_AL_RESELLER_EXEMPTION = "US_AL_RESELLER_EXEMPTION";
    /**
     * This customer is exempt from specific taxes for holding a valid RESELLER_EXEMPTION in Alaska.
     */
    const US_AK_RESELLER_EXEMPTION = "US_AK_RESELLER_EXEMPTION";
    /**
     * This customer is exempt from specific taxes for holding a valid RESELLER_EXEMPTION in Arizona.
     */
    const US_AZ_RESELLER_EXEMPTION = "US_AZ_RESELLER_EXEMPTION";
    /**
     * This customer is exempt from specific taxes for holding a valid RESELLER_EXEMPTION in Arkansas.
     */
    const US_AR_RESELLER_EXEMPTION = "US_AR_RESELLER_EXEMPTION";
    /**
     * This customer is exempt from specific taxes for holding a valid RESELLER_EXEMPTION in California.
     */
    const US_CA_RESELLER_EXEMPTION = "US_CA_RESELLER_EXEMPTION";
    /**
     * This customer is exempt from specific taxes for holding a valid RESELLER_EXEMPTION in Colorado.
     */
    const US_CO_RESELLER_EXEMPTION = "US_CO_RESELLER_EXEMPTION";
    /**
     * This customer is exempt from specific taxes for holding a valid RESELLER_EXEMPTION in Connecticut.
     */
    const US_CT_RESELLER_EXEMPTION = "US_CT_RESELLER_EXEMPTION";
    /**
     * This customer is exempt from specific taxes for holding a valid RESELLER_EXEMPTION in Delaware.
     */
    const US_DE_RESELLER_EXEMPTION = "US_DE_RESELLER_EXEMPTION";
    /**
     * This customer is exempt from specific taxes for holding a valid RESELLER_EXEMPTION in Florida.
     */
    const US_FL_RESELLER_EXEMPTION = "US_FL_RESELLER_EXEMPTION";
    /**
     * This customer is exempt from specific taxes for holding a valid RESELLER_EXEMPTION in Georgia.
     */
    const US_GA_RESELLER_EXEMPTION = "US_GA_RESELLER_EXEMPTION";
    /**
     * This customer is exempt from specific taxes for holding a valid RESELLER_EXEMPTION in Hawaii.
     */
    const US_HI_RESELLER_EXEMPTION = "US_HI_RESELLER_EXEMPTION";
    /**
     * This customer is exempt from specific taxes for holding a valid RESELLER_EXEMPTION in Idaho.
     */
    const US_ID_RESELLER_EXEMPTION = "US_ID_RESELLER_EXEMPTION";
    /**
     * This customer is exempt from specific taxes for holding a valid RESELLER_EXEMPTION in Illinois.
     */
    const US_IL_RESELLER_EXEMPTION = "US_IL_RESELLER_EXEMPTION";
    /**
     * This customer is exempt from specific taxes for holding a valid RESELLER_EXEMPTION in Indiana.
     */
    const US_IN_RESELLER_EXEMPTION = "US_IN_RESELLER_EXEMPTION";
    /**
     * This customer is exempt from specific taxes for holding a valid RESELLER_EXEMPTION in Iowa.
     */
    const US_IA_RESELLER_EXEMPTION = "US_IA_RESELLER_EXEMPTION";
    /**
     * This customer is exempt from specific taxes for holding a valid RESELLER_EXEMPTION in Kansas.
     */
    const US_KS_RESELLER_EXEMPTION = "US_KS_RESELLER_EXEMPTION";
    /**
     * This customer is exempt from specific taxes for holding a valid RESELLER_EXEMPTION in Kentucky.
     */
    const US_KY_RESELLER_EXEMPTION = "US_KY_RESELLER_EXEMPTION";
    /**
     * This customer is exempt from specific taxes for holding a valid RESELLER_EXEMPTION in Louisiana.
     */
    const US_LA_RESELLER_EXEMPTION = "US_LA_RESELLER_EXEMPTION";
    /**
     * This customer is exempt from specific taxes for holding a valid RESELLER_EXEMPTION in Maine.
     */
    const US_ME_RESELLER_EXEMPTION = "US_ME_RESELLER_EXEMPTION";
    /**
     * This customer is exempt from specific taxes for holding a valid RESELLER_EXEMPTION in Maryland.
     */
    const US_MD_RESELLER_EXEMPTION = "US_MD_RESELLER_EXEMPTION";
    /**
     * This customer is exempt from specific taxes for holding a valid RESELLER_EXEMPTION in Massachusetts.
     */
    const US_MA_RESELLER_EXEMPTION = "US_MA_RESELLER_EXEMPTION";
    /**
     * This customer is exempt from specific taxes for holding a valid RESELLER_EXEMPTION in Michigan.
     */
    const US_MI_RESELLER_EXEMPTION = "US_MI_RESELLER_EXEMPTION";
    /**
     * This customer is exempt from specific taxes for holding a valid RESELLER_EXEMPTION in Minnesota.
     */
    const US_MN_RESELLER_EXEMPTION = "US_MN_RESELLER_EXEMPTION";
    /**
     * This customer is exempt from specific taxes for holding a valid RESELLER_EXEMPTION in Mississippi.
     */
    const US_MS_RESELLER_EXEMPTION = "US_MS_RESELLER_EXEMPTION";
    /**
     * This customer is exempt from specific taxes for holding a valid RESELLER_EXEMPTION in Missouri.
     */
    const US_MO_RESELLER_EXEMPTION = "US_MO_RESELLER_EXEMPTION";
    /**
     * This customer is exempt from specific taxes for holding a valid RESELLER_EXEMPTION in Montana.
     */
    const US_MT_RESELLER_EXEMPTION = "US_MT_RESELLER_EXEMPTION";
    /**
     * This customer is exempt from specific taxes for holding a valid RESELLER_EXEMPTION in Nebraska.
     */
    const US_NE_RESELLER_EXEMPTION = "US_NE_RESELLER_EXEMPTION";
    /**
     * This customer is exempt from specific taxes for holding a valid RESELLER_EXEMPTION in Nevada.
     */
    const US_NV_RESELLER_EXEMPTION = "US_NV_RESELLER_EXEMPTION";
    /**
     * This customer is exempt from specific taxes for holding a valid RESELLER_EXEMPTION in New Hampshire.
     */
    const US_NH_RESELLER_EXEMPTION = "US_NH_RESELLER_EXEMPTION";
    /**
     * This customer is exempt from specific taxes for holding a valid RESELLER_EXEMPTION in New Jersey.
     */
    const US_NJ_RESELLER_EXEMPTION = "US_NJ_RESELLER_EXEMPTION";
    /**
     * This customer is exempt from specific taxes for holding a valid RESELLER_EXEMPTION in New Mexico.
     */
    const US_NM_RESELLER_EXEMPTION = "US_NM_RESELLER_EXEMPTION";
    /**
     * This customer is exempt from specific taxes for holding a valid RESELLER_EXEMPTION in New York.
     */
    const US_NY_RESELLER_EXEMPTION = "US_NY_RESELLER_EXEMPTION";
    /**
     * This customer is exempt from specific taxes for holding a valid RESELLER_EXEMPTION in North Carolina.
     */
    const US_NC_RESELLER_EXEMPTION = "US_NC_RESELLER_EXEMPTION";
    /**
     * This customer is exempt from specific taxes for holding a valid RESELLER_EXEMPTION in North Dakota.
     */
    const US_ND_RESELLER_EXEMPTION = "US_ND_RESELLER_EXEMPTION";
    /**
     * This customer is exempt from specific taxes for holding a valid RESELLER_EXEMPTION in Ohio.
     */
    const US_OH_RESELLER_EXEMPTION = "US_OH_RESELLER_EXEMPTION";
    /**
     * This customer is exempt from specific taxes for holding a valid RESELLER_EXEMPTION in Oklahoma.
     */
    const US_OK_RESELLER_EXEMPTION = "US_OK_RESELLER_EXEMPTION";
    /**
     * This customer is exempt from specific taxes for holding a valid RESELLER_EXEMPTION in Oregon.
     */
    const US_OR_RESELLER_EXEMPTION = "US_OR_RESELLER_EXEMPTION";
    /**
     * This customer is exempt from specific taxes for holding a valid RESELLER_EXEMPTION in Pennsylvania.
     */
    const US_PA_RESELLER_EXEMPTION = "US_PA_RESELLER_EXEMPTION";
    /**
     * This customer is exempt from specific taxes for holding a valid RESELLER_EXEMPTION in Rhode Island.
     */
    const US_RI_RESELLER_EXEMPTION = "US_RI_RESELLER_EXEMPTION";
    /**
     * This customer is exempt from specific taxes for holding a valid RESELLER_EXEMPTION in South Carolina.
     */
    const US_SC_RESELLER_EXEMPTION = "US_SC_RESELLER_EXEMPTION";
    /**
     * This customer is exempt from specific taxes for holding a valid RESELLER_EXEMPTION in South Dakota.
     */
    const US_SD_RESELLER_EXEMPTION = "US_SD_RESELLER_EXEMPTION";
    /**
     * This customer is exempt from specific taxes for holding a valid RESELLER_EXEMPTION in Tennessee.
     */
    const US_TN_RESELLER_EXEMPTION = "US_TN_RESELLER_EXEMPTION";
    /**
     * This customer is exempt from specific taxes for holding a valid RESELLER_EXEMPTION in Texas.
     */
    const US_TX_RESELLER_EXEMPTION = "US_TX_RESELLER_EXEMPTION";
    /**
     * This customer is exempt from specific taxes for holding a valid RESELLER_EXEMPTION in Utah.
     */
    const US_UT_RESELLER_EXEMPTION = "US_UT_RESELLER_EXEMPTION";
    /**
     * This customer is exempt from specific taxes for holding a valid RESELLER_EXEMPTION in Vermont.
     */
    const US_VT_RESELLER_EXEMPTION = "US_VT_RESELLER_EXEMPTION";
    /**
     * This customer is exempt from specific taxes for holding a valid RESELLER_EXEMPTION in Virginia.
     */
    const US_VA_RESELLER_EXEMPTION = "US_VA_RESELLER_EXEMPTION";
    /**
     * This customer is exempt from specific taxes for holding a valid RESELLER_EXEMPTION in Washington.
     */
    const US_WA_RESELLER_EXEMPTION = "US_WA_RESELLER_EXEMPTION";
    /**
     * This customer is exempt from specific taxes for holding a valid RESELLER_EXEMPTION in West Virginia.
     */
    const US_WV_RESELLER_EXEMPTION = "US_WV_RESELLER_EXEMPTION";
    /**
     * This customer is exempt from specific taxes for holding a valid RESELLER_EXEMPTION in Wisconsin.
     */
    const US_WI_RESELLER_EXEMPTION = "US_WI_RESELLER_EXEMPTION";
    /**
     * This customer is exempt from specific taxes for holding a valid RESELLER_EXEMPTION in Wyoming.
     */
    const US_WY_RESELLER_EXEMPTION = "US_WY_RESELLER_EXEMPTION";
    /**
     * This customer is exempt from specific taxes for holding a valid RESELLER_EXEMPTION in Washington DC.
     */
    const US_DC_RESELLER_EXEMPTION = "US_DC_RESELLER_EXEMPTION";
}
