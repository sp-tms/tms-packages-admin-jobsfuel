<?php

namespace Apps\Tms\Packages\Jobs\Fuel;

use Apps\Tms\Packages\Jobs\Fuel\Model\AppsTmsJobsFuel;
use System\Base\BasePackage;

class JobsFuel extends BasePackage
{
    protected $modelToUse = AppsTmsJobsFuel::class;

    protected $packageName = 'jobsfuel';

    public $jobsfuel;

    public function init()
    {
        parent::init();

        return $this;
    }

    public function addJobsFuel($data)
    {
        if ($data['fuel_tx_type'] == '3') {//Transfer
            if ($data['vehicle_id'] == $data['transfer_to_vehicle_id']) {
                $this->addResponse('Can not transfer to self', 1);

                return false;
            }
        }

        if ($this->add($data)) {
            $this->addResponse('Fuel added!', 0, ['newFuel' => $this->packagesData->last]);

            return true;
        }

        $this->addResponse('Unable to add fuel', 1);

        return false;
    }

    public function updateJobsFuel($data)
    {
        $fuel = $this->getById((int) $data['id']);

        if (!$fuel) {
            $this->addResponse('Fuel with ID not found!', 1);

            return false;
        }

        if ($this->update($data)) {
            $this->addResponse('Fuel updated!', 0, ['updatedFuel' => $this->packagesData->last]);

            return true;
        }

        $this->addResponse('Unable to update fuel', 1);

        return false;
    }

    public function removeJobsFuel($data)
    {
        $fuel = $this->getById((int) $data['id']);

        if (!$fuel) {
            $this->addResponse('Fuel with ID not found!', 1);

            return false;
        }

        if ($this->remove((int) $data['id'])) {
            $this->addResponse('Fuel removed!');

            return false;
        }

        $this->addResponse('Unable to remove fuel', 1);

        return false;
    }

    public function getFuelTransactionTypes()
    {
        return
            [
                '1' =>
                    [
                        'id' => '1',
                        'name'  => 'Purchase (Cash)'
                    ],
                '2' =>
                    [
                        'id' => '2',
                        'name'  => 'Purchase (Online)'
                    ],
                '3' =>
                    [
                        'id' => '3',
                        'name'  => 'Transfer'
                    ]
            ];
    }
}