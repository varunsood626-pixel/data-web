<?php

function checkLogin()
{
    if (empty(session()->get('admin_id'))) 
    {
        return redirect()->to(base_url("login"));
    } 
    return "";
}

function customHelper()
{
    return "Helper loaded";
}
