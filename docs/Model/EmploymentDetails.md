# EmploymentDetails

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  | [optional] 
**version** | **int** |  | [optional] 
**changes** | [**\Tripletex\Model\Change[]**](Change.md) |  | [optional] 
**url** | **string** |  | [optional] 
**employment** | [**\Tripletex\Model\Employment**](Employment.md) |  | [optional] 
**date** | **string** |  | [optional] 
**employment_type** | **string** | Define the employment type. | [optional] 
**maritime_employment** | [**\Tripletex\Model\MaritimeEmployment**](MaritimeEmployment.md) |  | [optional] 
**remuneration_type** | **string** | Define the remuneration type. | [optional] 
**working_hours_scheme** | **string** | Define the working hours scheme type. If you enter a value for SHIFT WORK, you must also enter value for shiftDurationHours | [optional] 
**shift_duration_hours** | **double** |  | [optional] 
**occupation_code** | **int** | To find the right value to enter in this field, you could go to GET /employee/employment/occupationCode to get a list of valid ID&#39;s. | [optional] 
**percentage_of_full_time_equivalent** | **double** |  | 
**annual_salary** | **double** |  | [optional] 
**hourly_wage** | **double** |  | [optional] 
**payroll_tax_municipality_id** | **int** |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


