<?php

function formatrupiah($nominal)
{
    return "Rp " . number_format($nominal, 2, ',', '.');
}