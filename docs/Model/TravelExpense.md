# TravelExpense

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  | [optional] 
**version** | **int** |  | [optional] 
**changes** | [**\Tripletex\Model\Change[]**](Change.md) |  | [optional] 
**url** | **string** |  | [optional] 
**project** | [**\Tripletex\Model\Project**](Project.md) |  | [optional] 
**employee** | [**\Tripletex\Model\Employee**](Employee.md) |  | 
**approved_by** | [**\Tripletex\Model\Employee**](Employee.md) |  | [optional] 
**completed_by** | [**\Tripletex\Model\Employee**](Employee.md) |  | [optional] 
**department** | [**\Tripletex\Model\Department**](Department.md) |  | [optional] 
**payslip** | [**\Tripletex\Model\Payslip**](Payslip.md) |  | [optional] 
**vat_type** | [**\Tripletex\Model\VatType**](VatType.md) |  | [optional] 
**payment_currency** | [**\Tripletex\Model\Currency**](Currency.md) |  | [optional] 
**travel_details** | [**\Tripletex\Model\TravelDetails**](TravelDetails.md) |  | [optional] 
**voucher** | [**\Tripletex\Model\Voucher**](Voucher.md) |  | [optional] 
**is_completed** | **bool** |  | [optional] [default to false]
**is_approved** | **bool** |  | [optional] [default to false]
**is_chargeable** | **bool** |  | [optional] [default to false]
**is_fixed_invoiced_amount** | **bool** |  | [optional] [default to false]
**is_include_attached_receipts_when_reinvoicing** | **bool** |  | [optional] [default to false]
**completed_date** | **string** |  | [optional] 
**approved_date** | **string** |  | [optional] 
**date** | **string** |  | [optional] 
**travel_advance** | **float** |  | [optional] 
**fixed_invoiced_amount** | **float** |  | [optional] 
**amount** | **float** |  | [optional] 
**low_rate_vat** | **float** |  | [optional] 
**medium_rate_vat** | **float** |  | [optional] 
**high_rate_vat** | **float** |  | [optional] 
**payment_amount** | **float** |  | [optional] 
**payment_amount_currency** | **float** |  | [optional] 
**number** | **int** |  | [optional] 
**invoice** | [**\Tripletex\Model\Invoice**](Invoice.md) |  | [optional] 
**title** | **string** |  | [optional] 
**per_diem_compensations** | [**\Tripletex\Model\PerDiemCompensation[]**](PerDiemCompensation.md) | Link to individual per diem compensations. | [optional] 
**mileage_allowances** | [**\Tripletex\Model\MileageAllowance[]**](MileageAllowance.md) | Link to individual mileage allowances. | [optional] 
**accommodation_allowances** | [**\Tripletex\Model\AccommodationAllowance[]**](AccommodationAllowance.md) | Link to individual accommodation allowances. | [optional] 
**costs** | [**\Tripletex\Model\Cost[]**](Cost.md) | Link to individual costs. | [optional] 
**attachment_count** | **int** |  | [optional] 
**state** | **string** |  | [optional] 
**actions** | [**\Tripletex\Model\Link[]**](Link.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


