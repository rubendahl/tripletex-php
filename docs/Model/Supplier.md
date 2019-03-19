# Supplier

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  | [optional] 
**version** | **int** |  | [optional] 
**changes** | [**\Tripletex\Model\Change[]**](Change.md) |  | [optional] 
**url** | **string** |  | [optional] 
**name** | **string** |  | 
**organization_number** | **string** |  | [optional] 
**supplier_number** | **int** |  | [optional] 
**customer_number** | **int** |  | [optional] 
**is_supplier** | **bool** |  | [optional] [default to false]
**is_customer** | **bool** |  | [optional] [default to false]
**is_inactive** | **bool** |  | [optional] [default to false]
**email** | **string** |  | [optional] 
**bank_accounts** | **string[]** | List of the bank account numbers for this supplier.  Norwegian bank account numbers only. | [optional] 
**invoice_email** | **string** |  | [optional] 
**phone_number** | **string** |  | [optional] 
**phone_number_mobile** | **string** |  | [optional] 
**description** | **string** |  | [optional] 
**is_private_individual** | **bool** |  | [optional] [default to false]
**show_products** | **bool** |  | [optional] [default to false]
**account_manager** | [**\Tripletex\Model\Employee**](Employee.md) |  | [optional] 
**postal_address** | [**\Tripletex\Model\Address**](Address.md) |  | [optional] 
**physical_address** | [**\Tripletex\Model\Address**](Address.md) |  | [optional] 
**delivery_address** | [**\Tripletex\Model\Address**](Address.md) |  | [optional] 
**category1** | [**\Tripletex\Model\CustomerCategory**](CustomerCategory.md) | Category 1 of this supplier | [optional] 
**category2** | [**\Tripletex\Model\CustomerCategory**](CustomerCategory.md) | Category 2 of this supplier | [optional] 
**category3** | [**\Tripletex\Model\CustomerCategory**](CustomerCategory.md) | Category 3 of this supplier | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


