<?php

if (! function_exists('hashid_encode')) {
    function hashid_encode($id)
    {
        if (config('app.hashid.encrypt') == false) {
            return $id;
        }
        return app('Hashids')
            ->encode($id);
    }
}

if (! function_exists('hashid_decode')) {
    function hashid_decode($str)
    {
        if (config('app.hashid.encrypt') == false) {
            return $str;
        }
        $decode = app('Hashids')->decode($str);
        return (int) reset($decode);
    }
}
