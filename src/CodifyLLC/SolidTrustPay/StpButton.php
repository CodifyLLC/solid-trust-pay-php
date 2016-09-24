<?php

namespace CodifyLLC\SolidTrustPay;

class StpButton {
    /** Setup Private Vars */
    private $api_url;
    private $params;


    /**
     * The constructor function
     */
    public function __construct()
    {

        $this->api_url = 'https://solidtrustpay.com/handle.php';
        $this->params = array(
            'currency'  => 'USD'
        );
    }

    /**
     * The set parameter function
     *
     *
     * @param string $key The key to use.
     * @param string $val The value to set.
     */
    public function setParam($key, $val) {
        $this->params[$key] = $val;
    }

    public function setMerchantAccount($val) { $this->params['merchantAccount'] = $val; }
    public function setItemId($val) { $this->params['item_id'] = $val; }
    public function setSciName($val) { $this->params['sci_name'] = $val; }
    public function setCurrency($val) { $this->params['currency'] = $val; }
    public function setLogo($val) { $this->params['logo'] = $val; }

    /**
     * @param $val - Should only be set to "On" when you want to test, otherwise do not set it
     */
    public function setTestMode($val) { $this->params['testmode'] = $val; }
    public function setUser1($val) { $this->params['user1'] = $val; }
    public function setUser2($val) { $this->params['user2'] = $val; }
    public function setUser3($val) { $this->params['user3'] = $val; }
    public function setUser4($val) { $this->params['user4'] = $val; }
    public function setUser5($val) { $this->params['user5'] = $val; }
    public function setUser6($val) { $this->params['user6'] = $val; }
    public function setUser7($val) { $this->params['user7'] = $val; }
    public function setUser8($val) { $this->params['user8'] = $val; }
    public function setUser9($val) { $this->params['user9'] = $val; }
    public function setUser10($val) { $this->params['user10'] = $val; }

    public function setReturnUrl($val) { $this->params['return_url'] = $val; }
    public function setCancelUrl($val) { $this->params['cancel_url'] = $val; }
    public function setNotifyUrl($val) { $this->params['notify_url'] = $val; }
    public function setAmount($val) { $this->params['amount'] = $val; }

    /**
     * Render
     * @param int $auto_submit Set to 0 if you want a button to click on.. Otherwise number of miliseconds to auto submit with javascript
     */
    public function render($auto_submit=1000)
    {
        ob_start();

        ?>
        <form action="<?php print $this->api_url; ?>" method="post" id="stpform">

            <?php foreach($this->params as $field => $val) { ?>
                <input type="hidden" name="<?php print $field;?>" value="<?php print $val; ?>" />
            <?php } ?>
        </form>


        <?php if (!empty($auto_submit)) { ?>
        <script type="text/javascript">
            setTimeout(function () {
                document.forms["stpform"].submit();
            }, <?php print $auto_submit; ?>);
        </script>
    <?php } ?>
        <?php
        $form = ob_get_clean();

        print $form;
    }
}