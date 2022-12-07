<?php
// …

namespace tinymce_planetestream\privacy;

class provider {

public static function get_metadata(collection $collection): collection {
    $collection->add_external_location_link('tinymce_planetestream', [
            'userid' => 'privacy:metadata:tinymce_planetestream:userid',           
		    'email' => 'privacy:metadata:tinymce_planetestream:email',
            'userip' => 'privacy:metadata:tinymce_planetestream:userip',
        ], 'privacy:metadata:tinymce_planetestream');

    return $collection;
}

}