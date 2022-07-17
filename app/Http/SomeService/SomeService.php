<?php

namespace App\Http\SomeService;

class SomeService
{
    private array $data;

    public function loadForm(int $form = 1, int $key = 0)
    {
        if ($key === 0){
            try {
                if ($form === 1) $this->loadOneForm(1);
                else $this->loadSecondForm();
            } catch (SomeException $e){
                $this->data = [
                    'message' => $e->getMessage(),
                ];
            }
        } else {
            if ($form === 1) $this->loadOneForm(1);
            else $this->loadSecondForm();
        }

        return $this->data;
    }

    private function loadOneForm(int $key = 0)
    {
        $SSH = new SomeServiceHelper();

        $data = [
            'message' => 'loadOneForm',
            'someHelper' => $SSH->SomeHelperMethod($key)
        ];
        $this->data = $data;
    }

    private function loadSecondForm(int $key = 0)
    {
        $SSH = new SomeServiceHelper();

        $data = [
            'message' => 'loadOneForm',
            'someHelper' => $SSH->SomeHelperMethod($key)
        ];
        $this->data = $data;
    }
}
