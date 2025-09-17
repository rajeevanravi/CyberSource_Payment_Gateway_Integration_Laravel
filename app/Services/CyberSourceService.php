<?php

namespace App\Services;

class CyberSourceService
{
    const HMAC_SHA256 = 'sha256';

    public static function sign(array $params)
    {
        return self::signData(
            self::buildDataToSign($params),
            config('services.cybersource.secret_key') //  read from config/env
        );
    }

    private static function signData($data, $secretKey)
    {
        return base64_encode(hash_hmac(self::HMAC_SHA256, $data, $secretKey, true));
    }

    private static function buildDataToSign($params)
    {
        $signedFieldNames = explode(",", $params["signed_field_names"]);
        $dataToSign = [];

        foreach ($signedFieldNames as $field) {
            $dataToSign[] = $field . "=" . $params[$field];
        }

        return implode(",", $dataToSign);
    }
}
