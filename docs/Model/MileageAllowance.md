# MileageAllowance

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  | [optional] 
**version** | **int** |  | [optional] 
**changes** | [**\Tripletex\Model\Change[]**](Change.md) |  | [optional] 
**url** | **string** |  | [optional] 
**travel_expense** | [**\Tripletex\Model\TravelExpense**](TravelExpense.md) |  | [optional] 
**rate_type** | [**\Tripletex\Model\TravelExpenseRate**](TravelExpenseRate.md) |  | [optional] 
**rate_category** | [**\Tripletex\Model\TravelExpenseRateCategory**](TravelExpenseRateCategory.md) |  | [optional] 
**date** | **string** |  | 
**departure_location** | **string** |  | 
**destination** | **string** |  | 
**km** | [**BigDecimal**](BigDecimal.md) |  | [optional] 
**rate** | [**BigDecimal**](BigDecimal.md) |  | [optional] 
**amount** | [**BigDecimal**](BigDecimal.md) |  | [optional] 
**is_company_car** | **bool** |  | [optional] [default to false]
**passengers** | [**\Tripletex\Model\Passenger[]**](Passenger.md) | Link to individual passengers. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)

