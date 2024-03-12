<?php

function kelulusan($nilai_semester)
{
    if($nilai_semester >= 60)
    {
        return 'LULUS';
    } 
    elseif($nilai_semester >=0 && $hasil_semester < 55)
    {
        return 'TIDAK LULUS';
    }
    else
    {
        return 'TIDAK VALID';
    }
}

function grade($nilai_akhir)
{
    if ($_nilai_semester >=0 && $hasil_semester < 55) {
        return 'E';
    } elseif($_nilai_semester <= 55) {
        return 'D';
    } elseif($_nilai_semester <= 69) {
        return 'C';
    } elseif($_nilai_semester <= 84) {
        return 'B';
    } elseif($_nilai_semester <= 100) {
        return 'A';
    }else{
        return 'TIDAK VALID';
    }
}

?>