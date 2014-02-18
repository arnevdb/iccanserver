<?php

class MenuMapper
{

    public function getMenuItems($accesslevel = 0)
    {
        if ($accesslevel > 0) {

            $menuItems = array(
                new Menu('home/logout', 'afmelden'),
            );
            if ($accesslevel > 1) {
                $menuItems = array_merge($menuItems,
                    array(
                        new Menu('tag', 'beheer tags'),
                        new Menu('vraag', 'beheer vragen'),
                        new Menu('taak','beheer van taken'),
                        new Menu('persoon','beheer van gebruikers'),
                    )
                );
            }
        } else {
            $menuItems = array(
                new Menu('home/login', 'log in'),
            );
        }

        return $menuItems;
    }
}