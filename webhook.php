<?php
    
$client->channel->createMessage([
    'channel.id' => $channelId,
    'content'    => "undefined",
    'embed'      => [
        "title": "Rules?",
        "description": "Here are the rules of the server and discord server if you want to see the updated rules they will be on the forums momentarily Forums >>[<Click Here>](https://forums.astronmc.net/forums)",
        "url": "https://discordapp.com",
        "color": 13632027,
        "timestamp": "2018-02-15T19:53:30.515Z",
        "footer": [
            "icon_url": "https://cdn.discordapp.com/embed/avatars/0.png",
            "text": "footer text"
        ],
        "thumbnail": [
            "url": "https://cdn.discordapp.com/embed/avatars/0.png"
        ],
        "image": [
            "url": "https://forums.astronmc.net/forums/styles/brivium/xenon/xenforo/logo.png"
        ],
        "author": [
            "name": "RelliexHD",
            "url": "https://discordapp.com",
            "icon_url": "https://cdn.discordapp.com/avatars/243780522092789762/a_9f08beef8a4fe7cc7d4b6c6b6c89c14f.webp?size=128"
        ],
        "fields": [
            [
                "name": "Rule 1",
                "value": "Don't Hack? I mean this is obvious"
            ],
            [
                "name": "Rule 2",
                "value": "Don't ask for Staff, go through the appropriate process"
            ],
            [
                "name": "Rule 3",
                "value": "Don't Spam"
            ]
        ]
    ]
]);