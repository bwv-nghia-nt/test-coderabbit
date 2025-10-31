<?php

namespace App\Observers;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class ModelObserver
{
    private static $systemUserId;

    private static $now;

    /**
     * Create a new observer instance.
     */
    public function __construct() {
        self::$systemUserId = config('system.system_user_id');
        self::$now = Carbon::now();
    }

    /**
     * Handle the model "created" event.
     * @param Model $model
     */
    public function creating(Model $model): void {
        $model->created_by = $this->getCurrentUserId();
        $model->created_at = self::$now;
        $model->updated_by = $this->getCurrentUserId();
        $model->updated_at = self::$now;
        $model->deleted_by = null;
        $model->deleted_at = null;
    }

    /**
     * Handle the model "updated" and "deleted" event.
     * @param Model $model
     */
    public function updating(Model $model): void {
        if ($model->isDirty('del_flg') && $model->del_flg == 1) {
            $model->deleted_by = $this->getCurrentUserId();
            $model->deleted_at = self::$now;
        } else {
            $model->updated_by = $this->getCurrentUserId();
            $model->updated_at = self::$now;
        }
    }

    /**
     * Get the ID of the current user or the system user ID if running in the console.
     */
    private function getCurrentUserId(): int {
        return Auth::id() ?? self::$systemUserId;
    }
}
