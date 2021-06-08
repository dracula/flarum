<?php

namespace dracula\theme;

use Flarum\Extend;
use Flarum\Frontend\Document;

return [
    (new Extend\Frontend('forum'))
        ->content(function (Document $document) {
            $document->head[] = '
            <style>
                .App-header {
                    background: #282a36;
                }
                body {
                    background: #282a36;
                }
                h3.DiscussionListItem-title {
                    font-family: Abril Text!important;
                }
                .Dropdown-menu>li.active>a {
                    color:#ffb86c!important;
                }
                .Dropdown-menu>li>a {
                    color:#bd93f9!important;
                }
                .WelcomeHero {
                    color: #50fa7b;
                    background: #6272a4;
                }
                .Hero-title {
                    font-family: Abril Text;
                    font-size: 26px!important;
                    color:#50fa7b;
                }
                .Hero-subtitle {
                    color:#f8f8f2;
                }
                .Hero-close {
                    color: #f1fa8c!important;
                }
                .Dropdown-menu {
                    background: #44475a;
                }
                .Dropdown-menu>li>a, .Dropdown-menu>li>button, .Dropdown-menu>li>span{
                    color:#f8f8f2;
                }
                .FormControl {
                    color: #667c99;
                    background-color: #44475a;
                }
                .FormControl:focus,.FormControl.focus {
                    color: #667c99;
                    background-color: #44475a;
                }
                .Button:hover, .Button:focus, .Button.focus {
                    background-color: #8be9fd;
                }
                .Button:active, .Button.active, .open>.Dropdown-toggle.Button {
                    background-color: #8be9fd;
                }
                .NotificationsDropdown .Dropdown-toggle {
                    background: transparent;
                    color: #f8f8f2;
                }
                .SessionDropdown .Dropdown-toggle {
                    background: transparent;
                    color: #f8f8f2;
                }
                .Button--primary {
                    color: #44475a;
                    background: #50fa7b;
                }
                .Dropdown-toggle {
                    color: #44475a;
                    background: #bd93f9;
                }
                .Button--icon {
                    color: #44475a;
                    background: #ffb86c;
                }
                .DiscussionListItem:hover {
                    background: #44475a;
                }
                
            </style>';'<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Abril+Fatface" />';
        })
];