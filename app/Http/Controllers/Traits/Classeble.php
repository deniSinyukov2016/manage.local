<?php

namespace App\Http\Controllers\Traits;


trait Classeble
{
    public $priorites;
    public $statuses;

    public function __construct()
    {
        $this->priorites = config('enums.projects.priorities');
        $this->statuses = config('enums.projects.statuses');
        $this->change();
    }

    public function change()
    {
        foreach ($this->priorites as $key => &$priorite) {
            $this->priorites[$key] = strtoupper(str_slug($priorite, '_'));
        }
        foreach ($this->statuses as $key => &$status) {
            $this->statuses[$key] = strtoupper(str_slug($status, '_'));
        }
    }

    public function priorityClass()
    {
        switch ($this->priority) {
            case $this->priorites['VERY_HIGH'] : {
                return 'btn-danger';
            }break;
            case $this->priorites['HIGH'] : {
                return 'btn-warning';
            }break;
            case $this->priorites['MIDDLE'] : {
                return 'btn-primary';
            }break;
            default: return 'btn-success';
        }
    }

    public function statusClass()
    {
        switch ($this->status) {
            case $this->statuses['ACTIVE'] : {
                return 'btn-primary';
            }break;
            case $this->statuses['PAUSE'] : {
                return 'btn-warning';
            }break;
            case $this->statuses['DONE'] : {
                return 'btn-success';
            }break;
            case $this->statuses['CLOSE'] : {
                return 'btn-danger';
            }break;
            default: return 'btn-default';
        }
    }
}