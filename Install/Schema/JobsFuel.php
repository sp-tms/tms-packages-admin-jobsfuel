<?php

namespace Apps\Tms\Packages\Jobs\Fuel\Install\Schema;

use Phalcon\Db\Column;
use Phalcon\Db\Index;

class JobsFuel
{
    public function columns()
    {
        return
        [
           'columns' => [
                new Column(
                    'id',
                    [
                        'type'          => Column::TYPE_INTEGER,
                        'notNull'       => true,
                        'autoIncrement' => true,
                        'primary'       => true,
                    ]
                ),
                new Column(
                    'lr_no',
                    [
                        'type'          => Column::TYPE_INTEGER,
                        'notNull'       => true,
                    ]
                ),
                new Column(
                    'voucher_no',
                    [
                        'type'          => Column::TYPE_INTEGER,
                        'notNull'       => true,
                    ]
                ),
                new Column(
                    'vehicle_id',
                    [
                        'type'          => Column::TYPE_INTEGER,
                        'notNull'       => true,
                    ]
                ),
                new Column(//1 - purchase, 2 - transfer to another vehicle
                    'fuel_tx_type',
                    [
                        'type'          => Column::TYPE_TINYINTEGER,
                        'notNull'       => false,
                    ]
                ),
                new Column(
                    'fill_transfer_date',
                    [
                        'type'          => Column::TYPE_VARCHAR,
                        'size'          => 50,
                        'notNull'       => true,
                    ]
                ),
                new Column(
                    'vendor_id',
                    [
                        'type'          => Column::TYPE_INTEGER,
                        'notNull'       => false,
                    ]
                ),
                new Column(
                    'transfer_to_vehicle_id',
                    [
                        'type'          => Column::TYPE_INTEGER,
                        'notNull'       => false,
                    ]
                ),
                new Column(
                    'fuel_payment_tx_id',//If mode of payment is online
                    [
                        'type'          => Column::TYPE_VARCHAR,
                        'size'          => 512,
                        'notNull'       => false,
                    ]
                ),
                new Column(
                    'from_route_location',
                    [
                        'type'          => Column::TYPE_INTEGER,
                        'notNull'       => false,
                    ]
                ),
                new Column(
                    'to_route_location',
                    [
                        'type'          => Column::TYPE_INTEGER,
                        'notNull'       => false,
                    ]
                ),
                new Column(
                    'open_odo_reading',
                    [
                        'type'          => Column::TYPE_FLOAT,
                        'notNull'       => false,
                    ]
                ),
                new Column(
                    'close_odo_reading',
                    [
                        'type'          => Column::TYPE_FLOAT,
                        'notNull'       => false,
                    ]
                ),
                new Column(
                    'total_odo_reading',
                    [
                        'type'          => Column::TYPE_FLOAT,
                        'notNull'       => false,
                    ]
                ),
                new Column(
                    'kmpl',
                    [
                        'type'          => Column::TYPE_FLOAT,
                        'notNull'       => false,
                    ]
                ),
                new Column(
                    'average',
                    [
                        'type'          => Column::TYPE_FLOAT,
                        'notNull'       => false,
                    ]
                ),
                new Column(
                    'quantity',
                    [
                        'type'          => Column::TYPE_FLOAT,
                        'notNull'       => false,
                    ]
                ),
                new Column(
                    'rate',
                    [
                        'type'          => Column::TYPE_FLOAT,
                        'notNull'       => false,
                    ]
                ),
                new Column(
                    'amount',
                    [
                        'type'          => Column::TYPE_FLOAT,
                        'notNull'       => false,
                    ]
                ),
                new Column(
                    'fuel_notes',
                    [
                        'type'          => Column::TYPE_VARCHAR,
                        'size'          => 1024,
                        'notNull'       => false,
                    ]
                ),
            ],
            'indexes' => [
                new Index(
                    'column_UNIQUE',
                    [
                        'lr_no',
                        'vehicle_id',
                        'vendor_id',
                        'transfer_to_vehicle_id',
                        'fill_transfer_date',
                        'open_odo_reading'
                    ],
                    'UNIQUE'
                )
            ],
            'options' => [
                'TABLE_COLLATION' => 'utf8mb4_general_ci'
            ]
        ];
    }

    public function indexes()
    {
        return
        [
            new Index(
                'column_INDEX',
                [
                    'lr_no',
                    'vehicle_id',
                    'vendor_id',
                    'fuel_tx_type'
                ],
                'INDEX'
            )
        ];
    }
}
