# Swagger\Client\HotelApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**hotelAvailability**](HotelApi.md#hotelavailability) | **POST** /v1/hotel/booking/availability | list bookable hotels
[**hotelBookingCancellation**](HotelApi.md#hotelbookingcancellation) | **DELETE** /v1/hotel/booking/cancellation/{reference} | cancel hotel booking
[**hotelBookingConfirmation**](HotelApi.md#hotelbookingconfirmation) | **POST** /v1/hotel/booking/confirmation | confirm hotel booking
[**hotelCheckRate**](HotelApi.md#hotelcheckrate) | **POST** /v1/hotel/booking/checkrate | check hotel rating
[**hotelRetrieveBooking**](HotelApi.md#hotelretrievebooking) | **POST** /v1/hotel/booking/{reference} | retrieve hotel booking

# **hotelAvailability**
> \Swagger\Client\Model\HotelAvailabilityResponse hotelAvailability($body)

list bookable hotels

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\HotelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\HotelAvailabilityRequest(); // \Swagger\Client\Model\HotelAvailabilityRequest | 

try {
    $result = $apiInstance->hotelAvailability($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HotelApi->hotelAvailability: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\HotelAvailabilityRequest**](../Model/HotelAvailabilityRequest.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\HotelAvailabilityResponse**](../Model/HotelAvailabilityResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **hotelBookingCancellation**
> \Swagger\Client\Model\HotelCancellationResponse hotelBookingCancellation($reference, $simulation, $language)

cancel hotel booking

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: api_auth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-AUTHORIZATION', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-AUTHORIZATION', 'Bearer');

$apiInstance = new Swagger\Client\Api\HotelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$reference = "reference_example"; // string | 
$simulation = true; // bool | 
$language = "language_example"; // string | 

try {
    $result = $apiInstance->hotelBookingCancellation($reference, $simulation, $language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HotelApi->hotelBookingCancellation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **reference** | **string**|  |
 **simulation** | **bool**|  |
 **language** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\HotelCancellationResponse**](../Model/HotelCancellationResponse.md)

### Authorization

[api_auth](../../README.md#api_auth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **hotelBookingConfirmation**
> \Swagger\Client\Model\HotelConfirmationResponse hotelBookingConfirmation($body)

confirm hotel booking

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: api_auth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-AUTHORIZATION', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-AUTHORIZATION', 'Bearer');

$apiInstance = new Swagger\Client\Api\HotelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\HotelConfirmationRequest(); // \Swagger\Client\Model\HotelConfirmationRequest | 

try {
    $result = $apiInstance->hotelBookingConfirmation($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HotelApi->hotelBookingConfirmation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\HotelConfirmationRequest**](../Model/HotelConfirmationRequest.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\HotelConfirmationResponse**](../Model/HotelConfirmationResponse.md)

### Authorization

[api_auth](../../README.md#api_auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **hotelCheckRate**
> \Swagger\Client\Model\HotelCheckRatesResponse hotelCheckRate($body)

check hotel rating

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: api_auth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-AUTHORIZATION', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-AUTHORIZATION', 'Bearer');

$apiInstance = new Swagger\Client\Api\HotelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\HotelCheckRatesRequest(); // \Swagger\Client\Model\HotelCheckRatesRequest | 

try {
    $result = $apiInstance->hotelCheckRate($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HotelApi->hotelCheckRate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\HotelCheckRatesRequest**](../Model/HotelCheckRatesRequest.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\HotelCheckRatesResponse**](../Model/HotelCheckRatesResponse.md)

### Authorization

[api_auth](../../README.md#api_auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **hotelRetrieveBooking**
> \Swagger\Client\Model\HotelRetrieveBookingResponse hotelRetrieveBooking($reference, $language)

retrieve hotel booking

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: api_auth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-AUTHORIZATION', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-AUTHORIZATION', 'Bearer');

$apiInstance = new Swagger\Client\Api\HotelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$reference = "reference_example"; // string | 
$language = "language_example"; // string | 

try {
    $result = $apiInstance->hotelRetrieveBooking($reference, $language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HotelApi->hotelRetrieveBooking: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **reference** | **string**|  |
 **language** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\HotelRetrieveBookingResponse**](../Model/HotelRetrieveBookingResponse.md)

### Authorization

[api_auth](../../README.md#api_auth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

