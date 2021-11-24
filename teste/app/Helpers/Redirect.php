<?php

function Redirect($to)
{
    return header('Location: ' . $to);
}
