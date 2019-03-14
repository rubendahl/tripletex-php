# Project

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  | [optional] 
**version** | **int** |  | [optional] 
**changes** | [**\Tripletex\Model\Change[]**](Change.md) |  | [optional] 
**url** | **string** |  | [optional] 
**name** | **string** |  | 
**number** | **string** |  | [optional] 
**display_name** | **string** |  | [optional] 
**description** | **string** |  | [optional] 
**project_manager** | [**\Tripletex\Model\Employee**](Employee.md) |  | 
**department** | [**\Tripletex\Model\Department**](Department.md) |  | [optional] 
**main_project** | [**\Tripletex\Model\Project**](Project.md) |  | [optional] 
**start_date** | **string** |  | 
**end_date** | **string** |  | [optional] 
**customer** | [**\Tripletex\Model\Customer**](Customer.md) |  | [optional] 
**is_closed** | **bool** |  | [optional] [default to false]
**is_ready_for_invoicing** | **bool** |  | [optional] [default to false]
**is_internal** | **bool** | Must be set to true. | [default to false]
**is_offer** | **bool** |  | [optional] [default to false]
**project_category** | [**\Tripletex\Model\ProjectCategory**](ProjectCategory.md) |  | [optional] 
**delivery_address** | [**\Tripletex\Model\Address**](Address.md) |  | [optional] 
**display_name_format** | **string** | Defines project name presentation in overviews. | [optional] 
**external_accounts_number** | **string** |  | [optional] 
**discount_percentage** | [**BigDecimal**](BigDecimal.md) | Project discount percentage. | [optional] 
**order_lines** | [**\Tripletex\Model\ProjectOrderLine[]**](ProjectOrderLine.md) | Order lines tied to the order | [optional] 
**participants** | [**\Tripletex\Model\ProjectParticipant[]**](ProjectParticipant.md) | Link to individual project participants. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)

