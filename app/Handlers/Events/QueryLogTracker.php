<?php
use Illuminate\Support\Facades\Log;

class QueryLogTracker {

    /**
     * Create the event handler.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }
    /**
     * Handle the event.
     *
     * @param  illuminate.query  $event
     * @return void
     */
    public function handle($query, $bindings)
    {
        //
        if (env(APP_DEBUG)) {
            Log::debug('EXECUTE SQL:[' . $query . ']', ['BINDINGS'=>json_encode($bindings)]);
        }
    }
}