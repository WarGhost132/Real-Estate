<?php

include_once __DIR__ . "/../../abstraction/IRepository.php";
include_once __DIR__ . "/../../models/Application.php";


class ApplicationRepository implements IRepository
{
    private $curl;

    public function __construct(array $curl)
    {
        $this->curl = $curl;
    }

    public function save(Application $application) : bool
    {   
        $data = [
            "Token" => $this->curl['db_secret'],
            "Dto" => json_encode([
                "id" => $application->GetId(),
                "name" => $application->GetName(),
                "email" => $application->GetEmail(),
                "phone" => $application->GetPhone(),
                "telegram" => $application->GetTelegram(),
                "message" => $application->GetMessage()
            ])
        ];

        $options = [
            'http' => [
                'header' => $this->curl['header'],
                'method' => 'POST',
                'content' => json_encode($data),
            ]
        ];

        $context = stream_context_create($options);
        $result = file_get_contents($this->curl['url'], false, $context);
        // var_dump($options);

        return true;
    }
}