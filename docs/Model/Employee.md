# Employee

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  | [optional] 
**version** | **int** |  | [optional] 
**changes** | [**\Tripletex\Model\Change[]**](Change.md) |  | [optional] 
**url** | **string** |  | [optional] 
**first_name** | **string** |  | 
**last_name** | **string** |  | 
**employee_number** | **string** |  | [optional] 
**date_of_birth** | **string** |  | [optional] 
**email** | **string** |  | [optional] 
**phone_number_mobile** | **string** |  | [optional] 
**phone_number_home** | **string** |  | [optional] 
**national_identity_number** | **string** |  | [optional] 
**dnumber** | **string** |  | [optional] 
**international_id** | [**\Tripletex\Model\InternationalId**](InternationalId.md) |  | [optional] 
**bank_account_number** | **string** |  | [optional] 
**user_type** | **string** | Define the employee&#x27;s user type.&lt;br&gt;STANDARD: Reduced access. Users with limited system entitlements.&lt;br&gt;EXTENDED: Users can be given all system entitlements.&lt;br&gt;NO_ACCESS: User with no log on access.&lt;br&gt;Users with access to Tripletex must confirm the email address. | [optional] 
**allow_information_registration** | **bool** | Determines if salary information can be registered on the user including hours, travel expenses and employee expenses. The user may also be selected as a project member on projects. | [optional] [default to false]
**is_contact** | **bool** |  | [optional] [default to false]
**comments** | **string** |  | [optional] 
**address** | [**\Tripletex\Model\Address**](Address.md) |  | [optional] 
**department** | [**\Tripletex\Model\Department**](Department.md) |  | [optional] 
**employments** | [**\Tripletex\Model\Employment[]**](Employment.md) | Employments tied to the employee | [optional] 
**holiday_allowance_earned** | [**\Tripletex\Model\HolidayAllowanceEarned**](HolidayAllowanceEarned.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)

