<?php

namespace CodifyLLC\SolidTrustPay;

class StpCallback {

    /**
     * @var $status 'COMPLETE' if successful
     */
    private $status	= '';
    private $user1	= '';
    private $user2	= '';
    private $user3	= '';
    private $user4	= '';
    private $user5	= '';
    private $user6	= '';
    private $user7	= '';
    private $user8	= '';
    private $user9	= '';
    private $user10	= '';
    private $return_url	= '';
    private $item_id	= '';
    private $tr_id	= '';
    private $amount	= '';

    public function __construct()
    {
        foreach($_POST as $key => $val) {
            if (property_exists($this, $key)) {
                $this->$key = $val;
            }
        }
    }

    /**
     * @return mixed
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @return mixed
     */
    public function getUser1()
    {
        return $this->user1;
    }

    /**
     * @return mixed
     */
    public function getUser2()
    {
        return $this->user2;
    }

    /**
     * @return mixed
     */
    public function getUser3()
    {
        return $this->user3;
    }

    /**
     * @return mixed
     */
    public function getUser4()
    {
        return $this->user4;
    }

    /**
     * @return mixed
     */
    public function getUser5()
    {
        return $this->user5;
    }

    /**
     * @return mixed
     */
    public function getUser6()
    {
        return $this->user6;
    }

    /**
     * @return mixed
     */
    public function getUser7()
    {
        return $this->user7;
    }

    /**
     * @return mixed
     */
    public function getUser8()
    {
        return $this->user8;
    }

    /**
     * @return mixed
     */
    public function getUser9()
    {
        return $this->user9;
    }

    /**
     * @return mixed
     */
    public function getUser10()
    {
        return $this->user10;
    }

    /**
     * @return mixed
     */
    public function getReturnUrl()
    {
        return $this->return_url;
    }

    /**
     * @return mixed
     */
    public function getItemId()
    {
        return $this->item_id;
    }

    /**
     * @return mixed
     */
    public function getTrId()
    {
        return $this->tr_id;
    }

    /**
     * @return mixed
     */
    public function getAmount()
    {
        return $this->amount;
    }


}