<?php

namespace Apps\Tms\Packages\Jobs\Fuel\Model;

use System\Base\BaseModel;

class AppsTmsJobsFuel extends BaseModel
{
    public $id;

    public $lr_no;

    public $voucher_no;

    public $vehicle_id;

    public $fuel_tx_type;

    public $fill_transfer_date;

    public $vendor_id;

    public $transfer_to_vehicle_id;

    public $fuel_payment_tx_id;

    public $from_route_location;

    public $to_route_location;

    public $open_odo_reading;

    public $close_odo_reading;

    public $total_odo_reading;

    public $kmpl;

    public $average;

    public $quantity;

    public $rate;

    public $amount;

    public $fuel_notes;
}