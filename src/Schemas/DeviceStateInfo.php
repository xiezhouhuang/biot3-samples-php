<?php


namespace Kyzone\BIot\Schemas;


class DeviceStateInfo
{
    public string $deviceId; //string
    public string $state;//	string Enum: [ {text=禁用, value=notActive}, {text=离线, value=offline}, {text=在线, value=online} ]

}