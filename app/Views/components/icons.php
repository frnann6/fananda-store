<?php
function icon($name)
{
    switch ($name) {

        case 'dashboard':
            return '
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor">
                <rect x="3" y="3" width="7" height="7" rx="2"/>
                <rect x="14" y="3" width="7" height="4" rx="2"/>
                <rect x="14" y="10" width="7" height="11" rx="2"/>
                <rect x="3" y="14" width="7" height="7" rx="2"/>
            </svg>';

        case 'products':
            return '
            <svg viewBox="0 0 24 24" fill="none" stroke="#333">
                <path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"/>
            </svg>';

        case 'users':
            return '
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor">
                <path d="M17 21v-2a4 4 0 0 0-3-3.87"/>
                <path d="M7 21v-2a4 4 0 0 1 3-3.87"/>
                <circle cx="12" cy="7" r="4"/>
            </svg>';

        default:
            return 'ICON NOT FOUND: ' . $name;
    }
}
