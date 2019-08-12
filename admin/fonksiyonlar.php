<?php
function checkInput($var)
{
    return stripcslashes(trim(htmlspecialchars($var)));
}

function kayitlimi($id)
{
    global $baglan;
    $sorgu=$baglan->prepare("SELECT id FROM blog WHERE id=?");
    $sorgu->execute(array($id));
    if ($sorgu->rowCount())
    {
        return true;
    }
    else
    {
        return false;
    }
}
function OturumAcikmi()
{
    return (isset($_SESSION['admin'])) ? true : false;
}
?>