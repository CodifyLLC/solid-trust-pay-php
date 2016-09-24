# Solid Trust Pay

## StpButton
This class is used to generate a payment button

```php
$stpButton = new StpButton();
$stpButton->setMerchantAccount('YourMerchantValue');
$stpButton->setItemId('YourMerchantValue');
$stpButton->setSciName('YourMerchantValue');
$stpButton->setLogo('YourMerchantValue');
$stpButton->setUser1('user1 value');
$stpButton->setUser2('user2 value');
$stpButton->setUser3('user3 value');
// setUser* (up to 10)

$stpButton->setReturnUrl('http://yourReturnUrl.com/thankyou');
$stpButton->setCancelUrl('http://yourReturnUrl.com/cancel');
$stpButton->setNotifyUrl('http://yourReturnUrl.com/yourCallbackScript.php');
$stpButton->setAmount('25.99');

// Enable Test Mode
$stpButton->setTestMode('On');
```

## StpCallback
This class is used to fetch $_POST. This should be called from your notify_url value that 
you set in your StpButton class

```php
$stpCallback = new StpCallbck();

$status = $stpCallback->getStatus();
$user1 = $stpCallback->getUser1();
$user2 = $stpCallback->getUser2();

switch($status) {
    case 'COMPLETE':
        // This is successful!
        
        $stpTransId = $stpCallback->getTrId();
        break;
        
    default:
        // Something went wrong...
        break;
}
```
