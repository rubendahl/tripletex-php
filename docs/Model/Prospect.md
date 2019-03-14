# Prospect

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  | [optional] 
**version** | **int** |  | [optional] 
**changes** | [**\Tripletex\Model\Change[]**](Change.md) |  | [optional] 
**url** | **string** |  | [optional] 
**name** | **string** |  | [optional] 
**description** | **string** |  | [optional] 
**created_date** | **string** |  | 
**customer** | [**\Tripletex\Model\Customer**](Customer.md) |  | [optional] 
**sales_employee** | [**\Tripletex\Model\Employee**](Employee.md) |  | [optional] 
**is_closed** | **bool** |  | [optional] [default to false]
**closed_reason** | **int** |  | [optional] 
**closed_date** | **string** |  | [optional] 
**competitor** | **string** |  | [optional] 
**prospect_type** | **int** |  | [optional] 
**project** | [**\Tripletex\Model\Project**](Project.md) |  | [optional] 
**project_offer** | [**\Tripletex\Model\Project**](Project.md) |  | [optional] 
**final_income_date** | **string** | The estimated start date for income on the prospect. | [optional] 
**final_initial_value** | [**BigDecimal**](BigDecimal.md) | The estimated startup fee on this prospect. | [optional] 
**final_monthly_value** | [**BigDecimal**](BigDecimal.md) | The estimated monthly fee on this prospect. | [optional] 
**final_additional_services_value** | [**BigDecimal**](BigDecimal.md) | Tripletex specific. | [optional] 
**total_value** | [**BigDecimal**](BigDecimal.md) | The estimated total fee on this prospect. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)

