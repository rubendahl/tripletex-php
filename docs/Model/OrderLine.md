# OrderLine

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
**unit_cost_currency** | **float** | Unit price purchase (cost) excluding VAT in the order&#39;s currency | [optional] 
**unit_price_excluding_vat_currency** | **float** | Unit price of purchase excluding VAT in the order&#39;s currency | [optional] 
**currency** | [**\Tripletex\Model\Currency**](Currency.md) | The order line&#39;s currency. Determined by the order&#39;s currency. | [optional] 
**markup** | **double** | Markup given as a percentage (%) | [optional] 
**discount** | **double** | Discount given as a percentage (%) | [optional] 
**vat_type** | [**\Tripletex\Model\VatType**](VatType.md) |  | [optional] 
**amount_excluding_vat_currency** | **float** | Total amount on order line excluding VAT in the order&#39;s currency | [optional] 
**amount_including_vat_currency** | **float** | Total amount on order line including VAT in the order&#39;s currency | [optional] 
**order** | [**\Tripletex\Model\Order**](Order.md) |  | 
**unit_price_including_vat_currency** | **float** | Unit price of purchase including VAT in the order&#39;s currency | [optional] 
**is_subscription** | **bool** |  | [optional] [default to false]
**subscription_period_start** | **string** |  | [optional] 
**subscription_period_end** | **string** |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


