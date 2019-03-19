# Stocktaking

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  | [optional] 
**version** | **int** |  | [optional] 
**changes** | [**\Tripletex\Model\Change[]**](Change.md) |  | [optional] 
**url** | **string** |  | [optional] 
**number** | **int** |  | [optional] 
**date** | **string** |  | 
**comment** | **string** |  | [optional] 
**type_of_stocktaking** | **string** | Define the type of stoctaking.&lt;br&gt;ALL_PRODUCTS_WITH_INVENTORIES: Create a stocktaking for all products with inventories.&lt;br&gt;INCLUDE_PRODUCTS: Create a stocktaking which includes all products.&lt;br&gt;NO_PRODUCTS: Create a stocktaking without products.&lt;br&gt;If not specified, the value &#39;ALL_PRODUCTS_WITH_INVENTORIES&#39; is used. | 
**inventory** | [**\Tripletex\Model\Inventory**](Inventory.md) | The inventory this applies for | 
**is_completed** | **bool** |  | [optional] [default to false]

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


