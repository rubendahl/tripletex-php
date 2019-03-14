# Product

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  | [optional] 
**version** | **int** |  | [optional] 
**changes** | [**\Tripletex\Model\Change[]**](Change.md) |  | [optional] 
**url** | **string** |  | [optional] 
**name** | **string** |  | [optional] 
**number** | **string** |  | [optional] 
**el_number** | **string** |  | [optional] 
**nrf_number** | **string** |  | [optional] 
**cost_excluding_vat_currency** | [**BigDecimal**](BigDecimal.md) | Price purchase (cost) excluding VAT in the product&#x27;s currency | [optional] 
**price_excluding_vat_currency** | [**BigDecimal**](BigDecimal.md) | Price of purchase excluding VAT in the product&#x27;s currency | [optional] 
**price_including_vat_currency** | [**BigDecimal**](BigDecimal.md) | Price of purchase including VAT in the product&#x27;s currency | [optional] 
**is_inactive** | **bool** |  | [optional] [default to false]
**product_unit** | [**\Tripletex\Model\ProductUnit**](ProductUnit.md) |  | [optional] 
**is_stock_item** | **bool** |  | [optional] [default to false]
**stock_of_goods** | [**BigDecimal**](BigDecimal.md) |  | [optional] 
**vat_type** | [**\Tripletex\Model\VatType**](VatType.md) |  | [optional] 
**currency** | [**\Tripletex\Model\Currency**](Currency.md) |  | [optional] 
**department** | [**\Tripletex\Model\Department**](Department.md) |  | [optional] 
**account** | [**\Tripletex\Model\Account**](Account.md) |  | [optional] 
**discount_price** | [**BigDecimal**](BigDecimal.md) |  | [optional] 
**supplier** | [**\Tripletex\Model\Supplier**](Supplier.md) |  | [optional] 
**resale_product** | [**\Tripletex\Model\Product**](Product.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)

