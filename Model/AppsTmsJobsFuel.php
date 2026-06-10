<?php

namespace Apps\Tms\Packages\Jobs\Fuel\Model;

use System\Base\BaseModel;

class AppsTmsJobsFuel extends BaseModel
{
    public $id;

    public $lr_no;

    public $open_odo_reading;

    public $close_odo_reading;

    public $total_odo_reading;

    public $average;

    public $quantity;

    public $rate;

    public $amount;

    public $vendor_id;

    public $transfer_to_vehicle_id;

    public $type;

    public $fuel_notes;
}