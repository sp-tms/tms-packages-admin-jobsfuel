<?php

namespace Apps\Tms\Packages\Jobs\Fuel;

use System\Base\BasePackage;

class JobsFuel extends BasePackage
{
    //protected $modelToUse = ::class;

    protected $packageName = 'jobsfuel';

    public $jobsfuel;

    public function init()
    {
        //Note: If you want to use init function, you need to run parent::init as well.
        //It is used by the use app database feature of the app.
        //if you remove the init() function from this class, it is also fine.
        parent::init();

        return $this;
    }

    public function getJobsFuelById($id)
    {
        $jobsfuel = $this->getById($id);

        if ($jobsfuel) {
            //
            $this->addResponse('Success');

            return;
        }

        $this->addResponse('Error', 1);
    }

    public function addJobsFuel($data)
    {
        //
    }

    public function updateJobsFuel($data)
    {
        $jobsfuel = $this->getById($id);

        if ($jobsfuel) {
            //
            $this->addResponse('Success');

            return;
        }

        $this->addResponse('Error', 1);
    }

    public function removeJobsFuel($data)
    {
        $jobsfuel = $this->getById($id);

        if ($jobsfuel) {
            //
            $this->addResponse('Success');

            return;
        }

        $this->addResponse('Error', 1);
    }
}