# Swagger\Client\FlightApi

All URIs are relative to *https://virtserver.swaggerhub.com/alswagger/algebratecAPI/1.0.0*

Method | HTTP request | Description
------------- | ------------- | -------------
[**flightAirportAutocomplete**](FlightApi.md#flightairportautocomplete) | **GET** /v1/flight/booking/airport/{term} | airport autocomplete service
[**flightAvailability**](FlightApi.md#flightavailability) | **POST** /v1/flight/booking/availability | flight availability service
[**flightBookingConfirmaiton**](FlightApi.md#flightbookingconfirmaiton) | **POST** /v1/flight/booking/confirmation | confirm flight booking
[**flightFare**](FlightApi.md#flightfare) | **POST** /v1/flight/booking/fare | fare service to check if flight is still bookable
[**flightFareRules**](FlightApi.md#flightfarerules) | **POST** /v1/flight/booking/fareRules | flight fare rules service, this service provide the airline fare rules
[**flightOnHoldBookingConfirmation**](FlightApi.md#flightonholdbookingconfirmation) | **POST** /v1/flight/booking/confirmOnHoldBooking/{bookingId} | confirm on hold flight booking
[**flightRefreshPNR**](FlightApi.md#flightrefreshpnr) | **POST** /v1/flight/booking/refresh/{bookingId} | Refresh flight booking using booking id
[**flightRetrievePNR**](FlightApi.md#flightretrievepnr) | **GET** /v1/flight/booking/retrievePNR/{recordLocator} | retrieve PNR using PNR record
[**flightVoidPNR**](FlightApi.md#flightvoidpnr) | **DELETE** /v1/flight/booking/voidPNR/{bookingId} | void PNR service, this service should be used in non BSP market to cancel the PNR before midnight

# **flightAirportAutocomplete**
> \Swagger\Client\Model\FlightAirportAutocompleteResponse flightAirportAutocomplete($term)

airport autocomplete service

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: api_auth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-AUTHORIZATION', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-AUTHORIZATION', 'Bearer');

$apiInstance = new Swagger\Client\Api\FlightApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$term = "term_example"; // string | 

try {
    $result = $apiInstance->flightAirportAutocomplete($term);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FlightApi->flightAirportAutocomplete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **term** | **string**|  |

### Return type

[**\Swagger\Client\Model\FlightAirportAutocompleteResponse**](../Model/FlightAirportAutocompleteResponse.md)

### Authorization

[api_auth](../../README.md#api_auth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **flightAvailability**
> \Swagger\Client\Model\FlightAvailabilityResponse flightAvailability($body)

flight availability service

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: api_auth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-AUTHORIZATION', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-AUTHORIZATION', 'Bearer');

$apiInstance = new Swagger\Client\Api\FlightApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\FlightAvailabilityRequest(); // \Swagger\Client\Model\FlightAvailabilityRequest | 

try {
    $result = $apiInstance->flightAvailability($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FlightApi->flightAvailability: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\FlightAvailabilityRequest**](../Model/FlightAvailabilityRequest.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\FlightAvailabilityResponse**](../Model/FlightAvailabilityResponse.md)

### Authorization

[api_auth](../../README.md#api_auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **flightBookingConfirmaiton**
> \Swagger\Client\Model\FlightBookingResponse flightBookingConfirmaiton($body)

confirm flight booking

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: api_auth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-AUTHORIZATION', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-AUTHORIZATION', 'Bearer');

$apiInstance = new Swagger\Client\Api\FlightApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\FlightConfirmationRequest(); // \Swagger\Client\Model\FlightConfirmationRequest | 

try {
    $result = $apiInstance->flightBookingConfirmaiton($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FlightApi->flightBookingConfirmaiton: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\FlightConfirmationRequest**](../Model/FlightConfirmationRequest.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\FlightBookingResponse**](../Model/FlightBookingResponse.md)

### Authorization

[api_auth](../../README.md#api_auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **flightFare**
> \Swagger\Client\Model\FlightFareResponse flightFare($body)

fare service to check if flight is still bookable

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: api_auth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-AUTHORIZATION', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-AUTHORIZATION', 'Bearer');

$apiInstance = new Swagger\Client\Api\FlightApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\FlightBookingKeyRequest(); // \Swagger\Client\Model\FlightBookingKeyRequest | 

try {
    $result = $apiInstance->flightFare($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FlightApi->flightFare: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\FlightBookingKeyRequest**](../Model/FlightBookingKeyRequest.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\FlightFareResponse**](../Model/FlightFareResponse.md)

### Authorization

[api_auth](../../README.md#api_auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **flightFareRules**
> \Swagger\Client\Model\FlightFareRulesResponse flightFareRules($body)

flight fare rules service, this service provide the airline fare rules

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: api_auth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-AUTHORIZATION', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-AUTHORIZATION', 'Bearer');

$apiInstance = new Swagger\Client\Api\FlightApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\FlightBookingKeyRequest(); // \Swagger\Client\Model\FlightBookingKeyRequest | 

try {
    $result = $apiInstance->flightFareRules($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FlightApi->flightFareRules: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\FlightBookingKeyRequest**](../Model/FlightBookingKeyRequest.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\FlightFareRulesResponse**](../Model/FlightFareRulesResponse.md)

### Authorization

[api_auth](../../README.md#api_auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **flightOnHoldBookingConfirmation**
> \Swagger\Client\Model\FlightBookingResponse flightOnHoldBookingConfirmation($booking_id)

confirm on hold flight booking

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: api_auth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-AUTHORIZATION', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-AUTHORIZATION', 'Bearer');

$apiInstance = new Swagger\Client\Api\FlightApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$booking_id = "booking_id_example"; // string | 

try {
    $result = $apiInstance->flightOnHoldBookingConfirmation($booking_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FlightApi->flightOnHoldBookingConfirmation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **booking_id** | **string**|  |

### Return type

[**\Swagger\Client\Model\FlightBookingResponse**](../Model/FlightBookingResponse.md)

### Authorization

[api_auth](../../README.md#api_auth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **flightRefreshPNR**
> \Swagger\Client\Model\FlightBookingResponse flightRefreshPNR($booking_id)

Refresh flight booking using booking id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: api_auth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-AUTHORIZATION', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-AUTHORIZATION', 'Bearer');

$apiInstance = new Swagger\Client\Api\FlightApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$booking_id = "booking_id_example"; // string | 

try {
    $result = $apiInstance->flightRefreshPNR($booking_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FlightApi->flightRefreshPNR: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **booking_id** | **string**|  |

### Return type

[**\Swagger\Client\Model\FlightBookingResponse**](../Model/FlightBookingResponse.md)

### Authorization

[api_auth](../../README.md#api_auth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **flightRetrievePNR**
> \Swagger\Client\Model\FlightBookingResponse flightRetrievePNR($record_locator)

retrieve PNR using PNR record

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: api_auth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-AUTHORIZATION', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-AUTHORIZATION', 'Bearer');

$apiInstance = new Swagger\Client\Api\FlightApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$record_locator = "record_locator_example"; // string | 

try {
    $result = $apiInstance->flightRetrievePNR($record_locator);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FlightApi->flightRetrievePNR: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **record_locator** | **string**|  |

### Return type

[**\Swagger\Client\Model\FlightBookingResponse**](../Model/FlightBookingResponse.md)

### Authorization

[api_auth](../../README.md#api_auth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **flightVoidPNR**
> \Swagger\Client\Model\FlightBookingResponse flightVoidPNR($booking_id)

void PNR service, this service should be used in non BSP market to cancel the PNR before midnight

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: api_auth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-AUTHORIZATION', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-AUTHORIZATION', 'Bearer');

$apiInstance = new Swagger\Client\Api\FlightApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$booking_id = "booking_id_example"; // string | 

try {
    $result = $apiInstance->flightVoidPNR($booking_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FlightApi->flightVoidPNR: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **booking_id** | **string**|  |

### Return type

[**\Swagger\Client\Model\FlightBookingResponse**](../Model/FlightBookingResponse.md)

### Authorization

[api_auth](../../README.md#api_auth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

