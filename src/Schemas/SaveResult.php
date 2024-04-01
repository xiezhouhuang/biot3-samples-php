<?php


namespace Kyzone\BIot\Schemas;


use Kyzone\BIot\Base\SplBean;

class SaveResult extends SplBean
{

    public int $added;  //integer($int32)
    public int $updated;  //	integer($int32)
    public int $total;  //	integer($int32)

}