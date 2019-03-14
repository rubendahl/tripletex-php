# ProjectOrderLine

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  | [optional] 
**version** | **int** |  | [optional] 
**changes** | [**\Tripletex\Model\Change[]**](Change.md) |  | [optional] 
**url** | **string** |  | [optional] 
**product** | [**\Tripletex\Model\Product**](Product.md) |  | [optional] 
**inventory** | [**\Tripletex\Model\Inventory**](Inventory.md) |  | [optional] 
**description** | **string** |  | [optional] 
**count** | **double** |  | [optional] 
**unit_cost_currency** | [**BigDecimal**](BigDecimal.md) | Unit price purchase (cost) excluding VAT in the order&#x27;s currency | [optional] 
**unit_price_excluding_vat_currency** | [**BigDecimal**](BigDecimal.md) | Unit price of purchase excluding VAT in the order&#x27;s currency | [optional] 
**currency** | [**\Tripletex\Model\Currency**](Currency.md) |  | [optional] 
**markup** | **double** | Markup given as a percentage (%) | [optional] 
**discount** | **double** | Discount given as a percentage (%) | [optional] 
**vat_type** | [**\Tripletex\Model\VatType**](VatType.md) |  | [optional] 
**amount_excluding_vat_currency** | [**BigDecimal**](BigDecimal.md) | Total amount on order line excluding VAT in the order&#x27;s currency | [optional] 
**amount_including_vat_currency** | [**BigDecimal**](BigDecimal.md) | Total amount on order line including VAT in the order&#x27;s currency | [optional] 
**project** | [**\Tripletex\Model\Project**](Project.md) |  | 
**date** | **string** |  | 
**is_chargeable** | **bool** |  | [optional] [default to false]

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)

